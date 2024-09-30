<?php

namespace App\Controller;
use App\Entity\Provincia;
use App\Entity\Usuario;
use App\Form\ProvinciaType;
use App\Form\UsuarioType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProvinciaController extends AbstractController
{
    #[Route('/provincia/{id<\d+>?1}', name: 'provincia_info')]
    public function getProvinciaById(ManagerRegistry $doctrine, $id): Response
    {
        $repository = $doctrine->getRepository(Provincia::class);
        $provincia = $repository->find($id);

        return $this->render("page/provincia_info.html.twig", ["provincia" => $provincia]);
    }

    #[Route('/provincia/add', name: 'add_new_provincia')]
    public function addProvincia(ManagerRegistry $doctrine, Request $request): Response
    {
        $provincia = new Provincia();
        $form = $this->createForm(ProvinciaType::class, $provincia);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
            return $this->saveProvincia($form, $doctrine);

        return $this->render("page/provincia_form.html.twig", ["form" => $form->createView()]);
    }

    #[Route('/provincia/update/{id}', name: 'update_provincia_name')]
    public function updateUserName(ManagerRegistry $doctrine, $id, Request $request): Response
    {
        $repository = $doctrine->getRepository(Provincia::class);
        $provincia = $repository->find($id);
        $form = $this->createForm(ProvinciaType::class, $provincia);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
            return $this->saveProvincia($form, $doctrine);

        return $this->render('page/provincia_form.html.twig', array(
            'form' => $form->createView()
        ));
    }

    #[Route('/provincia/delete/{id}', name: 'delete_provincia')]
    public function deleteUser(ManagerRegistry $doctrine, $id): Response
    {
        $entityManager = $doctrine->getManager();
        $repository = $doctrine->getRepository(Provincia::class);
        $provincia = $repository->find($id);

        if ($provincia) {
            try {
                $entityManager->remove($provincia);
                $entityManager->flush();
                return new Response("Provincia eliminada");
            } catch (\Exception $e) {
                return new Response("Error al eliminar la provincia");
            }
        } else return $this->render("page/provincia_info.html.twig", ["provincia" => $provincia]);
    }

    // Guarda los cambios la base de datos usuario y muestra sus datos en pantalla
    public function saveProvincia(FormInterface $form, ManagerRegistry $doctrine): RedirectResponse
    {
        $provincia = $form->getData();
        $entityManager = $doctrine->getManager();
        $entityManager->persist($provincia);
        $entityManager->flush();

        return $this->redirectToRoute('provincia_info', ['id' => $provincia->getId()]);
    }

}