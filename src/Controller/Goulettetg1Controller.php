<?php

namespace App\Controller;

use App\Entity\Goulettetg1;
use App\Form\Goulettetg1Type;
use App\Repository\Goulettetg1Repository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/goulettetg1')]
class Goulettetg1Controller extends AbstractController
{
    #[Route('/', name: 'app_goulettetg1_index', methods: ['GET'])]
    public function index(Goulettetg1Repository $goulettetg1Repository): Response
    {
        return $this->render('goulettetg1/index.html.twig', [
            'goulettetg1s' => $goulettetg1Repository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_goulettetg1_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $goulettetg1 = new Goulettetg1();
        $form = $this->createForm(Goulettetg1Type::class, $goulettetg1);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($goulettetg1);
            $entityManager->flush();

            return $this->redirectToRoute('app_goulettetg1_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('goulettetg1/new.html.twig', [
            'goulettetg1' => $goulettetg1,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_goulettetg1_show', methods: ['GET'])]
    public function show(Goulettetg1 $goulettetg1): Response
    {
        return $this->render('goulettetg1/show.html.twig', [
            'goulettetg1' => $goulettetg1,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_goulettetg1_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Goulettetg1 $goulettetg1, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Goulettetg1Type::class, $goulettetg1);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_goulettetg1_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('goulettetg1/edit.html.twig', [
            'goulettetg1' => $goulettetg1,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_goulettetg1_delete', methods: ['POST'])]
    public function delete(Request $request, Goulettetg1 $goulettetg1, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$goulettetg1->getId(), $request->request->get('_token'))) {
            $entityManager->remove($goulettetg1);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_goulettetg1_index', [], Response::HTTP_SEE_OTHER);
    }
}
