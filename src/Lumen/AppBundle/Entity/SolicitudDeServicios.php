<?php

namespace Lumen\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SolicitudDeServicios
 *
 * @ORM\Table(name="solicitud_de_servicios")
 * @ORM\Entity(repositoryClass="Lumen\AppBundle\Repository\SolicitudDeServiciosRepository")
 */
class SolicitudDeServicios
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="Lumen\AppBundle\Entity\Cliente", inversedBy="cliente")
     * @ORM\JoinColumn(name="id_cliente", referencedColumnName="id")
     */
    private $cliente;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }



    /**
     * Set cliente
     *
     * @param \Lumen\AppBundle\Entity\Cliente $cliente
     *
     * @return SolicitudDeServicios
     */
    public function setCliente($cliente)
    {
        $this->cliente = $cliente;

        return $this;
    }

    /**
     * Get cliente
     *
     * @return \Lumen\AppBundle\Entity\Cliente
     */
    public function getCliente()
    {
        return $this->cliente;
    }




}

