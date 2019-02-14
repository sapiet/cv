<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use App\Repository\ProfileRepository;

class MainController extends Controller
{
	public function index(ProfileRepository $profileRepository)
	{
		$email = $this->getParameter('email');
		$profile = $profileRepository->findOneByEmail($email);

		return $this->render('index.html.twig', compact('profile'));
	}

    public function curriculumVitae(ProfileRepository $profileRepository)
    {
        $email = $this->getParameter('email');
        $profile = $profileRepository->findOneByEmail($email);

        return $this->render('curriculum-vitae.html.twig', compact('profile'));
    }
}
