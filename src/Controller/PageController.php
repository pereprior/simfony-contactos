<?php

namespace App\Controller;
use App\Entity\Usuario;
use Doctrine\Persistence\ManagerRegistry;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    #[Route('/', name: 'app_page_index')]
    public function index(): Response
    {
        return $this->render("inicio.html.twig", []);
    }

    // Si no ponemos nada, sale 1 por defecto
    #[Route('/contact/{id<\d+>?1}', name: 'contact')]
    public function findUserById(ManagerRegistry $doctrine, $id): Response
    {
        $repository = $doctrine->getRepository(Usuario::class);
        $contact = $repository->find($id);

        return $this->render("ficha_contacto.html.twig", ["contacto" => $contact]);
    }

    #[Route('/contact/search/{text}', name: 'search')]
    public function searchUsers(ManagerRegistry $doctrine, $text): Response
    {
        $repository = $doctrine->getRepository(Usuario::class);
        $result = $repository->findByName($text);

        return $this->render("lista_contactos.html.twig", ["contactos" => $result]);
    }

    #[Route('/contact/add', name: 'add_new_user')]
    public function addUser(ManagerRegistry $doctrine): Response
    {
        $entityManager = $doctrine->getManager();
        /*foreach ($this->contacts as $contact) {
            $user = new Usuario();
            $user->setNombre($contact["nombre"]);
            $user->setTelefono($contact["telefono"]);
            $user->setEmail($contact["email"]);
            $entityManager->persist($user);
        }*/

        try {
            $entityManager->flush();
            return new Response("Usuarios añadidos");
        } catch (\Exception $e) {
            return new Response("Error al añadir usuarios");
        }
    }

    #[Route('/contact/update/{id}/{name}', name: 'update_user_name')]
    public function updateUserName(ManagerRegistry $doctrine, $id, $name): Response
    {
        $entityManager = $doctrine->getManager();
        $repository = $doctrine->getRepository(Usuario::class);
        $user = $repository->find($id);

        if ($user) {
            $user->setNombre($name);
            try {
                $entityManager->flush();
                return $this->render("ficha_contacto.html.twig", ["contacto" => $user]);
            } catch (\Exception $e) {
                return new Response("Error al actualizar el nombre");
            }
        } else return $this->render("ficha_contacto.html.twig", ["contacto" => $user]);
    }

    #[Route('/contact/delete/{id}', name: 'delete_user')]
    public function deleteUser(ManagerRegistry $doctrine, $id): Response
    {
        $entityManager = $doctrine->getManager();
        $repository = $doctrine->getRepository(Usuario::class);
        $user = $repository->find($id);

        if ($user) {
            try {
                $entityManager->remove($user);
                $entityManager->flush();
                return new Response("Usuario eliminado");
            } catch (\Exception $e) {
                return new Response("Error al eliminar el usuario");
            }
        } else return $this->render("ficha_contacto.html.twig", ["contacto" => $user]);
    }

    #[Route('/contact/provincia/{id}', name: 'provincia')]
    public function searchByProvincia(ManagerRegistry $doctrine, $id): Response
    {
        $repositorio = $doctrine->getRepository(Usuario::class);
        $contacto = $repositorio->find($id);
        $nombreProvincia = $contacto->getProvincia()->getNombre();
        return new Response("El contacto $id vive en la provincia de $nombreProvincia");
    }

}