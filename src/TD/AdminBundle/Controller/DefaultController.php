<?php

namespace TD\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/admin" , name="admin_all")
     */
    public function indexAction()
    {
        return $this->render('TDAdminBundle:Default:index.html.twig');
    }
}


