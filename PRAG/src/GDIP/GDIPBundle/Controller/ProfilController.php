<?php

namespace GDIP\GDIPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/profil")
 * @Template()
 */
class ProfilController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }

    /**
     * @Route("/email/modifier")
     * @Template()
     */
    public function editEmailAction()
    {

    }

    /**
     * @Route("/email/update")
     */
    public function updateEmailAction()
    {

    }

    /**
     * @Route("/mdp/modifier")
     * @Template()
     */
    public function editMdpAction()
    {

    }

    /**
     * @Route("/mdp/update")
     */
    public function updateMdpAction()
    {

    }
}
