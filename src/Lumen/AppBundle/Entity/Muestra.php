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
     * @ORM\ManyToOne(targetEntity="Lumen\AppBundle\Entity\TipoMuestra", inversedBy="muestra")
     * @ORM\JoinColumn(name="id_tipomuestra", referencedColumnName="id")
     */
    private $tipoMuestra;




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
     * Set tipoMuestra
     *
     * @param \Lumen\AppBundle\Entity\TipoMuestra $tipoMuestra
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
     * @return \Lumen\AppBundle\Entity\TipoMuestra
     */
    public function getTipoMuestra()
    {
        return $this->tipoMuestra;
    }



}

