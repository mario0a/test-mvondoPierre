<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JeuAdminController extends AbstractController
{
    #[Route('/admin/jeu', name: 'jeu_admin')]
    public function index(): Response
    {
        return $this->render('jeu_admin/index.html.twig', [
            'admin' => 'JeuAdminController',
        ]);
    }
}
