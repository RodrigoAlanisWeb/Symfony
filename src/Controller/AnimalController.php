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
        $animal_repo = $this->getDoctrine()->getRepository(Animal::class);

        $animals = $animal_repo->findAll();

        return $this->render('animal/index.html.twig', [
            'controller_name' => 'AnimalController',
            'data' => $animals,
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

    public function animal($id)
    {
        // Cargar repositorio
        $animal_repo = $this->getDoctrine()->getRepository(Animal::class);

        // Find
        $animal = $animal_repo->find($id);

        // Comprobar si el resultado es correcto

        if (!$animal) {
            return new Response('El Animal No Existe');
        }

        return new Response('Tu animal es: ' . $animal->getTipo() . ' - ' . $animal->getNombre());
    }
}
