<?php

namespace GDIP\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/stats", name="statistiques")
     * @Template()
     */
    public function indexAction()
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        return $this->render('GDIPAdminBundle:Default:index.html.twig',
            array(
                'user' => $user 
            ));
    }

    /**
     * @Route("/questionnaire", name="questionnaire")
     * @Template()
     */
    public function questionnaireAction()
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        return $this->render('GDIPAdminBundle:Default:index.html.twig',
            array(
                'user' => $user
            ));
    }

    /**
     * @Route("/stage", name="stage")
     * @Template()
     */
    public function stageAction()
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        return $this->render('GDIPAdminBundle:Default:index.html.twig',
            array(
                'user' => $user
            ));
    }

    /**
     * @Route("/informations", name="informations")
     * @Template()
     */
    public function informationsAction()
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        return $this->render('GDIPAdminBundle:Default:index.html.twig',
            array(
                'user' => $user
            ));
    }

    /**
     * @Route("/utilisateur", name="utilisateur")
     * @Template()
     */
    public function utilisateurAction()
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        return $this->render('GDIPAdminBundle:Default:index.html.twig',
            array(
                'user' => $user
            ));
    }
}
