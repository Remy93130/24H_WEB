<?php

namespace App\Controller;

use App\Entity\Producteur;
use App\Form\ProducteurType;
use App\Repository\ProducteurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/producteur")
 */
class ProducteurController extends AbstractController
{
    /**
     * @Route("/", name="producteur_index", methods={"GET"})
     * @param ProducteurRepository $producteurRepository
     * @return Response
     */
    public function index(ProducteurRepository $producteurRepository): Response
    {
        return $this->render('producteur/index.html.twig', [
            'producteurs' => $producteurRepository->findAll(),
        ]);
    }

    /**
     * @Route("/new", name="producteur_new", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function new(Request $request): Response
    {
        $producteur = new Producteur();
        $form = $this->createForm(ProducteurType::class, $producteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($producteur);
            $entityManager->flush();

            return $this->redirectToRoute('producteur_index');
        }

        return $this->render('producteur/new.html.twig', [
            'producteur' => $producteur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="producteur_show", methods={"GET"})
     * @param Producteur $producteur
     * @return Response
     */
    public function show(Producteur $producteur): Response
    {
        return $this->render('producteur/show.html.twig', [
            'producteur' => $producteur,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="producteur_edit", methods={"GET","POST"})
     * @param Request $request
     * @param Producteur $producteur
     * @return Response
     */
    public function edit(Request $request, Producteur $producteur): Response
    {
        $form = $this->createForm(ProducteurType::class, $producteur);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('producteur_index', [
                'id' => $producteur->getId(),
            ]);
        }

        return $this->render('producteur/edit.html.twig', [
            'producteur' => $producteur,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="producteur_delete", methods={"DELETE"})
     * @param Request $request
     * @param Producteur $producteur
     * @return Response
     */
    public function delete(Request $request, Producteur $producteur): Response
    {
        if ($this->isCsrfTokenValid('delete'.$producteur->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($producteur);
            $entityManager->flush();
        }

        return $this->redirectToRoute('producteur_index');
    }

    /**
     * @Route("/carte/show", name="producteur_carte")
     */
    public function getForMap(): Response
    {
        return $this->render("producteur/carte.html.twig");
    }

    /**
     * @Route("/carte/show/producteurs", name="producteur_get", methods={"GET"})
     * @param ProducteurRepository $repository
     * @return Response
     */
    public function getCoord(ProducteurRepository $repository): Response
    {
        return $this->json($repository->findAll());
    }
}
