<?php

namespace Imbuzzit\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SecurityController extends Controller
{
    public function loginAction()
    {
    	die("kkkk");
    	// Si le visiteur est déjà identifié, on le redirige vers l'accueil
	    if ($this->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
	      return $this->redirect($this->generateUrl('ImbuzzitAdminBundle_user'));
	    }
 
	    $request = $this->getRequest();
	    $session = $request->getSession();
	 
	    // On vérifie s'il y a des erreurs d'une précédent soumission du formulaire
	    if ($request->attributes->has(SecurityContext::AUTHENTICATION_ERROR)) {
	      $error = $request->attributes->get(SecurityContext::AUTHENTICATION_ERROR);
	    } else {
	      $error = $session->get(SecurityContext::AUTHENTICATION_ERROR);
	      $session->remove(SecurityContext::AUTHENTICATION_ERROR);
	    }
	 
	    return $this->render('ImbuzzitBundle:Security:login.html.twig', array(
	      // Valeur du précédent nom d'utilisateur rentré par l'internaute
	      'last_username' => $session->get(SecurityContext::LAST_USERNAME),
	      'error'         => $error,
	    ));
        return $this->render('ImbuzzitAdminBundle:Default:index.html.twig');
    }
}
