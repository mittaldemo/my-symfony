<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('email_homepage', new Route('/hello/{name}', array(
    '_controller' => 'EmailBundle:Default:index',
)));

return $collection;
