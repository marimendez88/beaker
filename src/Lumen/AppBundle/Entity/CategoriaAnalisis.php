<?php

namespace Lumen\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoriaAnalisis
 *
 * @ORM\Table(name="categoria_analisis")
 * @ORM\Entity(repositoryClass="Lumen\AppBundle\Repository\CategoriaAnalisisRepository")
 */
class CategoriaAnalisis
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
     * @ORM\ManyToOne(targetEntity="Lumen\AppBundle\Entity\Analisis", inversedBy="analisis")
     * @ORM\JoinColumn(name="id_analisis", referencedColumnName="id")
     */
    private $analisis;

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
     * @return CategoriaAnalisis
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
     * @param mixed $analisis
     */
    public function setAnalisis($analisis)
    {
        $this->analisis = $analisis;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getAnalisis()
    {
        return $this->analisis;
    }

    /**
     * @return mixed
     */
    public function getAnalisisToArray()
    {
        return $this->analisis->toArray();
    }


}

