<?php
 namespace App\Controller;




 use App\Repository\CbdRepository;
 use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
 use Symfony\Component\Routing\Annotation\Route;
 use App\Entity\Cbd;

 class cbdController extends AbstractController
 {
     /**
      * @Route("/huilecbd", name="cbd")
      */

     public function huilecbd(CbdRepository $cbdRepository){
         $cbds=$cbdRepository->findAll();
         return $this->render("users/cbdOils.html.twig",['cbds'=> $cbds] );
     }
     /**
      * @Route("/users/cbdUnit/{id}", name="cbdUnit")
      */
     public function cbdUnit($id, CbdRepository $cbdRepository){
         $cbd= $cbdRepository->find($id);
         return $this->render('users/cbdOil.html.twig',['cbd' => $cbd]);
     }
 }