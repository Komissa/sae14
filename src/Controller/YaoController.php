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
    /**
     * @Route("/bibliographie", name="bibliographie")
     */
    public function bibliographie(): Response
    {
        return $this->render('yao/bibliographie.html.twig', [
            'controller_name' => 'YaoController',
        ]);
    }
    /**
     * @Route("/Acceuil", name="Acceuil")
     */
    public function Acceuil(): Response
    {
        return $this->render('yao/Acceuil.html.twig', [
            'controller_name' => 'YaoController',
        ]);
    }
     /**
     * @Route("/Portfolio", name="Portfolio")
     */
    public function Pt(): Response
    {
        return $this->render('yao/Portfolio.html.twig', [
            'controller_name' => 'YaoController',
        ]);
    }
    /**
     * @Route("/cv", name="cv")
     */
    public function cv(): Response
    {
        return $this->render('yao/cv.html.twig', [
            'controller_name' => 'YaoController',
        ]);
    }
       
}
