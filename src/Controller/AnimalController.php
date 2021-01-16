<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Animal;
use Doctrine\DBAL\Query\QueryBuilder;
use Symfony\Flex\Unpack\Result;

use function Symfony\Component\DependencyInjection\Loader\Configurator\ref;

class AnimalController extends AbstractController
{
    public function index(): Response
    {
        $animal_repo = $this->getDoctrine()->getRepository(Animal::class);

        $em = $this->getDoctrine()->getManager();

        $animals = $animal_repo->findAll();

        // Query builder

        $qb = $animal_repo->createQueryBuilder('a')
                          ->where("a.nombre = 'Ana'")
                          ->getQuery();
        
        $result = $qb->execute();

        // var_dump($result);

        // DQL
        $dql = "SELECT a FROM App\Entity\Animal a WHERE a.nombre = 'Ana'";
        $query = $em->createQuery($dql);

        // var_dump($query->execute());

        // Sql
        $conection = $this->getDoctrine()->getConnection();
        $sql = "SELECT * FROM animales a WHERE a.nombre = 'Ana'";
        $prepare = $conection->prepare($sql);
        $prepare->execute();
        $data = $prepare->fetch();

        // var_dump($data);

        var_dump($animal_repo->findAll());

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

    public function animal(Animal $animal)
    {
        // Cargar repositorio
        // $animal_repo = $this->getDoctrine()->getRepository(Animal::class);

        // Find
        // $animal = $animal_repo->find($id);

        // Comprobar si el resultado es correcto

        if (!$animal) {
            return new Response('El Animal No Existe');
        }

        return new Response('Tu animal es: ' . $animal->getTipo() . ' - ' . $animal->getNombre());
    }

    public function update($id) 
    {
        $msg = '';
        $doctrine = $this->getDoctrine();
        $em = $doctrine->getManager();
        $animal_repo = $em->getRepository(Animal::class);

        $animal = $animal_repo->find($id);

        if (!$animal) {
            $msg = 'El Animal No Existe';
        } else {
            $animal->setTipo('Perro');
            $animal->setColor('Negro');

            $em->persist($animal);
            $em->flush();
            $msg = 'Animal Actualizado' . $animal->getId();
        }

        return new Response($msg);
    }

    public function delete(Animal $animal)
    {
        $em =  $this->getDoctrine()->getManager();
        $em->remove($animal);
        $em->flush();
        
        return new Response('Animal Eliminado');
    }
}
