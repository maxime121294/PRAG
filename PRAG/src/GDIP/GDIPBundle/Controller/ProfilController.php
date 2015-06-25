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
     * @Route("/", name="profil")
     * @Template()
     */
    public function indexAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();

        return $this->render('GDIPGDIPBundle:Profil:index.html.twig',
            array(
                'user' => $user 
            ));
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
