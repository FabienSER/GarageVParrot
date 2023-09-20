<?php

namespace App\Controller;

use App\Entity\ListComment;
use App\Form\ListCommentType;
use App\Repository\ListCommentRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/list/comment')]
class ListCommentController extends AbstractController
{
    #[Route('/', name: 'app_list_comment_index', methods: ['GET'])]
    public function index(ListCommentRepository $listCommentRepository): Response
    {
        return $this->render('list_comment/index.html.twig', [
            'list_comments' => $listCommentRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_list_comment_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $listComment = new ListComment();
        $form = $this->createForm(ListCommentType::class, $listComment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($listComment);
            $entityManager->flush();

            return $this->redirectToRoute('app_list_comment_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('list_comment/new.html.twig', [
            'list_comment' => $listComment,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_list_comment_show', methods: ['GET'])]
    public function show(ListComment $listComment): Response
    {
        return $this->render('list_comment/show.html.twig', [
            'list_comment' => $listComment,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_list_comment_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, ListComment $listComment, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(ListCommentType::class, $listComment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute('app_list_comment_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('list_comment/edit.html.twig', [
            'list_comment' => $listComment,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_list_comment_delete', methods: ['POST'])]
    public function delete(Request $request, ListComment $listComment, EntityManagerInterface $entityManager): Response
    {
        if ($this->isCsrfTokenValid('delete'.$listComment->getId(), $request->request->get('_token'))) {
            $entityManager->remove($listComment);
            $entityManager->flush();
        }

        return $this->redirectToRoute('app_list_comment_index', [], Response::HTTP_SEE_OTHER);
    }
}
