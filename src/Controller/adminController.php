<?php
 namespace App\Controller;

 use App\Repository\AdminRepository;
 use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
 use Symfony\Component\Routing\Annotation\Route;
 class adminController extends AbstractController{



     // essaye d'afficher sur la admin_home le nom prénom de la personne connectée






     /**
      * @Route("/admin/home", name="admin_home")
      */
     public function AdminHome(){
         return $this->render("admin/admin_home.html.twig");
     }
 }
