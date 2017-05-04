<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\User;
use AppBundle\Entity\UserGroup;
use Symfony\Component\HttpFoundation\Response;

class userGroupController extends Controller
{
	
    public function addGroupAction()
    {
    	return $this->render('AppBundle:Defaults:addGroup.html.twig');
    }
    
    public function addUserGroupAction(Request $request)
    {
    	$user=new User();
    	$group=new UserGroup();
        $userName = $request->get('userName');
        $userGroup = $request->get('userGroup');
        $user->setName($userName);
        $group->setName($userGroup);
        $user->addGroup($group);
        //$group->addUser($user);
    	$em = $this->getDoctrine()->getManager();
        $em->persist($user);
        $em->persist($group);
        $em->flush();
		return $this->redirectToRoute('user_showgroup');
    }
    public function showGroupAction(Request $request)
    {
    	//$users=$this->getDoctrine()->getRepository('AppBundle:User')->findAll();
        //$groups=$this->getDoctrine()->getRepository('AppBundle:UserGroup')->findAll();
    $repository=$this->getDoctrine()->getRepository('AppBundle:User');
    $db=$repository->CreateQueryBuilder('c')->groupBy('c.name');
    $query=$db->getQuery();
    $results=$query->getResult();
    print_r($results);
    return $this->render('AppBundle:Defaults:userGroup.html.twig', array('users' => $users,'groups' => $groups));
    }
}
