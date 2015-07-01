<?php

namespace GDIP\GDIPBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

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
     * @Route("/adhesion")
     * @Template()
     */
    public function adhererAction()
    {
        return $this->render('GDIPGDIPBundle:GDIP:adhesion.html.twig');
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

        $entities = $em->getRepository('GDIPGDIPBundle:PreChoix')
        ->findBy(
            array('utilisateur' => $user->getId()),
            array('position' => 'asc')
        );

        return $this->render('GDIPGDIPBundle:GDIP:preChoix.html.twig',
            array(
                'entities' => $entities,
                'user' => $user,
                'nbNotChosen'=> $nbNotChosen
            )
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
}
