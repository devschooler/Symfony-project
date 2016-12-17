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

            $em->persist($film); //on s'en sert pour enregistrer le genre (mais pas encore dans la base de données)

            $em->flush(); //écriture en base de toutes les données persistées

            return $this->redirectToRoute('admin_film_list'); //puis on redirige l'utilisateur vers la page des genres
        }
        return $this->render(
            'TDAdminBundle:film:form.html.twig',
            ['form' => $form->createView()]
        );


    }

    /**
     * @Route("/modif/{id}", name="admin_film_modif", requirements={"id": "\d+"})
     */
    public function editAction(Request $request, $id)
    {
        //on récupère le bon Genre en fonction de l'id donnée dans l'URL
        $film = $this->getDoctrine()->getRepository('TDCinemaBundle:Film')->find($id);

        $form = $this->createForm(PersonneType::class, $film); //on le lie à un formulaire de type GenreType
        //Le formulaire sera donc prérempli avec les données de l'objet Genre récupéré en base de données.

        //puis on exécute le même traitement que pour l'ajout
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $film = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($film);
            $em->flush();

            return $this->redirectToRoute('admin_film_list');
        }

        return $this->render(
            'TDAdminBundle:Film:form.html.twig',
            ['form' => $form->createView()]
        );
    }

    /**
     * @Route("/supprimer/{id}", name="admin_film_delete", requirements={"id": "\d+"})
     */
    public function deleteAction($id)
    {
        //on récupère le bon Genre en fonction de l'id donnée dans l'URL
        $film = $this->getDoctrine()->getRepository('TDCinemaBundle:Film')->find($id);

        $em = $this->getDoctrine()->getManager(); //on récupère le gestionnaire
        $em->remove($film); //on supprime cette entité
        $em->flush(); //exécution en base

        return $this->redirectToRoute('admin_film_list'); //redirection vers la liste
    }






}