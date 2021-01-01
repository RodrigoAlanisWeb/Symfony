<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'hello' => "Hello World With Symfony 5"
        ]);
    }

    public function animales($name){
        $title = 'Bienvenido A la Pagina de Animales';

        return $this->render('home/animales.html.twig',[
            'title' => $title,
            'name' => $name
        ]);
    }
}
