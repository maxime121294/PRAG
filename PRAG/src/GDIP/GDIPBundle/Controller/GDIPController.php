<?php

namespace GDIP\GDIPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class GDIPController extends Controller
{
    /**
     * @Route("/hello/{name}")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }

    /**
     * @Route("/profil/{name}")
     * @Template()
     */
    public function profilAction($name)
    {
        return array('name' => $name);
    }

    /**
     * @Route("/adhesion")
     * @Template()
     */
    public function adhererAction()
    {

    }

    /**
     * @Route("/pre-choix")
     * @Template()
     */
    public function preChoixAction()
    {

    }
}
