<?php

namespace App\Controller;

use App\Entity\Bouchematg4;
use App\Form\Bouchematg4Type;
use App\Repository\Bouchematg4Repository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/bouchematg4')]
class Bouchematg4Controller extends AbstractController
{
    #[Route('/', name: 'app_bouchematg4_index', methods: ['GET'])]
    public function index(Bouchematg4Repository $bouchematg4Repository): Response
    {
        return $this->render('bouchematg4/index.html.twig', [
            'bouchematg4s' => $bouchematg4Repository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_bouchematg4_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $bouchematg4 = new Bouchematg4();
        $form = $this->createForm(Bouchematg4Type::class, $bouchematg4);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($bouchematg4);
            $entityManager->flush();

            return $this->redirectToRoute('app_bouchematg4_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('bouchematg4/new.html.twig', [
            'bouchematg4' => $bouchematg4,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_bouchematg4_show', methods: ['GET'])]
    public function show(Bouchematg4 $bouchematg4): Response
    {
        return $this->render('bouchematg4/show.html.twig', [
            'bouchematg4' => $bouchematg4,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_bouchematg4_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Bouchematg4 $bouchematg4, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Bouchematg4Type::class, $bouchematg4);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_bouchematg4_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('bouchematg4/edit.html.twig', [
            'bouchematg4' => $bouchematg4,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_bouchematg4_delete', methods: ['POST'])]
    public function delete(Request $request, Bouchematg4 $bouchematg4, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$bouchematg4->getId(), $request->request->get('_token'))) {
            $entityManager->remove($bouchematg4);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_bouchematg4_index', [], Response::HTTP_SEE_OTHER);
    }
}
