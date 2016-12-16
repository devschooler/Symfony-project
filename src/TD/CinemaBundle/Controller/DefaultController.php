<?php

namespace TD\CinemaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('TDCinemaBundle:Default:index.html.twig');
    }


    /**
     * @Route("/Film", name="films_all")
     */
    public function listAction()
    {


        $films = $this->getDoctrine()->getRepository('TDCinemaBundle:Film')->findAll();

        return $this->render('TDCinemaBundle:Film:list.html.twig' , ['films' => $films]
        );

    }

    /**
     * @Route("/Film/{id}", requirements={"id": "\d+"}, name="film_page")
     */
    public function showAction($id)
    {

        $film = $this->getDoctrine()->getRepository('TDCinemaBundle:Film')->find($id);


        return $this->render('TDCinemaBundle:Film:show.html.twig' , ['film' => $film]);
     }



}