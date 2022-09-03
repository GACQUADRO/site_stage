<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Article01Controller extends AbstractController
{
    #[Route('/article01', name: 'app_article01')]
    public function index(): Response
    {
        return $this->render('article01/index.html.twig', [
            'controller_name' => 'Article01Controller',
        ]);
    }
}
