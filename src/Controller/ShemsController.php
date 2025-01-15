<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ShemsController extends AbstractController
{
    #[Route('/shems', name: 'app_shems')]
    public function index(): Response
    {
        return $this->render('shems/index.html.twig', [
            'controller_name' => 'ShemsController',
        ]);
    }
    #[Route('/shems/home2', name: 'app_home')]
    Public function home2() : Response
    { 
        return $this->render('shems/home2.html.twig', [
            'controller_name' => 'ShemsController',
        ]); 
    }
}
 