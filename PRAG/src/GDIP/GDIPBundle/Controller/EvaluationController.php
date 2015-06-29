<?php

namespace GDIP\GDIPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * @Route("/evaluation")
 * @Template()
 */
class EvaluationController extends Controller
{
    /**
     * @Route("/consultation")
     * @Template()
     */
    public function consultationAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        $entities = $em->getRepository('GDIPGDIPBundle:Evaluation')->findAll();

        return array(
            'entities' => $entities,
            'user' => $user
        );
    }

    /**
     * @Route("/enregistrement")
     * @Template()
     */
    public function enregistrerEvaluationAction()
    {

    }

    /**
     * @Route("/saisie")
     * @Template()
     */
    public function saisirEvaluationAction()
    {

    }
}
