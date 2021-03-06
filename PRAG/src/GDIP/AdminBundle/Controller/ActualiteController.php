<?php

namespace GDIP\AdminBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use GDIP\AdminBundle\Entity\Actualite;
use GDIP\AdminBundle\Form\ActualiteType;
use Symfony\Component\HttpFoundation\JsonResponse;

/**
 * Actualite controller.
 *
 * @Route("/actualite")
 */
class ActualiteController extends Controller
{

    /**
     * Lists all Actualite entities.
     *
     * @Route("/", name="actualite")
     * @Method("GET")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $user = $this->container->get('security.token_storage')->getToken()->getUser();

        $entities = $em->getRepository('GDIPAdminBundle:Actualite')->findAll();

        return array(
            'entities' => $entities,
            'user' => $user
        );
    }
    /**
     * Creates a new Actualite entity.
     *
     * @Route("/", name="actualite_create")
     * @Method("POST")
     * @Template("GDIPAdminBundle:Actualite:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity = new Actualite();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('actualite', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a form to create a Actualite entity.
     *
     * @param Actualite $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Actualite $entity)
    {
        $form = $this->createForm(new ActualiteType(), $entity, array(
            'action' => $this->generateUrl('actualite_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Enregistrer'));

        return $form;
    }

    /**
     * Displays a form to create a new Actualite entity.
     *
     * @Route("/new", name="actualite_new")
     * @Method("GET")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Actualite();
        $form   = $this->createCreateForm($entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Actualite entity.
     *
     * @Route("/{id}/edit", name="actualite_edit")
     * @Method("GET")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GDIPAdminBundle:Actualite')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Actualite entity.');
        }

        $editForm = $this->createEditForm($entity);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        );
    }

    /**
    * Creates a form to edit a Actualite entity.
    *
    * @param Actualite $entity The entity
    *
    * @return \Symfony\Component\Form\Form The form
    */
    private function createEditForm(Actualite $entity)
    {
        $form = $this->createForm(new ActualiteType(), $entity, array(
            'action' => $this->generateUrl('actualite_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Mettre à jour'));

        return $form;
    }
    /**
     * Edits an existing Actualite entity.
     *
     * @Route("/{id}", name="actualite_update")
     * @Method("PUT")
     * @Template("GDIPAdminBundle:Actualite:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('GDIPAdminBundle:Actualite')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Actualite entity.');
        }

        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('actualite', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
        );
    }
    /**
     * Deletes a Actualite entity.
     *
     * @Route("/delete/{id}", name="actualite_delete")
     * @Method({"GET", "POST"})
     */
    public function deleteAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('GDIPAdminBundle:Actualite')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Actualite entity.');
        }

        $em->remove($entity);
        $em->flush();

        $success['success'] = "success"; 

        return new JsonResponse($success);
    }
}
