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

            return $this->redirectToRoute('admin_genre_list'); //puis on redirige l'utilisateur vers la page des genres
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

    /**
     * @Route("/modif/{id}", name="admin_genre_modif", requirements={"id": "\d+"})
     */
    public function editAction(Request $request, $id)
    {
        //on récupère le bon Genre en fonction de l'id donnée dans l'URL
        $genre = $this->getDoctrine()->getRepository('TDCinemaBundle:Genre')->find($id);

        $form = $this->createForm(GenreType::class, $genre); //on le lie à un formulaire de type GenreType
        //Le formulaire sera donc prérempli avec les données de l'objet Genre récupéré en base de données.

        //puis on exécute le même traitement que pour l'ajout
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $genre = $form->getData();

            $em = $this->getDoctrine()->getManager();
            $em->persist($genre);
            $em->flush();

            return $this->redirectToRoute('admin_genre_list');
        }

        return $this->render(
            'TDAdminBundle:Genre:form.html.twig',
            ['form' => $form->createView()]
        );
    }


    /**
     * @Route("/supprimer/{id}", name="admin_genre_supprimer", requirements={"id": "\d+"})
     */
    public function deleteAction($id)
    {
        //on récupère le bon Genre en fonction de l'id donnée dans l'URL
        $genre = $this->getDoctrine()->getRepository('TDCinemaBundle:Genre')->find($id);

        $em = $this->getDoctrine()->getManager(); //on récupère le gestionnaire
        $em->remove($genre); //on supprime cette entité
        $em->flush(); //exécution en base

        return $this->redirectToRoute('admin_genre_list'); //redirection vers la liste
    }


}


































































































