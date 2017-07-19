<?php

namespace Lumen\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoMuestra
 *
 * @ORM\Table(name="tipo_muestra")
 * @ORM\Entity(repositoryClass="Lumen\AppBundle\Repository\TipoMuestraRepository")
 */
class TipoMuestra
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
     * @ORM\OneToMany(targetEntity="Lumen\AppBundle\Entity\Muestra", mappedBy="tipoMuestra")
     *
     */
    private $muestra;


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
     * @return TipoMuestra
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
     * @return TipoMuestra
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
        $this->Muestra = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add muestra
     *
     * @param \Lumen\AppBundle\Entity\Muestra $muestra
     *
     * @return TipoMuestra
     */
    public function addMuestra(\Lumen\AppBundle\Entity\Muestra $muestra)
    {
        $muestra->setTipoMuestra($this);
        $this->Muestra[] = $muestra;

        return $this;
    }

    /**
     * Remove muestra
     *
     * @param \Lumen\AppBundle\Entity\Muestra $muestra
     */
    public function removeMuestra(\Lumen\AppBundle\Entity\Muestra $muestra)
    {
        $this->Muestra->removeElement($muestra);
    }

    /**
     * Get muestra
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMuestra()
    {
        return $this->Muestra;
    }

    /**
     * Get muestraArr
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMuestraArr()
    {
        return $this->Muestra->toArray();
    }


}

