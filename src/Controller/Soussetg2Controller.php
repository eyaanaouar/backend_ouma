<?php

namespace App\Controller;

use App\Entity\Soussetg2;
use App\Form\Soussetg2Type;
use App\Repository\Soussetg2Repository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/soussetg2')]
class Soussetg2Controller extends AbstractController
{
    #[Route('/', name: 'app_soussetg2_index', methods: ['GET'])]
    public function index(Soussetg2Repository $soussetg2Repository): Response
    {
        return $this->render('soussetg2/index.html.twig', [
            'soussetg2s' => $soussetg2Repository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_soussetg2_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $soussetg2 = new Soussetg2();
        $form = $this->createForm(Soussetg2Type::class, $soussetg2);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($soussetg2);
            $entityManager->flush();

            return $this->redirectToRoute('app_soussetg2_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('soussetg2/new.html.twig', [
            'soussetg2' => $soussetg2,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_soussetg2_show', methods: ['GET'])]
    public function show(Soussetg2 $soussetg2): Response
    {
        return $this->render('soussetg2/show.html.twig', [
            'soussetg2' => $soussetg2,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_soussetg2_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Soussetg2 $soussetg2, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Soussetg2Type::class, $soussetg2);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_soussetg2_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('soussetg2/edit.html.twig', [
            'soussetg2' => $soussetg2,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_soussetg2_delete', methods: ['POST'])]
    public function delete(Request $request, Soussetg2 $soussetg2, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$soussetg2->getId(), $request->request->get('_token'))) {
            $entityManager->remove($soussetg2);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_soussetg2_index', [], Response::HTTP_SEE_OTHER);
    }
}
