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

    public function animales($name,$apellidos,$username){
        $title = 'Bienvenido A la Pagina de Animales';
        $animales = ['perro','gato','paloma','rata'];
        $ave = [
            'tipo' => 'palomo',
            'color' => 'gris',
            'edad' => 4,
            'raza' => 'colillano'
        ];

        return $this->render('home/animales.html.twig',[
            'title' => $title,
            'name' => $name,
            'apellidos' => $apellidos,
            'username' => $username,
            'animales' => $animales,
            'ave' => $ave,
        ]);
    }

    public function redirection(){
        // return $this->redirectToRoute('animales',[
        //     'name' => 'Rodrigo',
        //     'apellidos' => 'Alanis Lemus',
        //     'username' => 'Arkpexps4'
        // ]);

        return $this->redirect('https://www.google.com.mx/?hl=es-419');
    }
}
