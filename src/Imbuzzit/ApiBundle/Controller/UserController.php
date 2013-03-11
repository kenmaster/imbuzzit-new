<?php

namespace Imbuzzit\ApiBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Imbuzzit\ApiBundle\Entity\User;
use Imbuzzit\ApiBundle\Form\UserType;
use FOS\RestBundle\Controller\FOSRestController;

use FOS\RestBundle\View\View,
    FOS\RestBundle\View\ViewHandler,
    FOS\RestBundle\View\RouteRedirectView;

use Nelmio\ApiDocBundle\Annotation\ApiDoc;
/**
 * User controller.
 *
 */
class UserController extends DefaultController
{
    /**
     * This the documentation description of your method, it will appear
     * on a specific pane. It will read all the text until the first
     * annotation.
     *
     * @ApiDoc(
     *  resource=true,
     *  description="Lists all Users.",
     *  filters={
     *      {"name"="a-filter", "dataType"="integer"},
     *      {"name"="another-filter", "dataType"="string", "pattern"="(foo|bar) ASC|DESC"}
     *  }
     * )
     */
    public function indexAction()
    {
        $request = $this->getRequest();
        $em = $this->getDoctrine()->getManager();

        $options = array(
            'fields' => $request->get('fields')
        );

        $users = $em->getRepository('ImbuzzitApiBundle:User')->findAllUsers($options);

        $format = $this->getFormat();
        $serializer = \JMS\Serializer\SerializerBuilder::create()->build();

        if ($format == 'xml') {
            return $this->render('ImbuzzitApiBundle:User:index.html.twig', array('users' => $users));
        }
        $serializer = \JMS\Serializer\SerializerBuilder::create()->build();
        $return = $serializer->serialize(array('users' => $users), $this->getFormat());
        return new Response($return);        
    }

    /**
     * This the documentation description of your method, it will appear
     * on a specific pane. It will read all the text until the first
     * annotation.
     *
     * @ApiDoc(
     *  resource=true,
     *  description="Finds and displays a User.",
     *  filters={
     *      {"name"="a-filter", "dataType"="integer"},
     *      {"name"="another-filter", "dataType"="string", "pattern"="(foo|bar) ASC|DESC"}
     *  }
     * )
     */
    public function getAction($id)
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
        return new Response(json_encode(array('user' => $user)));
    }

    /**
     * This the documentation description of your method, it will appear
     * on a specific pane. It will read all the text until the first
     * annotation.
     *
     * @ApiDoc(
     *  description="Create a new User.",
     *  input="Imbuzzit\ApiBundle\Form\UserType",
     *  output="Imbuzzit\ApiBundle\User",
     * 
     * statusCodes={
     *         200="Returned when successful",
     *         403="Returned when the user is not authorized to say hello",
     *         404={
     *           "Returned when the user is not found",
     *           "Returned when somehting else is not found"
     *         }
     *     }
     *)
     */
    public function newAction()
    {
         $entity = new User();
         $form   = $this->createForm(new UserType(), $entity);

        return $this->processForm(new User());
    }

    private function processForm(User $user)
    {
        $form = $this->createForm(new UserType(), $user);
        $statusCode = $user->getId() ? 201 : 204;
        $factory = $this->get('security.encoder_factory');

        $form->bind($this->getRequest());

        if ($form->isValid()) {
            $encoder = $factory->getEncoder($user);
            $password = $encoder->encodePassword($user->getPassword(), $user->getSalt());
            $user
                ->setPassword($password)
                ->setAccountBirthday(new \DateTime())
                ->setBirthday(new \DateTime($user->getBirthday()))
            ;
            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();

            $response = new Response();
            $response->setStatusCode($statusCode);
            $response->headers->set('Location',
                $this->generateUrl(
                    'api_user_get', array('id' => $user->getId()),
                    true // absolute
                )
            );

            return $response;
        }
        
        return new Response(json_encode($form), 400);
    }

    /**
     * Creates a new User entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new User();
        $factory = $this->get('security.encoder_factory');
        
        
        $form = $this->createForm(
            new UserType(),
            $entity
        );
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

            return $this->redirect($this->generateUrl('api_user_get', array('id' => $entity->getId())));
        }

        return $this->render('ImbuzzitApiBundle:User:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * This the documentation description of your method, it will appear
     * on a specific pane. It will read all the text until the first
     * annotation.
     *
     * @ApiDoc(
     *  description="Updating an existing User.",
     *  input="Imbuzzit\ApiBundle\Form\UserCompleteType",
     *  output="Imbuzzit\ApiBundle\User",
     * 
     * statusCodes={
     *         200="Returned when successful",
     *         403="Returned when the user is not authorized to say hello",
     *         404={
     *           "Returned when the user is not found",
     *           "Returned when somehting else is not found"
     *         }
     *     }
     *)
     */
    public function editAction(User $id)
    {
        $em = $this->getDoctrine()->getManager();

        $user = $em->getRepository('ImbuzzitApiBundle:User')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find User entity.');
        }

        $editForm = $this->createForm(
            new UserType(),
            $user,
            array(
                'statusCode' => $this->getStatusCode()
            )
        );
    
        return $this->render('ImbuzzitApiBundle:User:edit.html.twig', array(
            'entity'      => $user,
            'edit_form'   => $editForm->createView()
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
    public function deleteAction(User $user)
    {
        $user->delete();
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
