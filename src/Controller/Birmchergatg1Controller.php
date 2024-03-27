<?php

namespace App\Controller;

use App\Entity\Birmchergatg1;
use App\Form\Birmchergatg1Type;
use App\Repository\Birmchergatg1Repository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/birmchergatg1')]
class Birmchergatg1Controller extends AbstractController
{
    #[Route('/', name: 'app_birmchergatg1_index', methods: ['GET'])]
    public function index(Birmchergatg1Repository $birmchergatg1Repository): Response
    {
        return $this->render('birmchergatg1/index.html.twig', [
            'birmchergatg1s' => $birmchergatg1Repository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_birmchergatg1_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $birmchergatg1 = new Birmchergatg1();
        $form = $this->createForm(Birmchergatg1Type::class, $birmchergatg1);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($birmchergatg1);
            $entityManager->flush();

            return $this->redirectToRoute('app_birmchergatg1_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('birmchergatg1/new.html.twig', [
            'birmchergatg1' => $birmchergatg1,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_birmchergatg1_show', methods: ['GET'])]
    public function show(Birmchergatg1 $birmchergatg1): Response
    {
        return $this->render('birmchergatg1/show.html.twig', [
            'birmchergatg1' => $birmchergatg1,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_birmchergatg1_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Birmchergatg1 $birmchergatg1, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Birmchergatg1Type::class, $birmchergatg1);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_birmchergatg1_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('birmchergatg1/edit.html.twig', [
            'birmchergatg1' => $birmchergatg1,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_birmchergatg1_delete', methods: ['POST'])]
    public function delete(Request $request, Birmchergatg1 $birmchergatg1, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$birmchergatg1->getId(), $request->request->get('_token'))) {
            $entityManager->remove($birmchergatg1);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_birmchergatg1_index', [], Response::HTTP_SEE_OTHER);
    }
}
