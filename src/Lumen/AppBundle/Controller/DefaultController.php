<?php

namespace Lumen\AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DefaultController extends Controller
{

    /**
     * @Route("/", name="index")
     * @Template()
     */
    public function indexAction()
    {

        return array('message' => 'Hello, this is beaker!!');

    }


    /**
     * @Route("/register", name="register")
     * @Template()
     */
    public
    function registerAction()
    {

        return array();
    }


}
