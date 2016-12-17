<?php
/**
 * Created by PhpStorm.
 * User: Wesley
 * Date: 17/12/2016
 * Time: 04:42
 */




namespace TD\AdminBundle\Controller;

use TD\CinemaBundle\Entity\Personne;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use TD\AdminBundle\Form\PersonneType;


/**
 * @Route("/admin/personnes")
 */
class AdminPersonneController extends Controller
{
    /**
     * @Route("/ajout" , name="admin_ajoutpersonne")
     */
    public function addAction(Request $request)
    {

        $genre = new Personne(); //on crée un nou veau Genre vide
        $form = $this->createForm(PersonneType::class, $genre); //on le lie à un formulaire de type GenreType

        $form->handleRequest($request); //on lie le formulaire à la requête HTTP

        if ($form->isSubmitted() && $form->isValid()) { //si le formulaire a bien été soumis et qu'il est valide
            $personne = $form->getData(); //on crée un objet Genre avec les valeurs du formulaire soumis

            $em = $this->getDoctrine()->getManager(); //on récupère le gestionnaire d'entités de Doctrine

            $em->persist($personne); //on s'en sert pour enregistrer le genre (mais pas encore dans la base de données)

            $em->flush(); //écriture en base de toutes les données persistées

            return $this->redirectToRoute('admin_personne_list'); //puis on redirige l'utilisateur vers la page des genres
        }
        return $this->render(
            'TDAdminBundle:Personne:form.html.twig',
            ['form' => $form->createView()]
        );
    }


    /**
     * @Route("/list", name="admin_personne_list")
     */


    public function listAction()
    {
        $personne = $this->getDoctrine()->getRepository('TDCinemaBundle:Personne')->findAll();

        return $this->render(
            'TDAdminBundle:Personne:list.html.twig',
            ['personnes' => $personne]
        );

    }
}