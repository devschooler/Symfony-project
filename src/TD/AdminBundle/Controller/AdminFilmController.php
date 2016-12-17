<?php
/**
 * Created by PhpStorm.
 * User: Wesley
 * Date: 17/12/2016
 * Time: 17:26
 */



namespace TD\AdminBundle\Controller;

use TD\CinemaBundle\Entity\Film;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use TD\AdminBundle\Form\FilmType;


/**
 * @Route("/admin/films")
 */
class AdminFilmController extends Controller
{

    /**
     * @Route("/liste", name="admin_film_list")
     */

    public function listAction()
    {
        $film = $this->getDoctrine()->getRepository('TDCinemaBundle:Film')->findAll();

        return $this->render(
            'TDAdminBundle:Film:list.html.twig',
            ['film' => $film]
        );
    }

    /**
     * @Route("/ajout" , name="admin_ajoutfilm")
     */
    public function addAction(Request $request)
    {

        $film = new Film(); //on crée un nou veau Genre vide
        $form = $this->createForm(FilmType::class, $film); //on le lie à un formulaire de type GenreType

        $form->handleRequest($request); //on lie le formulaire à la requête HTTP

        if ($form->isSubmitted() && $form->isValid()) { //si le formulaire a bien été soumis et qu'il est valide
            $film = $form->getData(); //on crée un objet Genre avec les valeurs du formulaire soumis

            $em = $this->getDoctrine()->getManager(); //on récupère le gestionnaire d'entités de Doctrine

            $em->persist($personne); //on s'en sert pour enregistrer le genre (mais pas encore dans la base de données)

            $em->flush(); //écriture en base de toutes les données persistées

            return $this->redirectToRoute('admin_personne_list'); //puis on redirige l'utilisateur vers la page des genres
        }
        return $this->render(
            'TDAdminBundle:film:form.html.twig',
            ['form' => $form->createView()]
        );


    }
}