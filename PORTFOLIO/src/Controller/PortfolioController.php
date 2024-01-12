<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PortfolioController extends AbstractController
{
    #[Route('/portfolio', name: 'app_portfolio')]
    public function index(): Response
    {
        return $this->render('portfolio/index.html.twig', [
            'controller_name' => 'PortfolioController',
        ]);
    }
	#[Route('/page2', name: 'app_page2')]
    public function page2(): Response
    {
        return $this->render('portfolio/page2.html.twig', [
            'controller_name' => 'page2',
        ]);
    }
}
