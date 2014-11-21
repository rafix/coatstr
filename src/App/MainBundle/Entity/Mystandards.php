<?php

namespace App\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Mystandards
 *
 * @ORM\Table(name="mystandards")
 * @ORM\Entity
 */
class Mystandards
{
    /**
     * @var string
     *
     * @ORM\Column(name="guid", type="string", length=100, nullable=false)
     */
    private $guid;

    /**
     * @var integer
     *
     * @ORM\Column(name="standard_id", type="integer", nullable=false)
     */
    private $standardId;

    /**
     * @var integer
     *
     * @ORM\Column(name="mystandard_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $mystandardId;


}
