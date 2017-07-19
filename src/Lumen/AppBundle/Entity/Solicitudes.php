<?php

namespace Lumen\AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Solicitudes
 *
 * @ORM\Table(name="solicitudes")
 * @ORM\Entity(repositoryClass="Lumen\AppBundle\Repository\SolicitudesRepository")
 */
class Solicitudes
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
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}

