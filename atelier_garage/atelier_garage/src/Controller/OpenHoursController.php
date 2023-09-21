<?php

namespace App\Controller;

use App\Entity\OpenHours;
use App\Form\OpenHoursType;
use App\Repository\OpenHoursRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/open/hours')]
class OpenHoursController extends AbstractController
{
    /*Controller pour retour de tous les horaires de la semaine*/
    #[Route('/', name: 'app_open_hours_index', methods: ['GET'])]
    public function index(OpenHoursRepository $openHoursRepository): JsonResponse
    {
        return $this->json( [
            'open_hours' => $openHoursRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_open_hours_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $openHour = new OpenHours();
        $form = $this->createForm(OpenHoursType::class, $openHour);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($openHour);
            $entityManager->flush();

            return $this->redirectToRoute('app_open_hours_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('open_hours/new.html.twig', [
            'open_hour' => $openHour,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_open_hours_show', methods: ['GET'])]
    public function show(OpenHours $openHour): Response
    {
        return $this->render('open_hours/show.html.twig', [
            'open_hour' => $openHour,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_open_hours_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, OpenHours $openHour, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(OpenHoursType::class, $openHour);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_open_hours_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('open_hours/edit.html.twig', [
            'open_hour' => $openHour,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_open_hours_delete', methods: ['POST'])]
    public function delete(Request $request, OpenHours $openHour, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$openHour->getId(), $request->request->get('_token'))) {
            $entityManager->remove($openHour);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_open_hours_index', [], Response::HTTP_SEE_OTHER);
    }
}
