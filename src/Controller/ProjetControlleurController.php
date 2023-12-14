<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProjetControlleurController extends AbstractController
{
    #[Route('/projet/controlleur', name: 'app_projet_controlleur')]
    public function index(): Response
    {
        return $this->render('projet_controlleur/index.html.twig', [
            'controller_name' => 'ProjetControlleurController',
        ]);
    }
}
