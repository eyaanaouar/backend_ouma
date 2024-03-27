<?php

// src/Controller/Bitmchergatg1TauxdegradationController.php

namespace App\Controller;

use App\Entity\Birmchergatg1; // Assurez-vous d'importer l'entité appropriée
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Bitmchergatg1TauxdegradationController extends AbstractController
{
    #[Route('/bitmchergatg1/tauxdegradation', name: 'app_bitmchergatg1_tauxdegradation')]
    public function index(): Response
    {
        $birmchergatg1s = $this->getDoctrine()->getRepository(Birmchergatg1::class)->findAll();

        return $this->render('bitmchergatg1_tauxdegradation/index.html.twig', [
            'birmchergatg1s' => $birmchergatg1s,
        ]);
    }
}
