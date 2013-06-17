<?php
namespace Acme\StoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\RedirectResponse;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Validator\Constraints\Length;
use Symfony\Component\Validator\Constraints\NotBlank;

class UserController extends Controller 
{
	/**
	 * @Template()
	 */
	public function signinAction()
	{
		$loginForm = $this->createFormBuilder(array())
								->add('username', 'text', array(
									'constraints' => array(
											new NotBlank(),
											new Length(array('min' => 5))
										),
									'label' => 'Username:'
								))
								->add('password', 'password', array(
									'constraints' => array(
											new NotBlank(),
											new Length(array('min' => 6))
										),
									'label' => 'Password:'
								))
								->getForm();

		if($this->get('request')->getMethod() === 'POST') {
			$loginForm->bind($this->getRequest());

			if($loginForm->isValid()) {
				
			}
		}

		return array('form' => $loginForm->createView());
	}

	public function signoutAction()
	{

	}
}