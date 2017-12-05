<?php

namespace Lumen\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cotizacion
 *
 * @ORM\Table(name="Cotizacion")
 * @ORM\Entity
 */
class Cotizacion
{
     /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
      * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="string", length=100, nullable=false)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=100, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="empresa", type="string", length=100, nullable=false)
     */
    private $empresa;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=100, nullable=false)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="detalle_cotzacion", type="string", length=300, nullable=false)
     */
    private $detalleCotizacion;

    /**
     * @var string
     *
     * @ORM\Column(name="estado", type="string", length=100, nullable=false)
     */
    private $estado;

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

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
     * Set fecha
     *
     * @param \DateTime $fecha
     *
     * @return Cotizacion
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Cotizacion
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set empresa
     *
     * @param string $empresa
     *
     * @return Cotizacion
     */
    public function setEmpresa($empresa)
    {
        $this->empresa = $empresa;

        return $this;
    }

    /**
     * Get empresa
     *
     * @return string
     */
    public function getEmpresa()
    {
        return $this->empresa;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return Cotizacion
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Cotizacion
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set detalleCotizacion
     *
     * @param string $detalleCotizacion
     *
     * @return Cotizacion
     */
    public function setDetalleCotizacion($detalleCotizacion)
    {
        $this->detalleCotizacion = $detalleCotizacion;

        return $this;
    }

    /**
     * Get detalleCotizacion
     *
     * @return string
     */
    public function getDetalleCotizacion()
    {
        return $this->detalleCotizacion;
    }

    /**
     * Set estado
     *
     * @param string $estado
     *
     * @return Cotizacion
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    /**
     * Get estado
     *
     * @return string
     */
    public function getEstado()
    {
        return $this->estado;
    }
}

