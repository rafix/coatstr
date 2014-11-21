<?php

namespace App\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Environment
 *
 * @ORM\Table(name="types_environment")
 * @ORM\Entity
 */
class Environment
{
    /**
     * @var string
     *
     * @ORM\Column(name="environment", type="string", length=250, nullable=false)
     */
    private $environment;

    /**
     * @var integer
     *
     * @ORM\Column(name="environment_id", type="integer")
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
    public function getEnvironment()
    {
        return $this->environment;
    }

    /**
     * @param string $environment
     */
    public function setEnvironment($environment)
    {
        $this->environment = $environment;
    }

    public function __toString()
    {
        return $this->environment;
    }
}
