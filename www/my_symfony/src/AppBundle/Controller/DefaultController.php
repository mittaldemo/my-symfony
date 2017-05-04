<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Product;
use AppBundle\Entity\Category;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/test")
     */
    public function testAction(Request $request)
    {
        return $this->render('default/index.html.twig');
    }
   public function createProductAction()
    {
        $category = new Category();
        //$category->setName('Computer Peripherals');

        $product = new Product();
        $product->setName('Keyboard');
        $product->setPrice(19.99);
        $product->setDescription('Ergonomic and stylish!');

        $product->setCategory($category);

        $em = $this->getDoctrine()->getManager();
        
        $em->persist($product);
        $em->flush();

        return new Response(
            'Saved new product with id: '.$product->getId()
            .' and new category with id: '.$category->getId()
        );
    }
    public function showAction()
    {
    
    $products = $this->getDoctrine()->getRepository('AppBundle:Product')->findAll();
    return $this->render('AppBundle:Defaults:product.html.twig',array('products' => $products));
    
    }
    public function showAllAction()
    {
    
    $categories = $this->getDoctrine()->getRepository('AppBundle:Category')->findAll();
   return $this->render('AppBundle:Defaults:category.html.twig',array('categories' => $categories));
    }
}


