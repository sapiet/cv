<?php

namespace App\Controller\Admin;

use App\Entity\Experience;
use App\Form\ExperienceType;
use App\Repository\ExperienceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/admin/experience")
 */
class ExperienceController extends AbstractController
{
    /**
     * @Route("/", name="experience_index", methods={"GET"})
     */
    public function index(ExperienceRepository $experienceRepository): Response
    {
        return $this->render('admin/experience/index.html.twig', [
            'pageName' => 'Experiences list',
            'experiences' => $experienceRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="experience_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $experience = new Experience();
        $form = $this->createForm(ExperienceType::class, $experience);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($experience);
            $entityManager->flush();

            return $this->redirectToRoute('experience_index');
        }

        return $this->render('admin/experience/new.html.twig', [
            'pageName' => 'Add an experience',
            'experience' => $experience,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="experience_show", methods={"GET"})
     */
    public function show(Experience $experience): Response
    {
        return $this->render('admin/experience/show.html.twig', [
            'pageName' => 'Experience details',
            'experience' => $experience,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="experience_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Experience $experience): Response
    {
        $form = $this->createForm(ExperienceType::class, $experience);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('experience_index', [
                'id' => $experience->getId(),
            ]);
        }

        return $this->render('admin/experience/edit.html.twig', [
            'pageName' => 'Experience edit',
            'experience' => $experience,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="experience_delete", methods={"DELETE"})
     */
    public function delete(Request $request, Experience $experience): Response
    {
        if ($this->isCsrfTokenValid('delete'.$experience->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($experience);
            $entityManager->flush();
        }

        return $this->redirectToRoute('experience_index');
    }
}
