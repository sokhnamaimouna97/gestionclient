<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index()
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }
    /**
     * @Route("/", name="home")
     */
    public function home()
    {
        return $this->render('blog/home.html.twig', [

        ]);
    }
    /**
     * @Route("/blog/new", name="blog_create")
     */
    public function create()
    {
        return $this->render('blog/create.html.twig', [

        ]);
    }
}
