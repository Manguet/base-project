<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route(path: '/{_locale}/', name: 'app_', requirements: ['_locale' => 'en|fr'])]
class DefaultController extends AbstractController
{
    #[Route(path: '', name: 'homepage')]
    public function homepage(): Response
    {
        return $this->render('Site/pages/homepage.html.twig');
    }
}