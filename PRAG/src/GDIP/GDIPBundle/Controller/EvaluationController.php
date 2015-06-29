<?php

namespace GDIP\GDIPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

/**
 * @Route("/evaluation")
 * @Template()
 */
class EvaluationController extends Controller
{
    /**
     * @Route("/consultation")
     * @Template()
	 * @Security("has_role('ROLE_ADHERENT')")
     */
    public function consultationAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        $evaluations = $em->getRepository('GDIPGDIPBundle:Evaluation')->findAll();
		$domaines = $em->getRepository('GDIPGDIPBundle:Domaine')->findAll();

        return array(
			'domaines' => $domaines,
            'evaluations' => $evaluations,
            'user' => $user
        );
    }
	
	/**
     * @Route("/consultation/voir")
     * @Template()
     */
    public function voirEvaluationAction($idEval)
    {
		$em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        $evaluation = $em->getRepository('GDIPGDIPBundle:Evaluation')->find($idEval);
		
		return array(
            'evaluation' => $evaluation,
            'user' => $user
        );
    }

    /**
     * @Route("/voir")
     * @Template()
     */
    public function voirAction()
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        return $this->render('GDIPGDIPBundle:Evaluation:voir.html.twig',
            array(
            'user' => $user
        ));
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
