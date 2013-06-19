<?php
namespace Acme\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

use Acme\UserBundle\Form\Type\RegistrationType;
use Acme\UserBundle\Form\Model\Registration;
use Symfony\Component\HttpFoundation\Request;

class AccountController extends Controller
{
    public function registerAction()
    {
        $registration = new Registration();
        $form = $this->createForm(new RegistrationType(), $registration, array(
            'action' => $this->generateUrl('acme_user_create'),
        ));

        return $this->render(
            'AcmeUserBundle:Account:register.html.twig',
            array('form' => $form->createView())
        );
    }

    public function createAction(Request $request)
	{
	    $em = $this->getDoctrine()->getEntityManager();

	    $form = $this->createForm(new RegistrationType(), new Registration());

	    $form->handleRequest($request);

	    if ($form->isValid()) {
	        $registration = $form->getData();

	        $em->persist($registration->getUser());
	        $em->flush();

	        return $this->redirect('/');
	    }

	    return $this->render(
	        'AcmeUserBundle:Account:register.html.twig',
	        array('form' => $form->createView())
	    );
	}
}