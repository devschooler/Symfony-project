<?php



namespace TD\AdminBundle\Controller;

use TD\CinemaBundle\Entity\Genre;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
use TD\AdminBundle\Form\GenreType;


/**
* @Route("/admin/genres")
*/
class AdminGenreController extends Controller
{
    /**
     * @Route("/ajout" , name="admin_ajout")
     */
    public function addAction(Request $request)
    {

        $genre = new Genre(); //on crée un nou veau Genre vide
        $form = $this->createForm(GenreType::class, $genre); //on le lie à un formulaire de type GenreType

        $form->handleRequest($request); //on lie le formulaire à la requête HTTP

        if ($form->isSubmitted() && $form->isValid()) { //si le formulaire a bien été soumis et qu'il est valide
            $genre = $form->getData(); //on crée un objet Genre avec les valeurs du formulaire soumis

            $em = $this->getDoctrine()->getManager(); //on récupère le gestionnaire d'entités de Doctrine

            $em->persist($genre); //on s'en sert pour enregistrer le genre (mais pas encore dans la base de données)

            $em->flush(); //écriture en base de toutes les données persistées

            return $this->redirectToRoute('admin_genre_liste'); //puis on redirige l'utilisateur vers la page des genres
        }
        return $this->render(
            'TDAdminBundle:Genre:form.html.twig',
            ['form' => $form->createView()]
        );
    }


    /**
     * @Route("/liste", name="admin_genre_list")
     */

    public function listAction()
    {
        $genres = $this->getDoctrine()->getRepository('TDCinemaBundle:Genre')->findAll();

        return $this->render(
            'TDAdminBundle:Genre:list.html.twig',
            ['genres' => $genres]
        );
    }




}