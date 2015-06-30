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
     * @Route("/consultation", name="consultation")
     * @Template()
	 * @Security("has_role('ROLE_ADHERENT')")
     */
    public function consultationAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        $entities = $em->getRepository('GDIPGDIPBundle:Evaluation')->findAll();
		$domaines = $em->getRepository('GDIPGDIPBundle:Domaine')->findAll();

        return array(
			'domaines' => $domaines,
            'entities' => $entities,
            'user' => $user
        );
    }
	
	/**
     * @Route("/{idEval}/voir", name="voirEvaluation")
     * @Template()
     */
    public function voirAction($idEval)
    {
		$em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        $evaluation = $em->getRepository('GDIPGDIPBundle:Evaluation')->find($idEval);

        if (!$evaluation) {
            throw $this->createNotFoundException('Unable to find Evaluation entity.');
        }
		
		return array(
            'evaluation' => $evaluation,
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
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        return $this->render('GDIPGDIPBundle:Evaluation:saisirEvaluation.html.twig',
            array(
                'user' => $user
            ));
    }
}
