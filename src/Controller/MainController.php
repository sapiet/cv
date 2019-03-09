<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\FormInterface;
use Behat\Transliterator\Transliterator;
use Spipu\Html2Pdf\Html2Pdf;
use App\Repository\ProfileRepository;
use App\Helper\FormHelper;
use App\Form\ContactModel;
use App\Form\ContactType;
use App\Entity\Profile;
use Swift_Mailer;
use Swift_Message;

class MainController extends AbstractController
{
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
     * @param  ProfileRepository $profileRepository Profile repository
     * 
     * @return Response                             Response
     */
    public function index(ProfileRepository $profileRepository): Response
	{
		$profile = $profileRepository->getByEmail($this->getParameter('email'));
        $form = $this->getContactForm();
        $form = $form->createView();

		return $this->render('index.html.twig', compact('profile', 'form'));
	}

    /**
     * Display CV
     * 
     * @param  ProfileRepository $profileRepository Profile repository
     * 
     * @return Response Response
     */
    public function curriculumVitae(ProfileRepository $profileRepository): Response
    {
		$profile = $profileRepository->getByEmail($this->getParameter('email'));

        $view = $this->renderView('curriculum-vitae.html.twig', compact('profile'));

        $html2pdf = new Html2Pdf();
        $html2pdf->writeHTML($view);
        $html2pdf->output(Transliterator::urlize($profile->getFullname().'-curriculum-vitae').'.pdf');

        return new Response();
    }

    /**
     * Handle contact form submit
     * 
     * @param  Request           $request           Request
     * @param  ProfileRepository $profileRepository Profile repository
     * @param  Swift_Mailer      $mailer            Mailer
     *
     * @return Response                             Response
     */
    public function contact(Request $request, ProfileRepository $profileRepository, Swift_Mailer $mailer): Response
    {
		$profile = $profileRepository->findOneByEmail($this->getParameter('email'));

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
