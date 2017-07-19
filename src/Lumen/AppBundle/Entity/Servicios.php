<?php

namespace Lumen\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Servicios
 *
 * @ORM\Table(name="servicios")
 * @ORM\Entity(repositoryClass="Lumen\AppBundle\Repository\ServiciosRepository")
 */
class Servicios
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
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255)
     */
    private $nombre;

    /**
     * @var int
     *
     * @ORM\Column(name="precio", type="integer")
     */
    private $precio;

    /**
     * @var string
     * @ORM\ManyToOne(targetEntity="Lumen\AppBundle\Entity\CategoriaServicios", inversedBy="servicios")
     * @ORM\JoinColumn(name="id_categoriaservicios", referencedColumnName="id")
     */
    private $categoriaServicios;


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
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Servicios
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
     * Set precio
     *
     * @param integer $precio
     *
     * @return Servicios
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return int
     */
    public function getPrecio()
    {
        return $this->precio;
    }





    /**
     * Set categoriaServicios
     *
     * @param \Lumen\AppBundle\Entity\CategoriaServicios categoriaServicios
     *
     * @return Muestra
     */
    public function setCategoriaServicios($categoriaServicios)
    {
        $this->categoriaServicios = categoriaServicios;

        return $this;
    }

    /**
     * Get categoriaServicios
     *
     * @return \Lumen\AppBundle\Entity\CategoriaServicios
     */
    public function getCategoriaServicios()
    {
        return $this->categoriaServicios;
    }



}

