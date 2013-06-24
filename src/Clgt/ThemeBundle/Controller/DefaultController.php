<?php

namespace Clgt\ThemeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('ClgtThemeBundle:Default:index.html.twig');
    }
}
