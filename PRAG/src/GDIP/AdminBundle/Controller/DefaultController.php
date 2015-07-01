<?php

namespace GDIP\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;

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
    public function gestionEvaluationAction()
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        $repository = $this
        ->getDoctrine()
        ->getManager()
        ->getRepository('GDIPGDIPBundle:Evaluation');

      $entities = $repository->findByEnabled(true);

        return array(
                'user' => $user,
                'entities' => $entities
            );
    }

    /**
     * Deletes an Evaluation entity.
     *
     * @Route("{id}/delete", name="evaluation_delete")
     * @Method({"GET", "POST"})
     */
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('GDIPGDIPBundle:Evaluation')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Evaluation entity.');
        }

        $entity->SetEnabled(false);
        $em->persist($entity);
        $em->flush();

        $success['success'] = "success";
        return new JsonResponse($success);
    }

    /**
     * @Route("/consulterEvaluation", name="consulterEvaluation")
     * @Template()
     */
    public function evaluationConsultationAction()
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        return $this->render('GDIPAdminBundle:Default:ConsultationEvaluation.html.twig',
            array(
                'user' => $user
            ));
    }
}
