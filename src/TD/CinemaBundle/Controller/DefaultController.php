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
     * @Route("/Films")
     */
    public function listAction()
    {


        $films = $this->getDoctrine()->getRepository('TDCinemaBundle:Film')->findAll();

        return $this->render('TDCinemaBundle:Film:list.html.twig' , ['films' => $films]
        );

    }

    /**
     * @Route("/livre/{id}", requirements={"id": "\d+"})
     */
    public function showAction($id)
    {

        $film = $this->getDoctrine()->getRepository('TDCinemaBundle:Film')->find($id);


        return $this->render('TDCinemaBundle:Film:show.html.twig' , ['film' => $film]);
     }



}