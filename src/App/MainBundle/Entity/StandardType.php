<?php

namespace App\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * StandardType
 *
 * @ORM\Table(name="types_standard")
 * @ORM\Entity
 */
class StandardType
{
    /**
     * @var string
     *
     * @ORM\Column(name="standardtype", type="string", length=250, nullable=false)
     */
    private $type;

    /**
     * @var integer
     *
     * @ORM\Column(name="standardtype_id", type="integer")
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
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    public function __toString()
    {
        return $this->type;
    }
}
