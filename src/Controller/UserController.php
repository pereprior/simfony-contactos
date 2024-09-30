<?php

namespace App\Controller;
use App\Entity\Usuario;
use App\Form\UsuarioType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
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

    #[Route('/user/add', name: 'add_new_user')]
    public function addUser(ManagerRegistry $doctrine, Request $request): Response
    {
        $user = new Usuario();
        $form = $this->createForm(UsuarioType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
            return $this->saveUser($form, $doctrine);

        return $this->render("page/user_form.html.twig", ["form" => $form->createView()]);
    }

    #[Route('/user/update/{id}', name: 'update_user_name')]
    public function updateUserName(ManagerRegistry $doctrine, $id, Request $request): Response
    {
        $repository = $doctrine->getRepository(Usuario::class);
        $user = $repository->find($id);
        $form = $this->createForm(UsuarioType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
            return $this->saveUser($form, $doctrine);

        return $this->render('page/user_form.html.twig', array(
            'form' => $form->createView()
        ));
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

    // Guarda los cambios la base de datos usuario y muestra sus datos en pantalla
    public function saveUser(FormInterface $form, ManagerRegistry $doctrine): RedirectResponse
    {
        $user = $form->getData();
        $entityManager = $doctrine->getManager();
        $entityManager->persist($user);
        $entityManager->flush();

        return $this->redirectToRoute('user_info', ['id' => $user->getId()]);
    }

}