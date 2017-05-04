<?php

namespace Acme\EmailBoxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Acme\EmailBoxBundle\Controller\BaseController;


class TestController extends Controller
{
    public function includeAction()
    {
        $item = array(
            '1' => 'mango',
            '2' => 'banana',
            '3' => 'ornage',);
 return $this->render('EmailBoxBundle:Default:test_include.html.twig',array('fruits' => $item));
    }
    public function extendsAction()
    {
        $a=50;
        return $this->render('EmailBoxBundle:Default:test_extend.html.twig');
    }
}
