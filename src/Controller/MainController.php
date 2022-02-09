<?php

namespace App\Controller;

use App\Services\ProfileProvider;
use App\Services\CvCreator;
use Behat\Transliterator\Transliterator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

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

    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('index.html.twig');
    }

    #[Route('/curriculum-vitae.pdf', name: 'cv')]
    public function curriculumVitae(): Response
    {
        $profile = $this->profileProvider->get();
        $html2pdf = $this->cvCreator->create();
        $html2pdf->output(Transliterator::urlize($profile->getFullname().'-curriculum-vitae').'.pdf');

        return new Response();
    }

    public function curriculumVitaeContent()
    {
        $html2pdf = $this->cvCreator->create();

        return $html2pdf->output(null, 'S');
    }
}
