<?php

namespace App\Controller;

use App\Entity\Soussetg1;
use App\Form\Soussetg1Type;
use App\Repository\Soussetg1Repository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/soussetg1')]
class Soussetg1Controller extends AbstractController
{
    #[Route('/', name: 'app_soussetg1_index', methods: ['GET'])]
    public function index(Soussetg1Repository $soussetg1Repository): Response
    {
        return $this->render('soussetg1/index.html.twig', [
            'soussetg1s' => $soussetg1Repository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_soussetg1_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $soussetg1 = new Soussetg1();
        $form = $this->createForm(Soussetg1Type::class, $soussetg1);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($soussetg1);
            $entityManager->flush();

            return $this->redirectToRoute('app_soussetg1_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('soussetg1/new.html.twig', [
            'soussetg1' => $soussetg1,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_soussetg1_show', methods: ['GET'])]
    public function show(Soussetg1 $soussetg1): Response
    {
        return $this->render('soussetg1/show.html.twig', [
            'soussetg1' => $soussetg1,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_soussetg1_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Soussetg1 $soussetg1, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Soussetg1Type::class, $soussetg1);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_soussetg1_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('soussetg1/edit.html.twig', [
            'soussetg1' => $soussetg1,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_soussetg1_delete', methods: ['POST'])]
    public function delete(Request $request, Soussetg1 $soussetg1, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$soussetg1->getId(), $request->request->get('_token'))) {
            $entityManager->remove($soussetg1);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_soussetg1_index', [], Response::HTTP_SEE_OTHER);
    }
}
