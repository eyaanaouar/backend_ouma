<?php

namespace App\Controller;

use App\Entity\Birmchergatg4;
use App\Form\Birmchergatg4Type;
use App\Repository\Birmchergatg4Repository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/birmchergatg4')]
class Birmchergatg4Controller extends AbstractController
{
    #[Route('/', name: 'app_birmchergatg4_index', methods: ['GET'])]
    public function index(Birmchergatg4Repository $birmchergatg4Repository): Response
    {
        return $this->render('birmchergatg4/index.html.twig', [
            'birmchergatg4s' => $birmchergatg4Repository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_birmchergatg4_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $birmchergatg4 = new Birmchergatg4();
        $form = $this->createForm(Birmchergatg4Type::class, $birmchergatg4);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($birmchergatg4);
            $entityManager->flush();

            return $this->redirectToRoute('app_birmchergatg4_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('birmchergatg4/new.html.twig', [
            'birmchergatg4' => $birmchergatg4,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_birmchergatg4_show', methods: ['GET'])]
    public function show(Birmchergatg4 $birmchergatg4): Response
    {
        return $this->render('birmchergatg4/show.html.twig', [
            'birmchergatg4' => $birmchergatg4,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_birmchergatg4_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Birmchergatg4 $birmchergatg4, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Birmchergatg4Type::class, $birmchergatg4);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_birmchergatg4_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('birmchergatg4/edit.html.twig', [
            'birmchergatg4' => $birmchergatg4,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_birmchergatg4_delete', methods: ['POST'])]
    public function delete(Request $request, Birmchergatg4 $birmchergatg4, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$birmchergatg4->getId(), $request->request->get('_token'))) {
            $entityManager->remove($birmchergatg4);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_birmchergatg4_index', [], Response::HTTP_SEE_OTHER);
    }
}
