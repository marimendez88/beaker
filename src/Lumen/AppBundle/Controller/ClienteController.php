<?php

namespace Lumen\AppBundle\Controller;

use Lumen\AppBundle\Entity\SolicitudDeServicios;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use Lumen\AppBundle\Entity\Cliente;
use Lumen\AppBundle\Entity\Empresa;
use Lumen\AppBundle\Entity\Cotizacion;
use Symfony\Component\HttpFoundation\JsonResponse;
use JMS\DiExtraBundle\Tests\Metadata\Driver\Fixture\LoginType;
use Symfony\Component\Form\FormError;
use Symfony\Component\HttpFoundation\Session\Session;

class ClienteController extends Controller
{



    public function indexClientAction()
    {

        return $this->render('LumenAppBundle:Cliente:index.html.twig');

    }

    public function loginCAction(Request $request)
    {
        $data = $request->query->all();
        $cliente = new Cliente();
        $form = $this->createForm(\Lumen\AppBundle\Form\ClienteType::class, $cliente, array(
            'action' => $this->generateUrl('loginaction'),
            'method' => 'POST'
        ));
        if (isset($data['loginError']) && $data['loginError'] == 1) {
            $form->get('clave')->addError(new FormError('El correo electrónico o la contraseña no son válidos'));
        }
        return $this->render('LumenAppBundle:Cliente:loginInicio.html.twig', array('form' => $form->createView()));

//        return $this->render('LumenAppBundle:Cliente:login.html.twig');

    }

    public function registroAction()
    {

        return $this->render('LumenAppBundle:Cliente:registroInicio.html.twig');

    }



    /**
     * @Route("/registrarCliente", name="registrarCliente")
     */
    public
    function ajaxRegistrarUsuario(Request $request)
    {
        $data = $request->request->all();
        dump($request->request->all());
        die;
        $em = $this->getDoctrine()->getManager();
        $data = $data['data'];

        $response = new JsonResponse();
        $user = $em->getRepository('LumenAppBundle:Cliente')->findOneBy(array('email' => $data['email']));
        if (is_null($user)) {
            $user = new Cliente();
            $user->setNombre($data['name']);
            $user->setApellido($data['lastname']);
            $user->setEmail($data['email']);
            $user->setTelefono($data['phone']);
            $user->setEmpresa($data['phone']);
            $user->setClave($data['password']);
            $em->persist($user);
            $em->flush();

            return new JsonResponse(array('status' => 'OK'));
        }

        return new JsonResponse(array('status' => 'error'));

    }


    /**
     * @Route("/dashboard" , name="dashboard" )
     */
    public function dashboardAction(Request $request)
    {

        /*
        $session = $request->getSession();
        $name= $session->get('name');

        if (is_null($session)) {
            return $this->redirect($this->generateUrl('login'));
        }else{
        */
            return $this->render('LumenAppBundle:Cliente:dashboard.html.twig');
        //}

    }



      /**
       * @Route("/login", name="login")
       */
      public function loginRouteAction(Request $request)
      {
            $data = $request->query->all();
            $cliente = new Cliente();
            $form = $this->createForm(\Lumen\AppBundle\Form\ClienteType::class, $cliente, array(
                'action' => $this->generateUrl('loginaction'),
                'method' => 'POST'
            ));
            if (isset($data['loginError']) && $data['loginError'] == 1) {
            $form->get('clave')->addError(new FormError('El correo electrónico o la contraseña no son válidos'));
            }
            return $this->render('LumenAppBundle:Cliente:loginInicio.html.twig', array('form' => $form->createView()));

      }

    /**
     * @Route("/loginaction", name="loginaction")
     * @Template()
     */
    public function loginAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
         $cliente = new Cliente();
                $form = $this->createForm(\Lumen\AppBundle\Form\ClienteType::class, $cliente, array(
                    'action' => $this->generateUrl('loginaction'),
                    'method' => 'POST'
                ));
            $form->handleRequest($request);
            $info = $form->getData();
            $user = $em->getRepository('LumenAppBundle:Cliente')->findBy(array('email' => $info->getEmail()));

            if (!$user){
                $form->get('email')->addError(new FormError('Correo incorrecto'));
                $result = array('error' => true, 'form' => $form);
            }else{

                $client =$user[0];
                $clave =$client->getClave();
                $name = $client->getNombre();
                $result  = [] ;
                if ($clave != $info->getClave()) {
                    $form->get('clave')->addError(new FormError('Contraseña Incorrecta'));
                    $result = array('error' => true, 'form' => $form);

                }else{
                    $result = array('error' => false, 'form' => $form);
                }
            }

        if ($result['error']== true) {
            return $this->redirect($this->generateUrl('login', array('form' => $form, 'loginError' => true)));
        }else{
            /*$session = new Session();
            $session->start();
            $session->set('name', $name);
            $session->get('name');*/

            return $this->redirect($this->generateUrl('dashboard'));
        }
    }

    /**
     * @Route("/logout", name="logout")
     * @Template()
     */
    public function logoutAction(){

        $this->get('security.token_storage')->setToken(null);
        $this->get('request')->getSession()->invalidate();
        $this->redirect($this->generateUrl('lumen_app_bundle_indexClient'));

    }
    /**
     * @Route("/cotizacion", name="cotizacion")
     * @Template()
     */
    public function cotizacionAction()
    {

        return $this->render('LumenAppBundle:Cliente:cotizacion.html.twig');

    }

    /**
     * @Route("/insertcotizacion", name="insertcotizacion")
     * @Template()
     */
    public function insertCotizacionAction()
    {       
        $fecha = $_POST['txtFecha'];
        $nombre = $_POST['txtNombre'];
        $empresa = $_POST['txtEmpresa'];
        $email = $_POST['txtEmail'];
        $telefono = $_POST['txtTelefono'];
        $detalle = $_POST['txtDetalle'];
        $estado = "Enviada";

       $em = $this->getDoctrine()->getEntityManager();
      
        $cotizacion = new Cotizacion();
        $cotizacion->setFecha($fecha);
        $cotizacion->setNombre($nombre);
        $cotizacion->setEmpresa($empresa);
        $cotizacion->setEmail($email);
        $cotizacion->setTelefono($telefono);
        $cotizacion->setDetalleCotizacion($detalle);
        $cotizacion->setEstado($estado);

         //insertar el objeto
         $em->persist($cotizacion); //pone el objeto en una cola para insertarlo
         $em->flush();

         echo "Solicitud enviada!!";
        return $this->render('LumenAppBundle:Cliente:cotizacion.html.twig');

    }

    /**
     * @Route("/insertSolicitud", name="insertSolicitud")
     * @Template()
     */
    public function insertSolicitudAction()
    {
        $analisis = $_POST['analisis'];
        $cliente = $_POST['cliente'];
        $fechaI = $_POST['txtFechaI'];
        $fechaM = $_POST['txtFechaM'];
        $hora = $_POST['txtHora'];
        $ph = $_POST['txtPH'];
        $tempe = $_POST['txtTemperatura'];
        $recipiente = $_POST['recipiente'];
        $muestra = $_POST['muestra'];
        $tipoMuestreo = $_POST['tipoMuestreo'];
        $observaciones = $_POST['txtDetalle'];
        $estado = "Enviada";

        $em = $this->getDoctrine()->getEntityManager();

        $solicitud = new SolicitudDeServicios();
        $solicitud->setCliente($cliente);
        $solicitud
        $cotizacion->setFecha($fecha);
        $cotizacion->setNombre($nombre);
        $cotizacion->setEmpresa($empresa);
        $cotizacion->setEmail($email);
        $cotizacion->setTelefono($telefono);
        $cotizacion->setDetalleCotizacion($detalle);
        $cotizacion->setEstado($estado);

        //insertar el objeto
        $em->persist($cotizacion); //pone el objeto en una cola para insertarlo
        $em->flush();

        echo "Solicitud enviada!!";
        return $this->render('LumenAppBundle:Cliente:cotizacion.html.twig');

    }

    /**
     * @Route("/getcotizacion", name="getcotizacion")
     * @Template()
     */
    public function getCotizacionAction()
    {       
        $em = $this->getDoctrine()->getEntityManager();
        $cotizaciones = $em->getRepository('LumenAppBundle:Cotizacion')->findAll();
        
       
        return $this->render('LumenAppBundle:Cliente:verCotizaciones.html.twig', array('cotizaciones' => $cotizaciones));

    }

    /**
     * @Route("/servicios", name="servicios")
     * @Template()
     */
    public function serviciosAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $analisis = $em->getRepository('LumenAppBundle:Analisis')->findAll();
        $clientes = $em->getRepository('LumenAppBundle:Cliente')->findAll();
        $muestras = $em->getRepository('LumenAppBundle:Muestra')->findAll();
        $tipoMuestras = $em->getRepository('LumenAppBundle:TipoMuestra')->findAll();

        return $this->render('LumenAppBundle:Cliente:solicitud.html.twig', array(
            'analisis' => $analisis,
            'clientes' => $clientes,
            'muestras' => $muestras,
            'tipomuestras' => $tipoMuestras));


    }







}
