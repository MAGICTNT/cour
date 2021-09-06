<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AccueilController extends AbstractController
{
    #[Route('/', name: 'accueil')]
    public function index(): Response
    {

        $intro = "Active Bretagne Informatique !";
        $titre = 'accueil';

        return $this->render('accueil/index.html.twig', [
            'mon_titre' => $titre,
            'mon_intro' => $intro,
        ]);
    }
}
