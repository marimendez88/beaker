<?php

namespace Lumen\AppBundle\Entity;

/**
 * SolicitudDeServicios
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
    * @ORM\ManyToOne(targetEntity="Lumen\AppBundle\Entity\Analisis", inversedBy="analisis")
    * @ORM\JoinColumn(name="id_analisis", referencedColumnName="id")
    */
    private $analisis;
    
    /**
    * @ORM\ManyToOne(targetEntity="Lumen\AppBundle\Entity\Cliente", inversedBy="cliente")
    * @ORM\JoinColumn(name="id_cliente", referencedColumnName="id")
    */
    private $cliente;
    

    /**
     * @var string
     */
    private $fechaIngresoMuestra;

    /**
     * @var string
     */
    private $fechaTomaMuestra;

    /**
     * @var string
     */
    private $horaTomaMuestra;

    /**
     * @var int
     */
    private $pH;

    /**
     * @var int
     */
    private $temperatura;

    /**
     * @var string
     */
    private $tipoRecipiente;

     /**
    * @ORM\ManyToOne(targetEntity="Lumen\AppBundle\Entity\Muestra", inversedBy="muestra")
    * @ORM\JoinColumn(name="id_muestra", referencedColumnName="id")
    */
    private $tipoMuestra;

    /**
     * @var string
     */
    private $tipoMuestreo;

    /**
     * @var string
     */
    private $observaciones;


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
     * Set analisis
     *
     * @param \Lumen\AppBundle\Entity\Analisis $analisis
     *
     * @return SolicitudDeServicios
     */
    public function setAnalisis($analisis)
    {
        $this->analisis = $analisis;

        return $this;
    }

    /**
     * Get analisis
     *
     * @return \Lumen\AppBundle\Entity\Analisis
     */
    public function getAnalisis()
    {
        return $this->analisis;
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

    /**
     * Set fechaIngresoMuestra
     *
     * @param string $fechaIngresoMuestra
     *
     * @return SolicitudDeServicios
     */
    public function setFechaIngresoMuestra($fechaIngresoMuestra)
    {
        $this->fechaIngresoMuestra = $fechaIngresoMuestra;

        return $this;
    }

    /**
     * Get fechaIngresoMuestra
     *
     * @return string
     */
    public function getFechaIngresoMuestra()
    {
        return $this->fechaIngresoMuestra;
    }

    /**
     * Set fechaTomaMuestra
     *
     * @param string $fechaTomaMuestra
     *
     * @return SolicitudDeServicios
     */
    public function setFechaTomaMuestra($fechaTomaMuestra)
    {
        $this->fechaTomaMuestra = $fechaTomaMuestra;

        return $this;
    }

    /**
     * Get fechaTomaMuestra
     *
     * @return string
     */
    public function getFechaTomaMuestra()
    {
        return $this->fechaTomaMuestra;
    }

    /**
     * Set horaTomaMuestra
     *
     * @param string $horaTomaMuestra
     *
     * @return SolicitudDeServicios
     */
    public function setHoraTomaMuestra($horaTomaMuestra)
    {
        $this->horaTomaMuestra = $horaTomaMuestra;

        return $this;
    }

    /**
     * Get horaTomaMuestra
     *
     * @return string
     */
    public function getHoraTomaMuestra()
    {
        return $this->horaTomaMuestra;
    }

    /**
     * Set pH
     *
     * @param integer $pH
     *
     * @return SolicitudDeServicios
     */
    public function setPH($pH)
    {
        $this->pH = $pH;

        return $this;
    }

    /**
     * Get pH
     *
     * @return int
     */
    public function getPH()
    {
        return $this->pH;
    }

    /**
     * Set temperatura
     *
     * @param integer $temperatura
     *
     * @return SolicitudDeServicios
     */
    public function setTemperatura($temperatura)
    {
        $this->temperatura = $temperatura;

        return $this;
    }

    /**
     * Get temperatura
     *
     * @return int
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
     * @return SolicitudDeServicios
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
     * @param \Lumen\AppBundle\Entity\Muestra $tipoMuestra
     *
     * @return SolicitudDeServicios
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
     * @param string $tipoMuestreo
     *
     * @return SolicitudDeServicios
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
     * Set observaciones
     *
     * @param string $observaciones
     *
     * @return SolicitudDeServicios
     */
    public function setObservaciones($observaciones)
    {
        $this->observaciones = $observaciones;

        return $this;
    }

    /**
     * Get observaciones
     *
     * @return string
     */
    public function getObservaciones()
    {
        return $this->observaciones;
    }
}

