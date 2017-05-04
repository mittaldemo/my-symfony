<?php

namespace Acme\EmailBoxBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Acme\EmailBoxBundle\Entity\Emails;
use Acme\EmailBoxBundle\Entity\Reply;
use Acme\EmailBoxBundle\Controller\DefaultController;
use AppBundle\Entity\User;
use Symfony\Component\HttpFoundation\Session\Session;

class EmailController extends Controller
{
    public  function inboxAction()
    {
        if(!$this->get('security.authorization_checker')->isGranted('IS_AUTHENTICATED_FULLY')) 
        {
         return $this->render('default/index.html.twig'); 
        } 
        $user = $this->container->get('security.context')->getToken()->getUser();
        $userId= $user->getId();
        $repository = $this->getDoctrine()->getRepository('AppBundle:User');  
        $userEmail=$repository->find(array('id' => $userId))->getemail();
        $session=new Session();
        $session->set('email',$userEmail);
        $repository = $this->getDoctrine()->getRepository('EmailBoxBundle:Emails');
        $qb = $repository
                ->createQueryBuilder('c')
                ->where('c.sendTo = :email')->andWhere('c.status = :status')
                ->orderBy('c.id','DESC')
                ->setParameters(array('email' => $userEmail, 'status' => 'send'));
        $query = $qb->getQuery();
        $inboxEmails = $query->getResult(); 
        return $this->render('EmailBoxBundle:Emails:index.html.twig',array('inboxEmails' => $inboxEmails));
    }

	public function composeAction()
    {
        return $this->render('EmailBoxBundle:Emails:compose.html.twig');
    }
    public function sendAction(Request $request)
    {

        if($request->isMethod('POST'))
        {
            $to = $request->get('to');
            $from = $request->get('from');
            $subject = $request->get('subject');
            $content = $request->get('content');
            $value = $request->get('submit');
            $email=new Emails();
            $email->setSubject($subject);
            $email->setSendFrom($from);
            $email->setSendTo($to);
            $email->setContent($content);
            $email->setDate(new \DateTime());
            $em = $this->getDoctrine()->getManager();
    	    if($value=="Send") 
    	     {
                    // send a mail
                //$message = \Swift_Message::newInstance()
                //            ->setSubject($subject)
                //             ->setFrom($from)
                //             ->setTo($to)
                //             ->setCharset('UTF-8')
                //             ->setContentType('text/html')
                //             ->setBody(
                //             $this->container->get('templating')
                //                 ->render('EmailBoxBundle:Emails:emailContent.html.twig',array('content' => $content,'from' =>$from))
                //     );
                
                // $this->container->get('mailer')->send($message);
                // $spool = $this->container->get('mailer')->getTransport()->getSpool();
                // $transport = $this->container->get('swiftmailer.transport.real');
                // $spool->flushQueue($transport);

                $email->setStatus("send");
            
        	    $em->persist($email);
        		$em->flush();
        		return $this->redirectToRoute('email_sent');  
    		}else{
    	     	
                $email->setStatus("draft");
    	        $em->persist($email);
                $em->flush();
                return $this->redirectToRoute('email_draft');
    	    }
	    }else{
            return $this->redirectToRoute('email_compose'); 
        }
	}

    public function replyAction($emailId, Request $request)
    {
       
        if($request->isMethod('POST'))
        {
            $from=$request->get('from');
            
            $mailId= $request->get('mailId');
             
            $to=$request->get('to');
            $content=$request->get('content');
            $subject=$request->get('subject');
            $value = $request->get('submit');
            $em=$this->getDoctrine()->getManager();
            
                      // send a mail
                //$message = \Swift_Message::newInstance()
                //            ->setSubject($subject)
                //             ->setFrom($from)
                //             ->setTo($to)
                //             ->setCharset('UTF-8')
                //             ->setContentType('text/html')
                //             ->setBody(
                //             $this->container->get('templating')
                //                 ->render('EmailBoxBundle:Emails:emailContent.html.twig',array('content' => $content,'from' =>$from))
                //     );
                
                // $this->container->get('mailer')->send($message);
                // $spool = $this->container->get('mailer')->getTransport()->getSpool();
                // $transport = $this->container->get('swiftmailer.transport.real');
                // $spool->flushQueue($transport);
                
               
               $emails = $this->getDoctrine()->getRepository('EmailBoxBundle:Emails')->findOneById($mailId);
               
               $reply=new Reply();
               $reply->setMailFrom($from);
               $reply->setMailTo($to);
               $reply->setReply($content);
               $reply->setSubject($subject);
               $reply->setReplyDate(new \DateTime());
               $reply->setEmailId($emails);
               $em->persist($reply);
               $em->flush();
               return $this->redirectToRoute('email_details');
        }
        else
        {
                
                $repository = $this->getDoctrine()->getRepository('EmailBoxBundle:Emails');
                $replyEmails = $repository->findByid($emailId);
                return $this->render('EmailBoxBundle:Emails:reply.html.twig',array('replyEmails' => $replyEmails));
        }
            
    }
    
    public function forwardAction($emailId)
    {

        $repository = $this->getDoctrine()->getRepository('EmailBoxBundle:Emails');
        $forwardEmails = $repository->findByid($emailId);
       return $this->render('EmailBoxBundle:Emails:forward.html.twig',array('forwardEmails' => $forwardEmails));
    }

    public function deleteAction($emailId)
    {
        $em = $this->getDoctrine()->getManager();
        $entity = $em->getRepository('EmailBoxBundle:Emails')->findOneById($emailId);
        if ($entity != null)
        {
            $em->remove($entity);
            $em->flush();
        }
       return $this->redirectToRoute('email_box_homepage');
    }
    public function referenceAction()
    {
       
       $obj=$this->container->get('demo.controller');
      // \Doctrine\Common\Util\Debug::dump($obj);
       $name=$obj->getname();
       echo $name;
       die;
       return $this->redirectToRoute('email_box_homepage');
    }

}
