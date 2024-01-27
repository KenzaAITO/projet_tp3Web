<?php

namespace App\Controller;

use App\Entity\Habitants;
use App\Repository\HabitantsRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Tp6Controller extends AbstractController
{
    #[Route('/tp6', name: 'app_tp6')]

    public function index(HabitantRepository $habitantRepository): Response
    {
        $habitants = $habitantRepository->findAll();

        return $this->render('habitant/index.html.twig', [
            'habitants' => $habitants,
        ]);
    }
}