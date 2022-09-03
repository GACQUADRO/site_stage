<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class Article03Controller extends AbstractController
{
    #[Route('/article03', name: 'app_article03')]
    public function index(): Response
    {
        return $this->render('article03/index.html.twig', [
            'controller_name' => 'Article03Controller',
        ]);
    }
}
