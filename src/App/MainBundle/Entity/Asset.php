<?php

namespace App\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Asset
 *
 * @ORM\Table(name="types_asset")
 * @ORM\Entity
 */
class Asset
{
    /**
     * @var string
     *
     * @ORM\Column(name="asset", type="string", length=250, nullable=false)
     */
    private $asset;

    /**
     * @var integer
     *
     * @ORM\Column(name="asset_id", type="integer")
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
    public function getAsset()
    {
        return $this->asset;
    }

    /**
     * @param string $asset
     */
    public function setAsset($asset)
    {
        $this->asset = $asset;
    }

    public function __toString()
    {
        return $this->asset;
    }
}
