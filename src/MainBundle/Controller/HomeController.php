<?php

namespace MainBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HomeController extends Controller {

	/**
	 * @Route("/", name="homepage")
	 */
	public function indexAction()
	{
		return $this->render('MainBundle:Home:index.html.twig');
	}
}