<?php
namespace Acme\SecurityBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Acme\SecurityBundle\Form\Type\RegistrationType;
use Acme\SecurityBundle\Form\Model\Registration;

class UserController extends Controller
{
    public function registerAction()
    {
        $registration = new Registration();
        $form = $this->createForm(new RegistrationType(), $registration, array(
            'action' => $this->generateUrl('account_create'),
        ));

        return $this->render(
            'AcmeSecurityBundle:User:register.html.twig',
            array('form' => $form->createView())
        );
    }
	
	public function createAction(Request $request)
	{
	    $em = $this->getDoctrine()->getManager();
	
	    $form = $this->createForm(new RegistrationType(), new Registration());
	
	    $form->handleRequest($request);
	
	    if ($form->isValid()) {
	        $registration = $form->getData();
	
			$user = $registration->getUser();
   
			$encoder_factory = $this->get('security.encoder_factory');
            
			$encoder = $encoder_factory->getEncoder($user);
			
			$user->setPassword($encoder->encodePassword($user->getPassword(), $user->getSalt()));
            
	        $em->persist($user);
            
	        $em->flush();
	
	        return $this->redirect('/');
	    }
	
	    return $this->render(
	        'AcmeAccountBundle:Account:register.html.twig',
	        array('form' => $form->createView())
	    );
	}
}