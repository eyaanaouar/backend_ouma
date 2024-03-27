<?php

namespace App\Controller;

use App\Entity\Ferianatg1;
use App\Form\Ferianatg1Type;
use App\Repository\Ferianatg1Repository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/ferianatg1')]
class Ferianatg1Controller extends AbstractController
{
    #[Route('/', name: 'app_ferianatg1_index', methods: ['GET'])]
    public function index(Ferianatg1Repository $ferianatg1Repository): Response
    {
        return $this->render('ferianatg1/index.html.twig', [
            'ferianatg1s' => $ferianatg1Repository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_ferianatg1_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $ferianatg1 = new Ferianatg1();
        $form = $this->createForm(Ferianatg1Type::class, $ferianatg1);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($ferianatg1);
            $entityManager->flush();

            return $this->redirectToRoute('app_ferianatg1_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('ferianatg1/new.html.twig', [
            'ferianatg1' => $ferianatg1,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_ferianatg1_show', methods: ['GET'])]
    public function show(Ferianatg1 $ferianatg1): Response
    {
        return $this->render('ferianatg1/show.html.twig', [
            'ferianatg1' => $ferianatg1,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_ferianatg1_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Ferianatg1 $ferianatg1, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Ferianatg1Type::class, $ferianatg1);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_ferianatg1_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('ferianatg1/edit.html.twig', [
            'ferianatg1' => $ferianatg1,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_ferianatg1_delete', methods: ['POST'])]
    public function delete(Request $request, Ferianatg1 $ferianatg1, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ferianatg1->getId(), $request->request->get('_token'))) {
            $entityManager->remove($ferianatg1);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_ferianatg1_index', [], Response::HTTP_SEE_OTHER);
    }
}
