<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use App\Repository\ProfileRepository;

class MainController extends Controller
{
	public function index(ProfileRepository $profileRepository)
	{
		$profile = $profileRepository->getByEmail($this->getParameter('email'));

		return $this->render('index.html.twig', compact('profile'));
	}

    public function curriculumVitae(ProfileRepository $profileRepository)
    {
		$profile = $profileRepository->getByEmail($this->getParameter('email'));

        return $this->render('curriculum-vitae.html.twig', compact('profile'));
    }

    public function contact(Request $request, ProfileRepository $profileRepository, \Swift_Mailer $mailer)
    {
		$profile = $profileRepository->getByEmail($this->getParameter('email'));

    	$name = $request->request->get('name');
    	$email = $request->request->get('email');
    	$subject = $request->request->get('subject');
    	$message = $request->request->get('message');

    	$message = (new \Swift_Message($subject))
	        ->setFrom($email, $name)
	        ->setTo($profile->getEmail(), $profile->getFullname())
	        ->setBody($message)
	    ;

	    $mailer->send($message);

    	return new JsonResponse(['error' => null]);
    }
}
