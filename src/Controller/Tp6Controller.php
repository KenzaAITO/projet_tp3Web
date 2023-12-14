<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Tp6Controller extends AbstractController
{
    #[Route('/tp6', name: 'app_tp6')]
    public function index(): Response
    {
        return $this->render('tp6/index.html.twig', [
            'controller_name' => 'Tp6Controller',
        ]);
    }
}
