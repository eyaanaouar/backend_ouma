<?php

namespace App\Controller;

use App\Entity\Ferianatg2;
use App\Form\Ferianatg2Type;
use App\Repository\Ferianatg2Repository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/ferianatg2')]
class Ferianatg2Controller extends AbstractController
{
    #[Route('/', name: 'app_ferianatg2_index', methods: ['GET'])]
    public function index(Ferianatg2Repository $ferianatg2Repository): Response
    {
        return $this->render('ferianatg2/index.html.twig', [
            'ferianatg2s' => $ferianatg2Repository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_ferianatg2_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $ferianatg2 = new Ferianatg2();
        $form = $this->createForm(Ferianatg2Type::class, $ferianatg2);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($ferianatg2);
            $entityManager->flush();

            return $this->redirectToRoute('app_ferianatg2_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('ferianatg2/new.html.twig', [
            'ferianatg2' => $ferianatg2,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_ferianatg2_show', methods: ['GET'])]
    public function show(Ferianatg2 $ferianatg2): Response
    {
        return $this->render('ferianatg2/show.html.twig', [
            'ferianatg2' => $ferianatg2,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_ferianatg2_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Ferianatg2 $ferianatg2, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Ferianatg2Type::class, $ferianatg2);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_ferianatg2_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('ferianatg2/edit.html.twig', [
            'ferianatg2' => $ferianatg2,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_ferianatg2_delete', methods: ['POST'])]
    public function delete(Request $request, Ferianatg2 $ferianatg2, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ferianatg2->getId(), $request->request->get('_token'))) {
            $entityManager->remove($ferianatg2);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_ferianatg2_index', [], Response::HTTP_SEE_OTHER);
    }
}
