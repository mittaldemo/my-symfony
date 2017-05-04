<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\DependencyInjection\ContainerInterface;

class DemoController extends Controller
{
	public function __construct(ContainerInterface $service)
    {
        $this->container=$service;
    }
    public function getname()
    {
        $name = $this->container->getParameter('name');
        return $this->render('default/index.html.twig', array('name' => $name));
       //  \Doctrine\Common\Util\Debug::dump($this->container);
    }
	public function indexAction($name)
	{
			//return new Response('<html><body>Hello '.$name.'!</body></html>');
			echo $name;
	}
}
