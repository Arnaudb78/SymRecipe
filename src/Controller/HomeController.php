<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

//class fille de AbstractController
class HomeController extends AbstractController
{   
    //la route est definis ainsi que la methode
    #[Route('/', 'home.index', methods: ['GET'])]
    public function index(): Response
    {   
        //method render renvoie vers home.html.twig
        return $this->render('home.html.twig');
    }
}