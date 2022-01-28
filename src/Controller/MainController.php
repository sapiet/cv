<?php

namespace App\Controller;

use App\Services\CvCreator;
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

    /**
     * @var CvCreator
     */
    private $cvCreator;

    public function __construct(
        ProfileProvider $profileProvider,
        CvCreator $cvCreator
    ) {
        $this->profileProvider = $profileProvider;
        $this->cvCreator = $cvCreator;
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
     * @throws \Spipu\Html2Pdf\Exception\Html2PdfException
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function curriculumVitae(): Response
    {
        $profile = $this->profileProvider->get();
        $html2pdf = $this->cvCreator->create();
        $html2pdf->output(Transliterator::urlize($profile->getFullname().'-curriculum-vitae').'.pdf');

        return new Response();
    }

    /**
     * @param CvCreator $creator
     * @return string
     * @throws \Spipu\Html2Pdf\Exception\Html2PdfException
     * @throws \Twig_Error_Loader
     * @throws \Twig_Error_Runtime
     * @throws \Twig_Error_Syntax
     */
    public function curriculumVitaeContent()
    {
        $html2pdf = $this->cvCreator->create();

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
