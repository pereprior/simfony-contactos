<?php

namespace App\Controller;
use App\Entity\Job;
use App\Form\JobType;
use App\Repository\JobRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\Persistence\ObjectManager;
use Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JobController extends AbstractController
{
    private ObjectManager $entityManager;
    private JobRepository $repository;

    public function __construct(ManagerRegistry $doctrine)
    {
        $this->entityManager = $doctrine->getManager();
        $this->repository = $doctrine->getRepository(Job::class);
    }

    #[Route('/job/{id<\d+>?1}', name: 'job_info')]
    public function getJobById($id): Response
    {
        $job = $this->repository->find($id);
        return $this->render("page/job_info.html.twig", ["job" => $job]);
    }

    #[Route('/job/add', name: 'add_new_job')]
    public function addJob(Request $request): Response
    {
        $job = new Job();
        $form = $this->createForm(JobType::class, $job);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
            return $this->saveJob($form);

        return $this->render("page/job_form.html.twig", ["form" => $form->createView()]);
    }

    #[Route('/job/update/{id}', name: 'update_job_name')]
    public function updateJobName($id, Request $request): Response
    {
        $job = $this->repository->find($id);
        $form = $this->createForm(JobType::class, $job);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid())
            return $this->saveJob($form);

        return $this->render('page/job_form.html.twig', array(
            'form' => $form->createView()
        ));
    }

    #[Route('/job/delete/{id}', name: 'delete_job')]
    public function deleteJob($id): Response
    {
        $job = $this->repository->find($id);

        if ($job) {
            try {
                $this->entityManager->remove($job);
                $this->entityManager->flush();
                return new Response("Puesto eliminado");
            } catch (Exception) {
                return new Response("Error al eliminar el puesto de trabajo");
            }
        } else return $this->render("page/job_info.html.twig", ["job" => $job]);
    }

    // Guarda los cambios la base de datos usuario y muestra sus datos en pantalla
    private function saveJob(FormInterface $form): RedirectResponse
    {
        $job = $form->getData();
        $this->entityManager->persist($job);
        $this->entityManager->flush();

        return $this->redirectToRoute('job_info', ['id' => $job->getId()]);
    }

}