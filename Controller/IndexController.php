<?php

namespace Kamran\MediaToolBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;




/**
 * Dashboard controller.
 *
 * @Route("/media")
 */

class IndexController extends Controller
{


    /**
     * @Route("/", name="mediatool_index")
     * @Template()
     */
    public function indexAction()
    {

    	//return array('projects'=>$projects);
    }



}

