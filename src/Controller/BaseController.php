<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BaseController extends AbstractController
{
    /**
     * @Route("/", name="index")
     */
    public function index()
    {
        return $this->redirectToRoute('producteur_index');
    }

    /**
     * @Route("/about", name="about")
     */
    public function about()
    {
        return $this->render('base/about.html.twig');
    }
}
