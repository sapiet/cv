<?php

namespace App\Controller;

use App\Services\ProfileProvider;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\FormInterface;
use Behat\Transliterator\Transliterator;
use Spipu\Html2Pdf\Html2Pdf;
use App\Helper\FormHelper;
use App\Form\ContactModel;
use App\Form\ContactType;
use Swift_Mailer;
use Swift_Message;

class MainController extends AbstractController
{
    /**
     * @var ProfileProvider
     */
    private $profileProvider;

    public function __construct(ProfileProvider $profileProvider)
    {
        $this->profileProvider = $profileProvider;
    }

    /**
     * Create contact form
     *
     * @return FormInterface Contact form
     */
    private function getContactForm(): FormInterface
    {
        return $this->createForm(ContactType::class, new ContactModel(), [
            'action' => $this->generateUrl('contact'),
            'method' => 'POST'
        ]);
    }

    /**
     * Display home page
     *
     * @return Response Response
     */
    public function index(bool $withContactForm = false): Response
	{
        $templateVars = [];

        if (true === $withContactForm) {
            $form = $this->getContactForm();
            $form = $form->createView();

            $templateVars['form'] = $form;
        }

		return $this->render('index.html.twig', $templateVars);
	}

    /**
     * Display CV
     *
     * @return Response Response
     */
    public function curriculumVitae(): Response
    {
        $profile = $this->profileProvider->get();

        $view = $this->renderView('curriculum-vitae.html.twig', compact('profile'));

        $html2pdf = new Html2Pdf();
        $html2pdf->writeHTML($view);
        $html2pdf->output(Transliterator::urlize($profile->getFullname().'-curriculum-vitae').'.pdf');

        return new Response();
    }

    public function curriculumVitaeContent()
    {
        $profile = $this->profileProvider->get();

        $view = $this->renderView('curriculum-vitae.html.twig', compact('profile'));

        $html2pdf = new Html2Pdf();
        $html2pdf->writeHTML($view);
        return $html2pdf->output(null, 'S');
    }

    /**
     * Handle contact form submit
     *
     * @param  Request           $request           Request
     * @param  Swift_Mailer      $mailer            Mailer
     *
     * @return Response                             Response
     */
    public function contact(Request $request, Swift_Mailer $mailer): Response
    {
        $profile = $this->profileProvider->get();

        $form = $this->getContactForm();
        $form->handleRequest($request);

        if ($form->isSubmitted()) {
            if ($form->isValid()) {
                $contact = $form->getData();

            	$message = (new Swift_Message($contact->getSubject()))
        	        ->setFrom($contact->getEmail(), $contact->getEmail())
        	        ->setTo($profile->getEmail(), $profile->getFullname())
        	        ->setBody($contact->getMessage())
        	    ;

        	    $mailer->send($message);

                return $this->json(['success' => true]);
            } else {
               return $this->json(FormHelper::getErrors($form));
            }
        }

        throw $this->createNotFoundException();
    }
}
