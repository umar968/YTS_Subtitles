<?php

namespace App\Controller;

use App\Entity\Movie;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/", name="home")
     */
    public function index(): Response
    {
        $Movies = $this->getDoctrine()
            ->getRepository(Movie::class)
            ->findAll();

        if (!$Movies) {
            throw $this->createNotFoundException("Movie cannot be found");
        }


        return $this->render('home/index.html.twig', [
            "Movies" => $Movies,
        ]);
    }
}
