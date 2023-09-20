<?php

namespace App\Controller;

use App\Entity\ListService;
use App\Form\ListServiceType;
use App\Repository\ListServiceRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/list/service')]
class ListServiceController extends AbstractController
{
    #[Route('/', name: 'app_list_service_index', methods: ['GET'])]
    public function index(ListServiceRepository $listServiceRepository): Response
    {
        return $this->render('list_service/index.html.twig', [
            'list_services' => $listServiceRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_list_service_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $listService = new ListService();
        $form = $this->createForm(ListServiceType::class, $listService);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($listService);
            $entityManager->flush();

            return $this->redirectToRoute('app_list_service_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('list_service/new.html.twig', [
            'list_service' => $listService,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_list_service_show', methods: ['GET'])]
    public function show(ListService $listService): Response
    {
        return $this->render('list_service/show.html.twig', [
            'list_service' => $listService,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_list_service_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ListService $listService, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ListServiceType::class, $listService);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_list_service_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('list_service/edit.html.twig', [
            'list_service' => $listService,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_list_service_delete', methods: ['POST'])]
    public function delete(Request $request, ListService $listService, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$listService->getId(), $request->request->get('_token'))) {
            $entityManager->remove($listService);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_list_service_index', [], Response::HTTP_SEE_OTHER);
    }
}
