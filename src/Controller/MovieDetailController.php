<?php

namespace App\Controller;

use App\Entity\Movie;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MovieDetailController extends AbstractController
{
    /**
     * @Route("/movieDetail/{id}", name="movie_Detail")
     */
    public function index(int $id): Response
    {
        $Movie = $this->getDoctrine()
            ->getRepository(Movie::class)
            ->findOneBy(['id' => $id]);

        if (!$Movie) {
            throw $this->createNotFoundException("Movie cannot be found");
        }


        return $this->render('movie_detail/movie_Detail.html.twig', [
            'Movie'=>$Movie
        ]);
    }
}
