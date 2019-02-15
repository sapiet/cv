<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\FormInterface;
use App\Repository\ProfileRepository;
use App\Helper\FormHelper;
use App\Form\ContactModel;
use App\Form\ContactType;
use App\Entity\Profile;

class MainController extends Controller
{
    private function getContactForm(): FormInterface
    {
        return $this->createForm(ContactType::class, new ContactModel(), [
            'action' => $this->generateUrl('contact'),
            'method' => 'POST'
        ]);
    }

    public function index(ProfileRepository $profileRepository)
	{
		$profile = $profileRepository->getByEmail($this->getParameter('email'));
        $form = $this->getContactForm();
        $form = $form->createView();

		return $this->render('index.html.twig', compact('profile', 'form'));
	}

    public function curriculumVitae(ProfileRepository $profileRepository)
    {
		$profile = $profileRepository->getByEmail($this->getParameter('email'));

        return $this->render('curriculum-vitae.html.twig', compact('profile'));
    }

    public function contact(Request $request, ProfileRepository $profileRepository, \Swift_Mailer $mailer)
    {
		$profile = $profileRepository->getByEmail($this->getParameter('email'));

        $form = $this->getContactForm();
        $form->handleRequest($request);

        if ($request->isMethod('POST')) {
            if ($form->isValid()) {
                $contact = $form->getData();

            	$message = (new \Swift_Message($contact->getSubject()))
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
