<?php

namespace Imbuzzit\ApiBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Imbuzzit\ApiBundle\Entity\User;
use Imbuzzit\ApiBundle\Form\UserType;
use FOS\RestBundle\Controller\Annotations as Rest;

/**
 * User controller.
 *
 */
class UserController extends DefaultController
{
    /**
     * Lists all User entities.
     *
     */
    public function indexAction()
    {
        $request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();

        $options = array(
            'fields' => $request->get('fields')
        );

        $users = $em->getRepository('ImbuzzitApiBundle:User')->findAllUsers($options);

        if ($this->getFormat() == 'xml') {
            return $this->render('ImbuzzitApiBundle:User:index.html.twig', array('users' => $users));
        }
        return new Response(json_encode(array('Result' => $users)));        
    }

    /**
     * Finds and displays a User entity.
     *
     */
    public function showAction($id)
    {   
        $request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();

        $options = array(
            'fields' => $request->get('fields')
        );

        $user = $em->getRepository('ImbuzzitApiBundle:User')->findOneUser($id, $options);

        if (!$user) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        if ($this->getFormat() == 'xml') {
            return $this->render('ImbuzzitApiBundle:User:show.html.twig', array('user' => $user));
        }
        return new Response(json_encode(array('Result' => $user)));
    }

    /**
     * Displays a form to create a new User entity.
     *
     */
    public function newAction()
    {
        $entity = new User();
        $form   = $this->createForm(new UserType(), $entity);

        return $this->render('ImbuzzitApiBundle:User:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new User entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new User();
        $factory = $this->get('security.encoder_factory');
        
        $form = $this->createForm(new UserType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $encoder = $factory->getEncoder($entity);
            $password = $encoder->encodePassword($entity->getPassword(), $entity->getSalt());
            $entity
                ->setPassword($password)
                ->setAccountBirthday(new \DateTime())
            ;
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('user_show', array('id' => $entity->getId())));
        }

        return $this->render('ImbuzzitApiBundle:User:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing User entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImbuzzitApiBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $editForm = $this->createForm(new UserType(), $entity, array('complete' => true));
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('ImbuzzitApiBundle:User:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing User entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('ImbuzzitApiBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new UserType(), $entity, array('complete' => true));
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('user_edit', array('id' => $id)));
        }

        return $this->render('ImbuzzitApiBundle:User:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a User entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('ImbuzzitApiBundle:User')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find User entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('user'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
