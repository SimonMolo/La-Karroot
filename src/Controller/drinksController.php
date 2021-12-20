<?php
namespace App\Controller;




use App\Repository\DrinksRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class drinksController extends AbstractController
{
    // cette page controller me servira a gerer mes routes pour les boissons énérgétiques

    // Je crée ma route pour afficher les boissons, je renvoie la vue sur ma page twig correspondante
    /**
     * @Route ("/users/energieDrinks", name="drinks")
     */
    // je crée ma methode pour aller chercher dans ma liste de boissons tous les produits qui s'y trouvent
        public function energieDrinks(DrinksRepository $drinksRepository){
        $drinks=$drinksRepository->findAll();
        // et je renvoie le resltat sur ma page html correspondante
        return $this->render('users/drinks.html.twig',['drinks'=>$drinks]);
        }

    // Meme chose ici en ajoutant en parametres une wildCard pour récuperer l'id.
    /**
     * @Route("/users/energieDrink/{id}", name="drink")
     */
    //je crée ma methode qui me permettra de récuperer en base de données uniquement le produit
    //qui a l'ID correspondante au produit que je veut afficher

        public function energieDrink($id, DrinksRepository $drinksRepository){
        $drink=$drinksRepository->find($id);
        return $this->render('users/drink.html.twig', ['drink'=>$drink]);
    }
}