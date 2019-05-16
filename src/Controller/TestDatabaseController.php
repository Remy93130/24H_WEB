<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class TestDatabaseController extends AbstractController
{
    /**
     * @Route("/test/database", name="test_database")
     */
    public function index()
    {
        return $this->render('test_database/index.html.twig', [
            'controller_name' => 'TestDatabaseController',
        ]);
    }
}
