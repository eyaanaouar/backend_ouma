<?php

namespace App\Controller;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Authorization\Voter\RoleVoter;

class HomepageController extends AbstractController
{
    #[Route('/homepage', name: 'app_homepage')]
    public function index(EntityManagerInterface $entityManager,UserPasswordHasherInterface $userPasswordHasher ): Response
    {
            $user=new User ;
            $user->setEmail('naouareya12@gmail.com');
            $user->setPassword($userPasswordHasher->hashPassword($user,'eya00')) ;
            $user->setPrenom('eya');
            $user->setNom('naouar');
            $entityManager->persist($user);
            $entityManager->flush();

        return $this->render('homepage/index.html.twig', [
            'controller_name' => 'HomepageController',
        ]);
    }
}
