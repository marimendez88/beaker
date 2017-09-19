<?php

namespace Lumen\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DetalleMuestra
 *
 * @ORM\Table(name="detalle_muestra")
 * @ORM\Entity(repositoryClass="Lumen\AppBundle\Repository\DetalleMuestraRepository")
 */
class DetalleMuestra
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
     * @ORM\ManyToOne(targetEntity="Lumen\AppBundle\Entity\Muestra", inversedBy="muestra")
     * @ORM\JoinColumn(name="id_muestra", referencedColumnName="id")
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
     * Set analisis
     *
     * @param \Lumen\AppBundle\Entity\Analisis $analisis
     *
     * @return DetalleMuestra
     */
    public function setAnalisis($analisis)
    {
        $this->analisis = $analisis;

        return $this;
    }

    /**
     * Get analisis
     *
     * @return \Lumen\AppBundle\Entity\Analisis $analisis
     */
    public function getAnalisis()
    {
        return $this->analisis;
    }


    /**
     * Set muestra
     *
     * @param \Lumen\AppBundle\Entity\Muestra $muestra
     *
     * @return DetalleMuestra
     */
    public function setMuestra($muestra)
    {
        $this->muestra = $muestra;

        return $this;
    }

    /**
     * Get Muestra
     *
     * @return \Lumen\AppBundle\Entity\Muestra
     */
    public function getMuestra()
    {
        return $this->muestra;
    }



}

