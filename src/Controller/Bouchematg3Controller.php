<?php

namespace App\Controller;

use App\Entity\Bouchematg3;
use App\Form\Bouchematg3Type;
use App\Repository\Bouchematg3Repository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/bouchematg3')]
class Bouchematg3Controller extends AbstractController
{
    #[Route('/', name: 'app_bouchematg3_index', methods: ['GET'])]
    public function index(Bouchematg3Repository $bouchematg3Repository): Response
    {
        return $this->render('bouchematg3/index.html.twig', [
            'bouchematg3s' => $bouchematg3Repository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_bouchematg3_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $bouchematg3 = new Bouchematg3();
        $form = $this->createForm(Bouchematg3Type::class, $bouchematg3);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($bouchematg3);
            $entityManager->flush();

            return $this->redirectToRoute('app_bouchematg3_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('bouchematg3/new.html.twig', [
            'bouchematg3' => $bouchematg3,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_bouchematg3_show', methods: ['GET'])]
    public function show(Bouchematg3 $bouchematg3): Response
    {
        return $this->render('bouchematg3/show.html.twig', [
            'bouchematg3' => $bouchematg3,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_bouchematg3_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Bouchematg3 $bouchematg3, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(Bouchematg3Type::class, $bouchematg3);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_bouchematg3_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('bouchematg3/edit.html.twig', [
            'bouchematg3' => $bouchematg3,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_bouchematg3_delete', methods: ['POST'])]
    public function delete(Request $request, Bouchematg3 $bouchematg3, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$bouchematg3->getId(), $request->request->get('_token'))) {
            $entityManager->remove($bouchematg3);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_bouchematg3_index', [], Response::HTTP_SEE_OTHER);
    }
}
