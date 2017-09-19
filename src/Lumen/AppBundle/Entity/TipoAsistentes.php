<?php

namespace Lumen\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoAsistentes
 *
 * @ORM\Table(name="tipo_asistentes")
 * @ORM\Entity(repositoryClass="Lumen\AppBundle\Repository\TipoAsistentesRepository")
 */
class TipoAsistentes
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
     * @ORM\Column(name="salarioHora", type="string", length=255)
     */
    private $salarioHora;


    /**
     * @ORM\OneToMany(targetEntity="Asistentes", mappedBy="asistente")
     *
     */
    private $asistente;

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
     * @return TipoAsistentes
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
     * Set salarioHora
     *
     * @param string $salarioHora
     *
     * @return TipoAsistentes
     */
    public function setSalarioHora($salarioHora)
    {
        $this->salarioHora = $salarioHora;

        return $this;
    }

    /**
     * Get salarioHora
     *
     * @return string
     */
    public function getSalarioHora()
    {
        return $this->salarioHora;
    }





    /**
     * @return mixed
     */
    public function getAsistente()
    {
        return $this->asistente;
    }

    /**
     * @return mixed
     */
    public function getAsistenteToArray()
    {
        return $this->asistente->toArray();
    }

    /**
     * @param mixed $asistente
     */
    public function setAsistente($asistente)
    {
        $this->asistente = $asistente;
    }




}

