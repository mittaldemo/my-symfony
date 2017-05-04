<?php

namespace Acme\EmailBoxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Acme\EmailBoxBundle\Entity\Emails;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\Session;
use Acme\EmailBoxBundle\Controller\BaseController;


class DefaultController extends Controller
{
    public function indexAction()
    {
        //return $this->render('default/index.html.twig');
        return new Response('<html><body>Hello</body></html>');
    }
    
    public function sentAction()
    {
        $session = new Session();
        $email=$session->get('email');
        $repository = $this->getDoctrine()->getRepository('EmailBoxBundle:Emails');
        $qb = $repository->createQueryBuilder('c')
                         ->where('c.sendFrom = :email')
                         ->andWhere('c.status = :status')->orderBy('c.id','DESC')
                         ->setParameters(array('email' => $email,'status' =>'send'));
        $query = $qb->getQuery();
        $sentEmails = $query->getResult();  
        return $this->render('EmailBoxBundle:Emails:send.html.twig', array('sentEmails' => $sentEmails));
    }
    
    public function draftAction()
    {
       
        $session = new Session();
        $email=$session->get('email');
        $repository = $this->getDoctrine()->getRepository('EmailBoxBundle:Emails');
        $qb = $repository->createQueryBuilder('c')
                        ->where('c.sendFrom = :email')
                        ->andWhere('c.status = :status')->orderBy('c.id','DESC')
                        ->setParameters(array('email' => $email,'status' =>'draft'));
 
        $query = $qb->getQuery();
        $draftEmails = $query->getResult();
            
       return $this->render('EmailBoxBundle:Emails:draft.html.twig', array('draftEmails' => $draftEmails));
      
    }
    
    public function viewAction($emailId)
    {

        $repository = $this->getDoctrine()->getRepository('EmailBoxBundle:Emails');
        $viewEmails = $repository->findByid($emailId);
        $priMails=$this->getDoctrine()->getRepository('EmailBoxBundle:Reply')->findByEmailId($emailId);    
        return $this->render('EmailBoxBundle:Emails:emailDetails.html.twig', array('viewEmails' => $viewEmails ,'priMails' => $priMails));
    }
    public function demoAction($id, $text)
    {
        echo $id;
        echo '<br>';
        echo $text;
        return $this->redirectToRoute('default/index.html.twig');
    }
 /*   public function showExceptionAction()
    {
        return $this->render('EmailBoxBundle:Exception:error404.html.twig');
    }
  */
    public function test()
    {
        $messages = [
            'You did it! You updated the system! Amazing!',
            'That was one of the coolest updates I\'ve seen all day!',
            'Great work! Keep going!',
        ];
        return $messages;
    }
}
