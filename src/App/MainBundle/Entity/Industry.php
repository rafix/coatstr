<?php

namespace App\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Industry
 *
 * @ORM\Table(name="types_industry")
 * @ORM\Entity
 */
class Industry
{
    /**
     * @var string
     *
     * @ORM\Column(name="industry", type="string", length=250, nullable=false)
     */
    private $industry;

    /**
     * @var integer
     *
     * @ORM\Column(name="industry_id", type="integer")
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
    public function getIndustry()
    {
        return $this->industry;
    }

    /**
     * @param string $industry
     */
    public function setIndustry($industry)
    {
        $this->industry = $industry;
    }

    public function __toString()
    {
        return $this->industry;
    }


}
