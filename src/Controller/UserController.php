<?php

namespace App\Controller;
use App\Entity\Usuario;
use App\Form\UsuarioType;
use App\Repository\UsuarioRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Persistence\ObjectManager;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    private ObjectManager $entityManager;
    private UsuarioRepository $repository;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->entityManager = $doctrine->getManager();
        $this->repository = $doctrine->getRepository(Usuario::class);
    }

    #[Route('/', name: 'app_page_index')]
    public function index(): Response
    {
        return $this->render("page/index.html.twig", ["users" => $this->repository->findAll()]);
    }

    // Si no ponemos nada, sale 1 por defecto
    #[Route('/user/{id<\d+>?1}', name: 'user_info')]
    public function getUserById($id): Response
    {
        $user = $this->repository->find($id);
        return $this->render("page/user_info.html.twig", ["user" => $user]);
    }

    #[Route('/user/add', name: 'add_new_user')]
    public function addUser(Request $request): Response
    {
        $user = new Usuario();
        $form = $this->createForm(UsuarioType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
            return $this->saveUser($form);

        return $this->render("page/user_form.html.twig", ["form" => $form->createView()]);
    }

    #[Route('/user/update/{id}', name: 'update_user_name')]
    public function updateUserName($id, Request $request): Response
    {
        $user = $this->repository->find($id);
        $form = $this->createForm(UsuarioType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
            return $this->saveUser($form);

        return $this->render('page/user_form.html.twig', array(
            'form' => $form->createView()
        ));
    }

    #[Route('/user/delete/{id}', name: 'delete_user')]
    public function deleteUser($id): Response
    {
        $user = $this->repository->find($id);

        if ($user) {
            $this->entityManager->remove($user);
            $this->entityManager->flush();
            return $this->render("page/index.html.twig");
        } else return $this->render("page/user_info.html.twig", ["user" => $user]);
    }

    // Guarda los cambios la base de datos usuario y muestra sus datos en pantalla
    private function saveUser(FormInterface $form): RedirectResponse
    {
        $user = $form->getData();
        $this->entityManager->persist($user);
        $this->entityManager->flush();

        return $this->redirectToRoute('user_info', ['id' => $user->getId()]);
    }

}