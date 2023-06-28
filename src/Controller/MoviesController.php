<?php

namespace App\Controller;

use App\Entity\Movie;
use App\Repository\MovieRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MoviesController extends AbstractController
{
    private $em;
    public function __construct(EntityManagerInterface $em) 
    {
        $this->em = $em;
    }


    #[Route('/movies', name: 'app_movies')]
    public function index(EntityManagerInterface $em): Response
    {

        // findAll() - SELECT * FROM movies
        // find(...) - SELECT * FROM movies WHERE id = ...
        // findBy() - SELECT * FROM movies ORDER BY id DESC  (  findBy([], ['id' => 'DESC'])  )
        // findOneBy() - SELECT * FROM movies WHERE id = 7 AND title = 'The Dark Knight' ORDER BY id DESC  (  findOneBy(['id' => 7, 'title' => 'The Dark Knight'], ['id' => 'DESC'])  )
        // count() - SELECT COUNT() FROM movies WHERE id = 7  (  count(['id' => 7])  )


        return $this -> render('index.html.twig');
    }

}
