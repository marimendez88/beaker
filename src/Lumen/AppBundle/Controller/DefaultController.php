<?php

namespace Lumen\AppBundle\Controller;



use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Lumen\AppBundle\Entity\Cliente;
use FOS\RestBundle\Controller\Annotations as Rest;
use Symfony\Component\HttpFoundation\Session\Session;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Lumen\ImportsBundle\Controller\LumenController;
use Symfony\Component\Form\FormError;
use Application\Sonata\UserBundle\Entity\User;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Doctrine\ORM\EntityRepository;
use Lumen\AppBundle\Form\Login\LoginType;

class DefaultController extends Controller
{

 
  public function indexAction()
  {

    return $this->render('LumenAppBundle:Cliente:index.html.twig');

  }

  public function loginAction()
  {

    return $this->render('LumenAppBundle:Cliente:loginInicio.html.twig');

  }

  public function registroAction()
  {

    return $this->render('LumenAppBundle:Cliente:loginInicio.html.twig');

  }








}
