<?php
namespace Clgt\ThemeBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * @Route("/login")
 */
class LoginController extends Controller 
{
    /**
     * @Route("/")
     * @Template("ClgtThemeBundle:User:login.html.twig")
     */
    public function indexAction()
    {
        return array();
    }
}