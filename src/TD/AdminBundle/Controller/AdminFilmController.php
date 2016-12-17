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




}