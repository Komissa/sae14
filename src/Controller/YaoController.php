<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class YaoController extends AbstractController
{
    /**
     * @Route("/yao", name="yao")
     */
    public function index(): Response
    {
        return $this->render('yao/index.html.twig', [
            'controller_name' => 'YaoController',
        ]);
    }
    /**
     * @Route("/formulaire", name="formulaire")
     */
    public function formulaire(): Response
    {
        return $this->render('yao/formulaire.html.twig', [
            'controller_name' => 'YaoController',
        ]);
    }
}
