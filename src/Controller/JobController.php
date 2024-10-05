<?php

namespace App\Controller;
use App\Entity\Job;
use App\Entity\Usuario;
use App\Form\JobType;
use App\Form\UsuarioType;
use Doctrine\Persistence\ManagerRegistry;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JobController extends AbstractController
{
    #[Route('/job/{id<\d+>?1}', name: 'job_info')]
    public function getJobById(ManagerRegistry $doctrine, $id): Response
    {
        $repository = $doctrine->getRepository(Job::class);
        $job = $repository->find($id);

        return $this->render("page/job_info.html.twig", ["job" => $job]);
    }

    #[Route('/job/add', name: 'add_new_job')]
    public function addJob(ManagerRegistry $doctrine, Request $request): Response
    {
        $job = new Job();
        $form = $this->createForm(JobType::class, $job);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
            return $this->saveJob($form, $doctrine);

        return $this->render("page/job_form.html.twig", ["form" => $form->createView()]);
    }

    #[Route('/job/update/{id}', name: 'update_job_name')]
    public function updateJobName(ManagerRegistry $doctrine, $id, Request $request): Response
    {
        $repository = $doctrine->getRepository(Job::class);
        $job = $repository->find($id);
        $form = $this->createForm(JobType::class, $job);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
            return $this->saveJob($form, $doctrine);

        return $this->render('page/job_form.html.twig', array(
            'form' => $form->createView()
        ));
    }

    #[Route('/job/delete/{id}', name: 'delete_job')]
    public function deleteJob(ManagerRegistry $doctrine, $id): Response
    {
        $entityManager = $doctrine->getManager();
        $repository = $doctrine->getRepository(Job::class);
        $job = $repository->find($id);

        if ($job) {
            try {
                $entityManager->remove($job);
                $entityManager->flush();
                return new Response("Puesto eliminado");
            } catch (Exception) {
                return new Response("Error al eliminar el puesto de trabajo");
            }
        } else return $this->render("page/job_info.html.twig", ["job" => $job]);
    }

    // Guarda los cambios la base de datos usuario y muestra sus datos en pantalla
    public function saveJob(FormInterface $form, ManagerRegistry $doctrine): RedirectResponse
    {
        $job = $form->getData();
        $entityManager = $doctrine->getManager();
        $entityManager->persist($job);
        $entityManager->flush();

        return $this->redirectToRoute('job_info', ['id' => $job->getId()]);
    }

}