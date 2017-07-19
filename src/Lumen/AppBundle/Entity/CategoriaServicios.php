<?php

namespace Lumen\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoriaServicios
 *
 * @ORM\Table(name="categoria_servicios")
 * @ORM\Entity(repositoryClass="Lumen\AppBundle\Repository\CategoriaServiciosRepository")
 */
class CategoriaServicios
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
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255, nullable=true)
     */
    private $descripcion;


    /**
     * @ORM\OneToMany(targetEntity="Lumen\AppBundle\Entity\Servicios", mappedBy="categoriaServicios")
     *
     */
    private $servicios;


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
     * @return CategoriaServicios
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
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return CategoriaServicios
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->Servicios = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add muestra
     *
     * @param \Lumen\AppBundle\Entity\Servicios servicios
     *
     * @return CategoriaServicios
     */
    public function addServicios(\Lumen\AppBundle\Entity\Servicios $servicios)
    {
        $servicios->setCategoriaServicios($this);
        $this->Servicios[] = $servicios;

        return $this;
    }

    /**
     * Remove muestra
     *
     * @param \Lumen\AppBundle\Entity\Servicios $servicios
     */
    public function removeServicios(\Lumen\AppBundle\Entity\Servicios $servicios)
    {
        $this->Servicios->removeElement($servicios);
    }

    /**
     * Get muestra
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getServicios()
    {
        return $this->Servicios;
    }

    /**
     * Get muestraArr
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getServiciosArr()
    {
        return $this->Servicios->toArray();
    }
}

