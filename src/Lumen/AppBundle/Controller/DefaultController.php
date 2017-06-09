<?php

namespace Lumen\AppBundle\Controller;


use Lumen\AppBundle\Entity\Cliente;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
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

    /**
     * @Route("/registrar/usuario", name="registrar_usuario_ajax")
     */
    public
    function ajaxRegistrarUsuario(Request $request)
    {
        $data = $request->request->all();
        $data = $data['data'];
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository('LumenAppBundle:Cliente')->findOneBy(array('email' => $data['email']));
        if (is_null($user)) {
            $user = new Cliente();
            $user->setNombre($data['name']);
            $user->setApellido($data['lastname']);
            $user->setEmail($data['email']);
            $user->setTelefono($data['phone']);
            $user->setEmpresa($data['company']);
            $user->setClave($data['password']);
            $em->persist($user);
            $em->flush();

            return array('status' => 'OK', 'info' => array('data' => $user), 'error' => '');
        }

        return array('status' => 'error', 'info' => array('data' => []), 'error' => 'El correo ya existe');

    }
    /**
     * @Route("/cdashboard", name="cdashboard")
     * @Template()
     */
    public
    function cdashboardAction()
    {
        $user = $this->getUser();
        if (is_null($user)) {
            return $this->redirect($this->generateUrl('loginRoute'));
        }

        return array();
    }

    /**
     * @Route("/login", name="loginRoute")
     * @Template()
     */
    public
    function loginRouteAction(Request $request)
    {
        /*  $data = $request->query->all();
        $form = $this->createForm(new LoginType(), null, array(
            'action' => $this->generateUrl('loginaction'),
            'method' => 'POST'
        ));
        if (isset($data['loginError']) && $data['loginError'] == 1) {
            $form->get('password')->addError(new FormError('El correo electrónico o la contraseña no son válidos'));
        }

        return $this->render('LumenAppBundle:Default:login.html.twig', array('form' => $form->createView()));
    */
    }

}
