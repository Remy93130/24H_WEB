<?php

namespace App\Controller;

use App\Entity\Cafe;
use App\Form\CafeType;
use App\Repository\CafeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/cafe")
 */
class CafeController extends AbstractController
{
    /**
     * @Route("/", name="cafe_index", methods={"GET"})
     * @param CafeRepository $cafeRepository
     * @return Response
     */
    public function index(CafeRepository $cafeRepository): Response
    {
        if ($this->getUser() == null|| $this->getUser()->getType() == "importateur") {
            return $this->render('cafe/index.html.twig', [
                "cafes" => $cafeRepository->findAll(),
            ]);
        }
        return $this->render('cafe/index.html.twig', [
            'cafes' => $cafeRepository->findCoffeeByOwner($this->getUser()),
        ]);
    }

    /**
     * @Route("/new", name="cafe_new", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function new(Request $request): Response
    {
        if ($this->getUser() == null || $this->getUser()->getType() != "exportateur") {
            return $this->redirectToRoute("index");
        }
        $cafe = new Cafe();
        $cafe->setProprietaire($this->getUser());
        $form = $this->createForm(CafeType::class, $cafe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($cafe);
            $entityManager->flush();

            return $this->redirectToRoute('cafe_index');
        }

        return $this->render('cafe/new.html.twig', [
            'cafe' => $cafe,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="cafe_show", methods={"GET"})
     */
    public function show(Cafe $cafe): Response
    {
        return $this->render('cafe/show.html.twig', [
            'cafe' => $cafe,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="cafe_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Cafe $cafe): Response
    {
        if ($this->getUser()->getType() != "exportateur") {
            return $this->redirectToRoute("index");
        }
        $form = $this->createForm(CafeType::class, $cafe);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('cafe_index', [
                'id' => $cafe->getId(),
            ]);
        }

        return $this->render('cafe/edit.html.twig', [
            'cafe' => $cafe,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="cafe_delete", methods={"DELETE"})
     * @param Request $request
     * @param Cafe $cafe
     * @return Response
     */
    public function delete(Request $request, Cafe $cafe): Response
    {
        if ($this->isCsrfTokenValid('delete'.$cafe->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($cafe);
            $entityManager->flush();
        }

        return $this->redirectToRoute('cafe_index');
    }
}
