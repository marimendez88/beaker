<?php

namespace Lumen\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Analisis
 *
 * @ORM\Table(name="analisis")
 * @ORM\Entity(repositoryClass="Lumen\AppBundle\Repository\AnalisisRepository")
 */
class Analisis
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
     *
     * @ORM\OneToMany(targetEntity="Lumen\AppBundle\Entity\CategoriaAnalisis", mappedBy="analisis_categoria")
     */
    private $categoriaAnalisis;


    /**
     * @ORM\OneToMany(targetEntity="Lumen\AppBundle\Entity\DetalleMuestra", mappedBy="analisis")
     *
     */
    private $detalleMuestra;


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
     * @return Analisis
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
     * @param mixed  @categoriaAnalisis
     */
    public function setCategoriaAnalisis($categoriaAnalisis)
    {
        $this->categoriaAnalisis = $categoriaAnalisis;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategoriaAnalisisToArray()
    {
        return $this->categoriaAnalisis->toArray();
    }
    /**
     * @return mixed
     */
    public function getCategoriaAnalisis()
    {
        return $this->categoriaAnalisis;
    }


    /**
     * @return mixed
     */
    public function getDetalleMuestra()
    {
        return $this->detalleMuestra;
    }

    /**
     * @return mixed
     */
    public function getDetalleMuestraToArray()
    {
        return $this->detalleMuestra->toArray();
    }

    /**
     * @param mixed $detalleMuestra
     */
    public function setDetalleMuestra($detalleMuestra)
    {
        $this->detalleMuestra = $detalleMuestra;
    }



}

