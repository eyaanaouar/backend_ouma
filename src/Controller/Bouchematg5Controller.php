<?php

namespace App\Controller;

use App\Entity\Bouchematg5;
use App\Form\Bouchematg5Type;
use App\Repository\Bouchematg5Repository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/bouchematg5')]
class Bouchematg5Controller extends AbstractController
{
    #[Route('/', name: 'app_bouchematg5_index', methods: ['GET'])]
    public function index(Bouchematg5Repository $bouchematg5Repository): Response
    {
        return $this->render('bouchematg5/index.html.twig', [
            'bouchematg5s' => $bouchematg5Repository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_bouchematg5_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $bouchematg5 = new Bouchematg5();
        $form = $this->createForm(Bouchematg5Type::class, $bouchematg5);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($bouchematg5);
            $entityManager->flush();

            return $this->redirectToRoute('app_bouchematg5_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('bouchematg5/new.html.twig', [
            'bouchematg5' => $bouchematg5,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_bouchematg5_show', methods: ['GET'])]
    public function show(Bouchematg5 $bouchematg5): Response
    {
        return $this->render('bouchematg5/show.html.twig', [
            'bouchematg5' => $bouchematg5,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_bouchematg5_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Bouchematg5 $bouchematg5, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Bouchematg5Type::class, $bouchematg5);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_bouchematg5_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('bouchematg5/edit.html.twig', [
            'bouchematg5' => $bouchematg5,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_bouchematg5_delete', methods: ['POST'])]
    public function delete(Request $request, Bouchematg5 $bouchematg5, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$bouchematg5->getId(), $request->request->get('_token'))) {
            $entityManager->remove($bouchematg5);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_bouchematg5_index', [], Response::HTTP_SEE_OTHER);
    }
}
