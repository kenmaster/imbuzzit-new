<?php

namespace Imbuzzit\ApiBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Imbuzzit\ApiBundle\Entity\Stream;
use Imbuzzit\ApiBundle\Entity\User;
use Imbuzzit\ApiBundle\Form\StreamType;

/**
 * Stream controller.
 *
 */
class StreamController extends Controller
{
    /**
     * Lists all Stream entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('ImbuzzitApiBundle:Stream')->findAll();

        return $this->render('ImbuzzitApiBundle:Stream:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Stream entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImbuzzitApiBundle:Stream')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Stream entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ImbuzzitApiBundle:Stream:show.html.twig', array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),        ));
    }

    /**
     * Displays a form to create a new Stream entity.
     *
     */
    public function newAction()
    {
        $entity = new Stream();
        $form   = $this->createForm(new StreamType(), $entity);

        return $this->render('ImbuzzitApiBundle:Stream:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Stream entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Stream();

        $form = $this->createForm(new StreamType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            //$currentUser = $em->merge($em->getRepository('ImbuzzitApiBundle:User')->find(5));
            $currentUser = $em->getRepository('ImbuzzitApiBundle:User')->find(5);

            //var_dump($currentUser); die;
            $entity->setCreatedBy($currentUser);

            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('stream_show', array('id' => $entity->getId())));
        }

        return $this->render('ImbuzzitApiBundle:Stream:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Stream entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImbuzzitApiBundle:Stream')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Stream entity.');
        }

        $editForm = $this->createForm(new StreamType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ImbuzzitApiBundle:Stream:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Stream entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImbuzzitApiBundle:Stream')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Stream entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new StreamType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('stream_edit', array('id' => $id)));
        }

        return $this->render('ImbuzzitApiBundle:Stream:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Stream entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ImbuzzitApiBundle:Stream')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Stream entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('stream'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
