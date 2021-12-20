<?php

namespace App\Controller;




use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class pageController extends AbstractController
{
    /**
     *@Route("/", name="home")
     */
    public function home(){
    return $this->render("users/home.html.twig");
    }

    /**
     *@Route("/presentation", name="presentation")
     */
    public function presentation(){
        return $this->render("users/presentation.html.twig");
    }
}

