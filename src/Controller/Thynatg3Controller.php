<?php

namespace App\Controller;

use App\Entity\Thynatg3;
use App\Form\Thynatg3Type;
use App\Repository\Thynatg3Repository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/thynatg3')]
class Thynatg3Controller extends AbstractController
{
    #[Route('/', name: 'app_thynatg3_index', methods: ['GET'])]
    public function index(Thynatg3Repository $thynatg3Repository): Response
    {
        return $this->render('thynatg3/index.html.twig', [
            'thynatg3s' => $thynatg3Repository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_thynatg3_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $thynatg3 = new Thynatg3();
        $form = $this->createForm(Thynatg3Type::class, $thynatg3);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($thynatg3);
            $entityManager->flush();

            return $this->redirectToRoute('app_thynatg3_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('thynatg3/new.html.twig', [
            'thynatg3' => $thynatg3,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_thynatg3_show', methods: ['GET'])]
    public function show(Thynatg3 $thynatg3): Response
    {
        return $this->render('thynatg3/show.html.twig', [
            'thynatg3' => $thynatg3,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_thynatg3_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Thynatg3 $thynatg3, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Thynatg3Type::class, $thynatg3);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_thynatg3_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('thynatg3/edit.html.twig', [
            'thynatg3' => $thynatg3,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_thynatg3_delete', methods: ['POST'])]
    public function delete(Request $request, Thynatg3 $thynatg3, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$thynatg3->getId(), $request->request->get('_token'))) {
            $entityManager->remove($thynatg3);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_thynatg3_index', [], Response::HTTP_SEE_OTHER);
    }
}
