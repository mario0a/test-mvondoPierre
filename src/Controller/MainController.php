<?php

namespace App\Controller;

use App\Entity\Jeu;
use App\Form\JeuType;
use App\Repository\JeuRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/')]
class MainController extends AbstractController
{
    //pour la home page du site
    #[Route('/', name: 'app_main', methods: ['GET'])]
    public function index(JeuRepository $jeuRepository): Response
    {
        return $this->render('main/index.html.twig', [
            'jeu' => $jeuRepository->findAll(),
        ]);
    }


    // pour gerer les details d'un jeu precis

    #[Route('/jeu/{id}', name: 'jeu_detail', methods: ['GET'])]
    public function details(Jeu $jeu): Response
    {
        return $this->render('main/jeux/detail.html.twig', [
            'jeu' => $jeu,
        ]);
    }


}
