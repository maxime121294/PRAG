<?php

namespace GDIP\GDIPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use GDIP\GDIPBundle\Entity\PreChoix;

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

        $em = $this->getDoctrine()->getManager();
        $entities = $em->getRepository('GDIPAdminBundle:Actualite')->findAll();

        return $this->render('GDIPGDIPBundle:GDIP:index.html.twig',
            array(
                'entities' => $entities,
                'user' => $user
            ));
    }

    /**
     * @Route("/adhesion", name="adhesion")
     * @Template()
     */
    public function adhererAction()
    {
		$user = $this->container->get('security.token_storage')->getToken()->getUser();
        return $this->render('GDIPGDIPBundle:GDIP:adhesion.html.twig',
			array(
                'user' => $user
            ));
    }

    /**
     * @Route("/pre-choix", name="prechoix")
     * @Template()
     */
    public function preChoixAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $nbNotChosen =  count($em->getRepository('GDIPGDIPBundle:PreChoix')->getNumberNotChosen());
        $nbBetter =  $em->getRepository('GDIPGDIPBundle:PreChoix')->getNumberBetter($user->getId());
        $nbBetterChosen =  count($em->getRepository('GDIPGDIPBundle:PreChoix')->getNumberBetterChosen($nbBetter));

        $entities = $em->getRepository('GDIPGDIPBundle:PreChoix')
        ->findBy(
            array('utilisateur' => $user->getId()),
            array('position' => 'asc')
        );

        $domaines = $em->getRepository('GDIPGDIPBundle:Domaine')
        ->findBy(
            array(),
            array('libelleDomaine' => 'asc')
        );

        return array(
            'entities' => $entities,
            'user' => $user,
            'nbNotChosen'=> $nbNotChosen,
            'nbBetterChosen' => $nbBetterChosen,
            'domaines' => $domaines
		);
    }

    /**
     * @Route("/pre-choix/ordre/valider", name="validationPreChoix")
     * @Method({"GET", "POST"})
     */
    public function validerOrdrePreChoixAction(Request $request)
    {
        $ordrePreChoixString = $request->get("ordrePreChoixString");
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $ordrePreChoixString=str_replace(' ','',$ordrePreChoixString); //enleve les espaces
        $ordrePreChoixArray = explode(",", $ordrePreChoixString); //convertit en tableau avec les virgules comme separateur

        $repository = $em->getRepository('GDIPGDIPBundle:PreChoix');


        $missingPreChoix = $repository->getMissingPreChoix($user->getId(), $ordrePreChoixArray);
        foreach ($missingPreChoix as $missPreChoix) {
            $em->remove($missPreChoix);
            $em->flush();
        }

        $position = 1;

        foreach ($ordrePreChoixArray as $positionPreChoix) {
            $preChoix = $repository->getPreChoixByPosition($user->getId(), $positionPreChoix);
            $preChoix = $repository->setPositionPreChoix($em, $preChoix, $position);
            $position++;
        }

        $repository->setAllPreChoixTraiteNull($em);

        $success['success'] = "success"; 

        return new JsonResponse($success);
    }
	
	/**
     * Creates a new PreChoix entity.
     *
     * @Route("/pre-choix/stage/{idStage}/new", name="createPrechoix")
     */
    public function createPreChoixAction($idStage)
    {
		$em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
		$stage = $em->getRepository('GDIPGDIPBundle:Stage')->find($idStage);
        $stage->setNbPlaces(($stage->getNbPlaces())-1); // on retire une place de diponible pour ce stage
		
		$prechoix  = new PreChoix();
		$prechoix->setUtilisateur($user);
		$prechoix->setStage($stage);
		
        $entities = $em->getRepository('GDIPGDIPBundle:PreChoix')
																->findBy(
																	array('utilisateur' => $user->getId()),
																	array('position' => 'asc')
																);
		$dernierePosition = count($entities)+1;
		$prechoix->setPosition($dernierePosition);
		$em->persist($prechoix);
		$em->flush();

        $this->get('session')->getFlashBag()->add(
            'notice',
            'Le stage a été ajouté à votre liste de pré-choix avec succès !'
        );
		
        return $this->redirect($this->generateUrl('prechoix'));
    }

    /**
     * @Route("/pre-choix/hopitaux", name="getHopitaux")
     * @Method({"GET", "POST"})
     */
    public function getHopitauxByDomaineAction(Request $request)
    {
        $idDomaine = $request->get("idDomaine");
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        $domaine = $em->getRepository('GDIPGDIPBundle:Domaine')->find($idDomaine);

        $hopitaux = $domaine->getHopitaux();

        $success = array();

        foreach ($hopitaux as $hopital) {
            $success['hopitaux'][$hopital->getId()] = $hopital->getLibelleHopital();
        }

        return new JsonResponse($success);
    }

    /**
     * @Route("/pre-choix/stages", name="getStages")
     * @Method({"GET", "POST"})
     * @Template()
     */
    public function getStagesByHopitalAction(Request $request)
    {
        $idHopital = $request->get("idHopital");
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        $hopital = $em->getRepository('GDIPGDIPBundle:Hopital')->find($idHopital);

        return array(
            'hopital' => $hopital
        );
    }
}
