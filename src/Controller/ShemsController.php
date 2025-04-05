<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ShemsController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function home(): Response
    {
        return $this->render('shems/home.html.twig', [
            'nom' => 'VOTRE_NOM',
            'prenom' => 'VOTRE_PRENOM',
            'groupe' => 'VOTRE_GROUPE_TP',
        ]);
    }

    #[Route('/cv', name: 'app_cv')]
    public function cv(): Response
    {
        return $this->render('shems/cv.html.twig');
    }

    #[Route('/portfolio', name: 'app_portfolio')]
    public function portfolio(): Response
    {
        return $this->render('shems/portfolio.html.twig');
    }

    #[Route('/loisirs', name: 'app_loisirs')]
    public function loisirs(): Response
    {
        return $this->render('shems/loisirs.html.twig');
    }
    #[Route('/parcours', name: 'app_parcours')]
    public function parcours(): Response
    {
        return $this->render('shems/parcours.html.twig');
    }

}