<?php

namespace GDIP\GDIPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
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

    /**
     * @Route("/evaluations/consultation")
     * @Template()
     */
    public function consulterEvaluationAction()
    {

    }

    /**
     * @Route("/evaluations/saisie")
     * @Template()
     */
    public function saisirEvaluationAction()
    {

    }

    /**
     * @Route("/modifier/email")
     * @Template()
     */
    public function editEmailAction()
    {

    }

    /**
     * @Route("/update/email")
     * @Template()
     */
    public function updateEmailAction()
    {

    }

    /**
     * @Route("/modifier/mdp")
     * @Template()
     */
    public function editMdpAction()
    {

    }

    /**
     * @Route("/update/mdp")
     * @Template()
     */
    public function updateMdpAction()
    {

    }
}
