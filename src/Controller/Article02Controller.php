<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Article02Controller extends AbstractController
{
    #[Route('/article02', name: 'app_article02')]
    public function index(): Response
    {
        return $this->render('article02/index.html.twig', [
            'controller_name' => 'Article02Controller',
        ]);
    }
}
