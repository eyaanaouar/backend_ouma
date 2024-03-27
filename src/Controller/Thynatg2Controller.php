<?php

namespace App\Controller;

use App\Entity\Thynatg2;
use App\Form\Thynatg2Type;
use App\Repository\Thynatg2Repository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/thynatg2')]
class Thynatg2Controller extends AbstractController
{
    #[Route('/', name: 'app_thynatg2_index', methods: ['GET'])]
    public function index(Thynatg2Repository $thynatg2Repository): Response
    {
        return $this->render('thynatg2/index.html.twig', [
            'thynatg2s' => $thynatg2Repository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_thynatg2_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $thynatg2 = new Thynatg2();
        $form = $this->createForm(Thynatg2Type::class, $thynatg2);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($thynatg2);
            $entityManager->flush();

            return $this->redirectToRoute('app_thynatg2_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('thynatg2/new.html.twig', [
            'thynatg2' => $thynatg2,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_thynatg2_show', methods: ['GET'])]
    public function show(Thynatg2 $thynatg2): Response
    {
        return $this->render('thynatg2/show.html.twig', [
            'thynatg2' => $thynatg2,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_thynatg2_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Thynatg2 $thynatg2, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Thynatg2Type::class, $thynatg2);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_thynatg2_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('thynatg2/edit.html.twig', [
            'thynatg2' => $thynatg2,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_thynatg2_delete', methods: ['POST'])]
    public function delete(Request $request, Thynatg2 $thynatg2, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$thynatg2->getId(), $request->request->get('_token'))) {
            $entityManager->remove($thynatg2);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_thynatg2_index', [], Response::HTTP_SEE_OTHER);
    }
}
