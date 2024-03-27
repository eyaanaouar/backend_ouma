<?php

namespace App\Controller;

use App\Entity\Birmchergatg2;
use App\Form\Birmchergatg2Type;
use App\Repository\Birmchergatg2Repository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/birmchergatg2')]
class Birmchergatg2Controller extends AbstractController
{
    #[Route('/', name: 'app_birmchergatg2_index', methods: ['GET'])]
    public function index(Birmchergatg2Repository $birmchergatg2Repository): Response
    {
        return $this->render('birmchergatg2/index.html.twig', [
            'birmchergatg2s' => $birmchergatg2Repository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_birmchergatg2_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $birmchergatg2 = new Birmchergatg2();
        $form = $this->createForm(Birmchergatg2Type::class, $birmchergatg2);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($birmchergatg2);
            $entityManager->flush();

            return $this->redirectToRoute('app_birmchergatg2_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('birmchergatg2/new.html.twig', [
            'birmchergatg2' => $birmchergatg2,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_birmchergatg2_show', methods: ['GET'])]
    public function show(Birmchergatg2 $birmchergatg2): Response
    {
        return $this->render('birmchergatg2/show.html.twig', [
            'birmchergatg2' => $birmchergatg2,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_birmchergatg2_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Birmchergatg2 $birmchergatg2, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Birmchergatg2Type::class, $birmchergatg2);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_birmchergatg2_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('birmchergatg2/edit.html.twig', [
            'birmchergatg2' => $birmchergatg2,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_birmchergatg2_delete', methods: ['POST'])]
    public function delete(Request $request, Birmchergatg2 $birmchergatg2, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$birmchergatg2->getId(), $request->request->get('_token'))) {
            $entityManager->remove($birmchergatg2);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_birmchergatg2_index', [], Response::HTTP_SEE_OTHER);
    }
}
