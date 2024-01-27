<?php

namespace App\Controller;

use App\Services\MonService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Controler2Controller extends AbstractController
{

    private MonService $monService;
    public function __construct(MonService $monService)
    {
        $this->monService = $monService;
    }

    #[Route('/controler2', name: 'app_controler2')]
    public function index(MonService $monService): Response
    {
        $message = $monService->getMessage();

        return $this->render('controler2/index.html.twig', [
            'message' => $message,
        ]);
    }

   
}



