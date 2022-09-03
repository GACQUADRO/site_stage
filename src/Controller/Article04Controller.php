<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Article04Controller extends AbstractController
{
    #[Route('/article04', name: 'app_article04')]
    public function index(): Response
    {
        return $this->render('article04/index.html.twig', [
            'controller_name' => 'Article04Controller',
        ]);
    }
}
