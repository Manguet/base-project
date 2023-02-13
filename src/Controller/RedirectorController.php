<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route(path:'/', name: 'app')]
class RedirectorController extends AbstractController
{
    #[Route(path:'', name: '')]
    public function index(): Response
    {
        return $this->render('Site/pages/homepage.html.twig');
    }
}