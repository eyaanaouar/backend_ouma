<?php

namespace App\Controller;

use App\Entity\Thynatg1;
use App\Form\Thynatg1Type;
use App\Repository\Thynatg1Repository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/thynatg1')]
class Thynatg1Controller extends AbstractController
{
    #[Route('/', name: 'app_thynatg1_index', methods: ['GET'])]
    public function index(Thynatg1Repository $thynatg1Repository): Response
    {
        return $this->render('thynatg1/index.html.twig', [
            'thynatg1s' => $thynatg1Repository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_thynatg1_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $thynatg1 = new Thynatg1();
        $form = $this->createForm(Thynatg1Type::class, $thynatg1);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($thynatg1);
            $entityManager->flush();

            return $this->redirectToRoute('app_thynatg1_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('thynatg1/new.html.twig', [
            'thynatg1' => $thynatg1,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_thynatg1_show', methods: ['GET'])]
    public function show(Thynatg1 $thynatg1): Response
    {
        return $this->render('thynatg1/show.html.twig', [
            'thynatg1' => $thynatg1,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_thynatg1_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Thynatg1 $thynatg1, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Thynatg1Type::class, $thynatg1);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_thynatg1_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('thynatg1/edit.html.twig', [
            'thynatg1' => $thynatg1,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_thynatg1_delete', methods: ['POST'])]
    public function delete(Request $request, Thynatg1 $thynatg1, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$thynatg1->getId(), $request->request->get('_token'))) {
            $entityManager->remove($thynatg1);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_thynatg1_index', [], Response::HTTP_SEE_OTHER);
    }
}
