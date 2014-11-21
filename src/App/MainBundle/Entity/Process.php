<?php

namespace App\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Process
 *
 * @ORM\Table(name="types_process")
 * @ORM\Entity
 */
class Process
{
    /**
     * @var string
     *
     * @ORM\Column(name="process", type="string", length=250, nullable=false)
     */
    private $process;

    /**
     * @var integer
     *
     * @ORM\Column(name="process_id", type="integer")
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
    public function getProcess()
    {
        return $this->process;
    }

    /**
     * @param string $process
     */
    public function setProcess($process)
    {
        $this->process = $process;
    }

    public function __toString()
    {
        return $this->process;
    }

}
