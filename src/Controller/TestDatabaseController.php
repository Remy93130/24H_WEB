<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\TestDatabaseRepository;

class TestDatabaseController extends AbstractController
{
    /**
     * @Route("/", name="test_database")
     */
    public function index(TestDatabaseRepository $repo)
    {
        return $this->render('test_database/index.html.twig', [
	    'tests' => $repo->findAll(),
        ]);
    }
}
