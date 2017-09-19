<?php

namespace Lumen\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Muestra
 *
 * @ORM\Table(name="muestra")
 * @ORM\Entity(repositoryClass="Lumen\AppBundle\Repository\MuestraRepository")
 */
class Muestra
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
     * @ORM\Column(name="codigo", type="string", length=255, unique=true)
     */
    private $codigo;

    /**
     * @var \stdClass
     *
     * @ORM\Column(name="SolicitudDeServicio", type="object")
     */
    private $solicitudDeServicio;

    /**
     * @var string
     *
     * @ORM\Column(name="fechaIngreso", type="string", length=255)
     */
    private $fechaIngreso;

    /**
     * @var string
     *
     * @ORM\Column(name="FechaToma", type="string", length=255)
     */
    private $fechaToma;

    /**
     * @var string
     *
     * @ORM\Column(name="HoraToma", type="string", length=255)
     */
    private $horaToma;

    /**
     * @var string
     *
     * @ORM\Column(name="PH", type="string", length=255, nullable=true)
     */
    private $pH;

    /**
     * @var string
     *
     * @ORM\Column(name="temperatura", type="string", length=255, nullable=true)
     */
    private $temperatura;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoRecipiente", type="string", length=255, nullable=true)
     */
    private $tipoRecipiente;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoMuestra", type="string", length=255, nullable=true)
     */
    private $tipoMuestra;

    /**
     * @var string
     *
     * @ORM\Column(name="tipoMuestreo", type="string", length=255, nullable=true)
     */
    private $tipoMuestreo;



    /**
     * @ORM\OneToMany(targetEntity="Lumen\AppBundle\Entity\DetalleMuestra", mappedBy="muestra")
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
     * Set codigo
     *
     * @param string $codigo
     *
     * @return Muestra
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set solicitudDeServicio
     *
     * @param \stdClass $solicitudDeServicio
     *
     * @return Muestra
     */
    public function setSolicitudDeServicio($solicitudDeServicio)
    {
        $this->solicitudDeServicio = $solicitudDeServicio;

        return $this;
    }

    /**
     * Get solicitudDeServicio
     *
     * @return \stdClass
     */
    public function getSolicitudDeServicio()
    {
        return $this->solicitudDeServicio;
    }

    /**
     * Set fechaIngreso
     *
     * @param string $fechaIngreso
     *
     * @return Muestra
     */
    public function setFechaIngreso($fechaIngreso)
    {
        $this->fechaIngreso = $fechaIngreso;

        return $this;
    }

    /**
     * Get fechaIngreso
     *
     * @return string
     */
    public function getFechaIngreso()
    {
        return $this->fechaIngreso;
    }

    /**
     * Set fechaToma
     *
     * @param string $fechaToma
     *
     * @return Muestra
     */
    public function setFechaToma($fechaToma)
    {
        $this->fechaToma = $fechaToma;

        return $this;
    }

    /**
     * Get fechaToma
     *
     * @return string
     */
    public function getFechaToma()
    {
        return $this->fechaToma;
    }

    /**
     * Set horaToma
     *
     * @param string $horaToma
     *
     * @return Muestra
     */
    public function setHoraToma($horaToma)
    {
        $this->horaToma = $horaToma;

        return $this;
    }

    /**
     * Get horaToma
     *
     * @return string
     */
    public function getHoraToma()
    {
        return $this->horaToma;
    }

    /**
     * Set pH
     *
     * @param string $pH
     *
     * @return Muestra
     */
    public function setPH($pH)
    {
        $this->pH = $pH;

        return $this;
    }

    /**
     * Get pH
     *
     * @return string
     */
    public function getPH()
    {
        return $this->pH;
    }

    /**
     * Set temperatura
     *
     * @param string $temperatura
     *
     * @return Muestra
     */
    public function setTemperatura($temperatura)
    {
        $this->temperatura = $temperatura;

        return $this;
    }

    /**
     * Get temperatura
     *
     * @return string
     */
    public function getTemperatura()
    {
        return $this->temperatura;
    }

    /**
     * Set tipoRecipiente
     *
     * @param string $tipoRecipiente
     *
     * @return Muestra
     */
    public function setTipoRecipiente($tipoRecipiente)
    {
        $this->tipoRecipiente = $tipoRecipiente;

        return $this;
    }

    /**
     * Get tipoRecipiente
     *
     * @return string
     */
    public function getTipoRecipiente()
    {
        return $this->tipoRecipiente;
    }

    /**
     * Set tipoMuestra
     *
     * @param string $tipoMuestra
     *
     * @return Muestra
     */
    public function setTipoMuestra($tipoMuestra)
    {
        $this->tipoMuestra = $tipoMuestra;

        return $this;
    }

    /**
     * Get tipoMuestra
     *
     * @return string
     */
    public function getTipoMuestra()
    {
        return $this->tipoMuestra;
    }



    /**
     * Set tipoMuestreo
     *
     * @param string $tipoMuesteo
     *
     * @return Muestra
     */
    public function setTipoMuestreo($tipoMuestreo)
    {
        $this->tipoMuestreo = $tipoMuestreo;

        return $this;
    }

    /**
     * Get tipoMuestreo
     *
     * @return string
     */
    public function getTipoMuestreo()
    {
        return $this->tipoMuestreo;
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

