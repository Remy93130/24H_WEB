<?php

namespace App\Controller;

use App\Entity\Commande;
use App\Form\CommandeType;
use App\Form\CommandeUpdateType;
use App\Repository\CommandeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/commande")
 */
class CommandeController extends AbstractController
{
    /**
     * @Route("/", name="commande_index", methods={"GET"})
     * @param CommandeRepository $commandeRepository
     * @return Response
     */
    public function index(CommandeRepository $commandeRepository): Response
    {
        if ($this->getUser() == null) {
            return $this->redirectToRoute('index');
        } elseif ($this->getUser()->getType() == "importateur") {
            $data = $commandeRepository->findCommandeByBuyer($this->getUser());
        } else {
            $data = $commandeRepository->findCommandeBySeller($this->getUser());
        }
        return $this->render('commande/index.html.twig', [
            'commandes' => $data,
        ]);
    }

    /**
     * @Route("/new", name="commande_new", methods={"GET","POST"})
     * @param Request $request
     * @return Response
     */
    public function new(Request $request): Response
    {
        if ($this->getUser() == null || $this->getUser()->getType() == "exportateur") {
            return $this->redirectToRoute("index");
        }
        $commande = new Commande();
        $commande->setAcheteur($this->getUser());
        $form = $this->createForm(CommandeType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

            if ($commande->getCafe()->getStock() - $commande->getQuantite() < 0) {
                return $this->render('commande/new.html.twig', [
                    'commande' => $commande,
                    'form' => $form->createView(),
                    'erreur' => "Vous ne pouvez pas prendre plus de cafe que le stock prévu !"
                ]);
            }

            $commande->getCafe()->setStock($commande->getCafe()->getStock() - $commande->getQuantite());

            $commande->setVendeur($commande->getCafe()->getProprietaire());
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($commande);
            $entityManager->flush();

            return $this->redirectToRoute('commande_index');
        }

        return $this->render('commande/new.html.twig', [
            'commande' => $commande,
            'form' => $form->createView(),
            'erreur' => false,
        ]);
    }

    /**
     * @Route("/{id}", name="commande_show", methods={"GET"})
     * @param Commande $commande
     * @return Response
     */
    public function show(Commande $commande): Response
    {
        return $this->render('commande/show.html.twig', [
            'commande' => $commande,
        ]);
    }

    /**
     * @Route("/{id}/edit", name="commande_edit", methods={"GET","POST"})
     * @param Request $request
     * @param Commande $commande
     * @return Response
     */
    public function edit(Request $request, Commande $commande): Response
    {
        if ($this->getUser() == null || $this->getUser()->getType() == "importateur") {
            return $this->redirectToRoute("index");
        }

        $form = $this->createForm(CommandeUpdateType::class, $commande);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('commande_index', [
                'id' => $commande->getId(),
            ]);
        }

        return $this->render('commande/edit.html.twig', [
            'commande' => $commande,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{id}", name="commande_delete", methods={"DELETE"})
     * @param Request $request
     * @param Commande $commande
     * @return Response
     */
    public function delete(Request $request, Commande $commande): Response
    {
        if ($this->isCsrfTokenValid('delete'.$commande->getId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($commande);
            $entityManager->flush();
        }

        return $this->redirectToRoute('commande_index');
    }
}
