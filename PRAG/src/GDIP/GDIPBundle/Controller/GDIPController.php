<?php

namespace GDIP\GDIPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class GDIPController extends Controller
{
    /**
     * @Route("/index", name="index")
     * @Template()
     */
    public function indexAction()
    {
        return $this->render('GDIPGDIPBundle:GDIP:index.html.twig');
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
