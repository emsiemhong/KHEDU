<?php

namespace BookBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class ContentController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        // return $this->render('BookBundle:Default:index.html.twig');
    }
}
