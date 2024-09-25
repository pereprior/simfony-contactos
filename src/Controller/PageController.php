<?php

namespace App\Controller;
use App\Entity\Usuario;
use Doctrine\Persistence\ManagerRegistry;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    #[Route('/page', name: 'app_page')]
    public function index(): Response
    {
        return $this->render('page/index.html.twig', [
            'controller_name' => 'PageController',
        ]);
    }

    #[Route('/', name: 'init')]
    public function init(): Response
    {
        return $this->render("inicio.html.twig", []);
    }

    private array $contacts = [
        1 => ["nombre" => "Juan Pérez", "telefono" => "524142432", "email" => "juanp@ieselcaminas.org"],
        2 => ["nombre" => "Ana López", "telefono" => "58958448", "email" => "anita@ieselcaminas.org"],
        5 => ["nombre" => "Mario Montero", "telefono" => "5326824", "email" => "mario.mont@ieselcaminas.org"],
        7 => ["nombre" => "Laura Martínez", "telefono" => "42898966", "email" => "lm2000@ieselcaminas.org"],
        9 => ["nombre" => "Nora Jover", "telefono" => "54565859", "email" => "norajover@ieselcaminas.org"]
    ];

    // Si no ponemos nada, sale 1 por defecto
    #[Route('/contact/{id<\d+>?1}', name: 'contact')]
    public function contact(int $id): Response
    {
        $result = $this->contacts[$id] ?? null;
        if ($result) {
            return $this->render("ficha_contacto.html.twig", ["contacto" => $result]);
        }
        return new Response("Contacto no encontrado.");
    }

    #[Route('/contact/search/{text}', name: 'search')]
    public function search($text): Response
    {
        $result = array_filter($this->contacts,
            function ($contact) use ($text) {
                return str_contains($contact["nombre"], $text);
            }
        );

        if ($result) {
            return $this->render("lista_contactos.html.twig", ["contactos" => $result]);
        } else {
            return new Response("Contacto no encontrado.");
        }
    }

    #[Route('/contact/add', name: 'add')]
    public function addUser(ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();
        foreach ($this->contacts as $contact) {
            $user = new Usuario();
            $user->setNombre($contact["nombre"]);
            $user->setTelefono($contact["telefono"]);
            $user->setEmail($contact["email"]);
            $entityManager->persist($user);
        }

        try {
            $entityManager->flush();
            return new Response("Usuarios añadidos");
        } catch (\Exception $e) {
            return new Response("Error al añadir usuarios");
        }
    }

}