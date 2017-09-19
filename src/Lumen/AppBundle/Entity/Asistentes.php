<?php

namespace Lumen\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asistentes
 *
 * @ORM\Table(name="asistentes")
 * @ORM\Entity(repositoryClass="Lumen\AppBundle\Repository\AsistentesRepository")
 */
class Asistentes
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido", type="string", length=100, nullable=false)
     */
    private $apellido;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=100, nullable=true)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=100, nullable=false)
     */
    private $email;



    /**
     * @var string
     *
     * @ORM\Column(name="clave", type="string", length=100, nullable=false)
     */
    private $clave;




    /**
     * @ORM\ManyToOne(targetEntity="TipoAsistentes", inversedBy="asistente")
     * @ORM\JoinColumn(name="id_tipoAsistentes", referencedColumnName="id")
     */
    private $tipoAsistente;




    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Cliente
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
     * Set apellido
     *
     * @param string $apellido
     *
     * @return Cliente
     */
    public function setApellido($apellido)
    {
        $this->apellido = $apellido;

        return $this;
    }

    /**
     * Get apellido
     *
     * @return string
     */
    public function getApellido()
    {
        return $this->apellido;
    }

    /**
     * Set telefono
     *
     * @param string $telefono
     *
     * @return Cliente
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
     * Set email
     *
     * @param string $email
     *
     * @return Cliente
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
     * Set clave
     *
     * @param string $clave
     *
     * @return Cliente
     */
    public function setClave($clave)
    {
        $this->clave = $clave;

        return $this;
    }

    /**
     * Get clave
     *
     * @return string
     */
    public function getClave()
    {
        return $this->clave;
    }




    /**
     * Set tipoAsistente
     *
     * @param \Lumen\AppBundle\Entity\TipoAsistentes $tipoAsistente
     *
     * @return Asistentes
     */
    public function setTipoAsistentes($tipoAsistente)
    {
        $this->tipoAsistente = $tipoAsistente;

        return $this;
    }

    /**
     * Get tipoAsistente
     *
     * @return \Lumen\AppBundle\Entity\TipoAsistentes
     */
    public function getTipoAsistentes()
    {
        return $this->tipoAsistente;
    }


}