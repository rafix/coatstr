<?php

namespace App\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Substrate
 *
 * @ORM\Table(name="types_substrate")
 * @ORM\Entity
 */
class Substrate
{
    /**
     * @var string
     *
     * @ORM\Column(name="substrate", type="string", length=250, nullable=false)
     */
    private $substrate;

    /**
     * @var integer
     *
     * @ORM\Column(name="substrate_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $Id;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->Id;
    }

    /**
     * @return string
     */
    public function getSubstrate()
    {
        return $this->substrate;
    }

    /**
     * @param string $substrate
     */
    public function setSubstrate($substrate)
    {
        $this->substrate = $substrate;
    }

    public function __toString()
    {
        return $this->substrate;
    }

}
