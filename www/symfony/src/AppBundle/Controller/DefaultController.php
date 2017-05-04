<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
 
    public function indexAction()
    {

        $dcObj = $this->container->get('default.controller');
        $message[]=$dcObj->test();
        return $this->render('default/index.html.twig');
        //return $this->addFlash('success', $message);
    	//return $this->forward('default_controller:indexAction');
    	
    	
    }
}
