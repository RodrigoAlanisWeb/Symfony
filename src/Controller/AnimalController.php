<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Animal;
use Symfony\Flex\Unpack\Result;

class AnimalController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('animal/index.html.twig', [
            'controller_name' => 'AnimalController',
        ]);
    }

    public function save()
    {
        // Guardar En La DB
        $entityManager = $this->getDoctrine()->getManager();

        $animal = new Animal();

        $animal->setTipo('Avestruz');
        $animal->setColor('blanco');
        $animal->setRaza('africana');
        $animal->setNombre('Ana');

        // Guardar objeto en doctrine
        $entityManager->persist($animal);

        // Guardar en la tabla
        $entityManager->flush();

        return new Response('El animal guardado tiene el id: ' . $animal->getId());
    }
}
