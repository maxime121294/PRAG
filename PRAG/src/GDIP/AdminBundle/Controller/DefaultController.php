<?php

namespace GDIP\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{
    /**
     * @Route("/statistiques", name="statistiques")
     * @Template()
     */
    public function indexAction()
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        $repository = $this
    	  ->getDoctrine()
    	  ->getManager()
    	  ->getRepository('GDIPUserBundle:User');

    	$members = $repository->findByEnabled(true);
    	$nbMembers = count($members);

    	$adherents = $repository->findByEstAdherent(true);
    	$nbAdherents = count($adherents);
    	$nbNonAdherents = $nbMembers - $nbAdherents;

    	$statAdherents = $nbAdherents/$nbMembers*100;

        $repository = $this
          ->getDoctrine()
          ->getManager()
          ->getRepository('GDIPGDIPBundle:Stage');

        $stages = $repository->findAll();
        $nbStages = count($stages);

        return array(
                'user' => $user,
                'nbMembers' => $nbMembers,
                'statAdherents' => $statAdherents,
                'nbAdherents' => $nbAdherents,
                'nbNonAdherents' => $nbNonAdherents,
                'nbStages' => $nbStages,
            );
    }

    /**
     * @Route("/questionnaire", name="questionnaire")
     * @Template()
     */
    public function questionnaireAction()
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        return $this->render('GDIPAdminBundle:Default:GestionQuestions.html.twig',
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

        return $this->render('GDIPAdminBundle:Default:GestionStage.html.twig',
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

        $repository = $this
    	  ->getDoctrine()
    	  ->getManager()
    	  ->getRepository('GDIPUserBundle:User');

    	$entities = $repository->findAll();

        return $this->render('GDIPAdminBundle:Default:GestionUtilisateurs.html.twig',
            array(
                'user' => $user,
                'entities' => $entities
            ));
    }

    /**
     * @Route("/evaluation", name="evaluation")
     * @Template()
     */
    public function evaluationAction()
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        return $this->render('GDIPAdminBundle:Default:GestionEvaluation.html.twig',
            array(
                'user' => $user
            ));
    }
}
