<?php

namespace Mmi\Bundle\BlogBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;


class DefaultController extends Controller
{
    /**
     * @Route("/salut")
     * @Template()
     */
    public function indexAction()
    {
        return $this->get('templating')->renderResponse('MmiBlogBundle:Default:index.html.twig');
    }
}
