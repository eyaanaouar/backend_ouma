<?php

namespace App\Controller;

use App\Entity\Birmchergatg3;
use App\Form\Birmchergatg3Type;
use App\Repository\Birmchergatg3Repository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/birmchergatg3')]
class Birmchergatg3Controller extends AbstractController
{
    #[Route('/', name: 'app_birmchergatg3_index', methods: ['GET'])]
    public function index(Birmchergatg3Repository $birmchergatg3Repository): Response
    {
        return $this->render('birmchergatg3/index.html.twig', [
            'birmchergatg3s' => $birmchergatg3Repository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_birmchergatg3_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $birmchergatg3 = new Birmchergatg3();
        $form = $this->createForm(Birmchergatg3Type::class, $birmchergatg3);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($birmchergatg3);
            $entityManager->flush();

            return $this->redirectToRoute('app_birmchergatg3_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('birmchergatg3/new.html.twig', [
            'birmchergatg3' => $birmchergatg3,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_birmchergatg3_show', methods: ['GET'])]
    public function show(Birmchergatg3 $birmchergatg3): Response
    {
        return $this->render('birmchergatg3/show.html.twig', [
            'birmchergatg3' => $birmchergatg3,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_birmchergatg3_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Birmchergatg3 $birmchergatg3, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Birmchergatg3Type::class, $birmchergatg3);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_birmchergatg3_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('birmchergatg3/edit.html.twig', [
            'birmchergatg3' => $birmchergatg3,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_birmchergatg3_delete', methods: ['POST'])]
    public function delete(Request $request, Birmchergatg3 $birmchergatg3, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$birmchergatg3->getId(), $request->request->get('_token'))) {
            $entityManager->remove($birmchergatg3);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_birmchergatg3_index', [], Response::HTTP_SEE_OTHER);
    }
}
