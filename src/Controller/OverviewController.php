<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/', name: 'accueil')]
class OverviewController extends AbstractController
{
    #[Route('', name: '')]
    public function indexAction(): Response
    {
        return $this->render('/Overview/Accueil.html.twig');
    }
}
