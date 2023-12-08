<?php

namespace App\Controller;

use App\Services\MonService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Tp3webKController extends AbstractController
{
    private MonService $monService;
    public function __construct(MonService $monService)
    {
        $this->monService = $monService;
    }

    #[Route('/tp3web/k', name: 'app_tp3web_k')]
    public function index(): Response
    {
        return $this->render('tp3web_k/index.html.twig', [
            'controller_name' => 'Tp3webKController',
            'Date_du_TP' => '06.12.2023',
        ]);
    }

    #[Route('/service', name: 'app_service')]
    public function fct(MonService $monService): Response
    {
        $message = $monService->getMessage();

        return $this->render('mon/index.html.twig', [
            'message' => $message,
        ]);
    }
}
