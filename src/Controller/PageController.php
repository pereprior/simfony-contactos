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
        return $this->render("page/index.html.twig", []);
    }

    // Si no ponemos nada, sale 1 por defecto
    #[Route('/user/{id<\d+>?1}', name: 'user_info')]
    public function getUserById(ManagerRegistry $doctrine, $id): Response
    {
        $repository = $doctrine->getRepository(Usuario::class);
        $user = $repository->find($id);

        return $this->render("page/user_info.html.twig", ["user" => $user]);
    }

    #[Route('/user/add/{nombre}/{email}/{password}/{provincia<\d+>?1}', name: 'add_new_user')]
    public function addUser(ManagerRegistry $doctrine, $nombre, $email, $password, $provincia): Response
    {
        $entityManager = $doctrine->getManager();
        $user = new Usuario();
        $user->setNombre($nombre);
        $user->setEmail($email);
        $user->setPassword($password);
        $user->setProvinciaById($provincia, $doctrine);

        $entityManager->persist($user);

        try {
            $entityManager->flush();
            return new Response("Usuarios añadidos");
        } catch (\Exception $e) {
            return new Response("Error al añadir usuarios");
        }
    }

    #[Route('/user/update/{id}/{name}', name: 'update_user_name')]
    public function updateUserName(ManagerRegistry $doctrine, $id, $name): Response
    {
        $entityManager = $doctrine->getManager();
        $repository = $doctrine->getRepository(Usuario::class);
        $user = $repository->find($id);

        if ($user) {
            $user->setNombre($name);
            try {
                $entityManager->flush();
                return $this->render("page/user_info.html.twig", ["user" => $user]);
            } catch (\Exception $e) {
                return new Response("Error al actualizar el nombre");
            }
        }

        return new Response("Usuario no encontrado");
    }

    #[Route('/user/delete/{id}', name: 'delete_user')]
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
        } else return $this->render("page/user_info.html.twig", ["user" => $user]);
    }

}