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
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        if ($this->get('security.context')->isGranted('ROLE_ADMIN')) {
            return $this->redirect($this->generateUrl('statistiques'));
        }

        return $this->render('GDIPGDIPBundle:GDIP:index.html.twig',
            array(
                'user' => $user 
            ));
    }

    /**
     * @Route("/adhesion")
     * @Template()
     */
    public function adhererAction()
    {
        return $this->render('GDIPGDIPBundle:GDIP:adhesion.html.twig');
    }

    /**
     * @Route("/pre-choix")
     * @Template()
     */
    public function preChoixAction()
    {
        return $this->render('GDIPGDIPBundle:GDIP:pre-choix.html.twig');
    }
}
