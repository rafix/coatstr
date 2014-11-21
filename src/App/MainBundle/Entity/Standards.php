<?php

namespace App\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Standards
 *
 * @ORM\Table(name="standards", indexes={@ORM\Index(name="organization", columns={"organization_id"})})
 * @ORM\Entity
 */
class Standards
{
    /**
     * @var integer
     *
     * @ORM\ManyToOne(targetEntity="App\MainBundle\Entity\Organization")
     * @ORM\JoinColumn(name="organization_id", referencedColumnName="organization_id")
     */
    private $organization;

    /**
     * @var string
     *
     * @ORM\Column(name="item_no", type="string", length=250, nullable=false)
     */
    private $itemNo;

    /**
     * @var string
     *
     * @ORM\Column(name="standard_no", type="string", length=250, nullable=false)
     */
    private $standardNo;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text", nullable=false)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="keywords", type="text", nullable=false)
     */
    private $keywords;

    /**
     * @var string
     *
     * @ORM\Column(name="abstract", type="text", nullable=false)
     */
    private $abstract;

    /**
     * @var string
     *
     * @ORM\Column(name="link", type="text", nullable=false)
     */
    private $link;

    /**
     * @var integer
     *
     * @ORM\Column(name="standard_id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $Id;

    /**
     * @ORM\ManyToMany(targetEntity="App\MainBundle\Entity\Asset")
     * @ORM\JoinTable(name="standards_assets",
     *      joinColumns={@ORM\JoinColumn(name="standard_id", referencedColumnName="standard_id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="asset_id", referencedColumnName="asset_id")}
     * )
     */
    private $assets;

    /**
     * @ORM\ManyToMany(targetEntity="App\MainBundle\Entity\Industry")
     * @ORM\JoinTable(name="standards_industries",
     *      joinColumns={@ORM\JoinColumn(name="standard_id", referencedColumnName="standard_id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="industry_id", referencedColumnName="industry_id")}
     * )
     */
    private $industries;

    /**
     * @ORM\ManyToMany(targetEntity="App\MainBundle\Entity\Environment")
     * @ORM\JoinTable(name="standards_environments",
     *      joinColumns={@ORM\JoinColumn(name="standard_id", referencedColumnName="standard_id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="environment_id", referencedColumnName="environment_id")}
     * )
     */
    private $environments;

    /**
     * @ORM\ManyToMany(targetEntity="App\MainBundle\Entity\Location")
     * @ORM\JoinTable(name="standards_location",
     *      joinColumns={@ORM\JoinColumn(name="standard_id", referencedColumnName="standard_id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="location_id", referencedColumnName="location_id")}
     * )
     */
    private $locations;

    /**
     * @ORM\ManyToMany(targetEntity="App\MainBundle\Entity\Process")
     * @ORM\JoinTable(name="standards_processes",
     *      joinColumns={@ORM\JoinColumn(name="standard_id", referencedColumnName="standard_id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="process_id", referencedColumnName="process_id")}
     * )
     */
    private $processes;

    /**
     * @ORM\ManyToMany(targetEntity="App\MainBundle\Entity\StandardType")
     * @ORM\JoinTable(name="standards_standards",
     *      joinColumns={@ORM\JoinColumn(name="standard_id", referencedColumnName="standard_id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="standardtype_id", referencedColumnName="standardtype_id")}
     * )
     */
    private $types;

    /**
     * @ORM\ManyToMany(targetEntity="App\MainBundle\Entity\Substrate")
     * @ORM\JoinTable(name="standards_substrates",
     *      joinColumns={@ORM\JoinColumn(name="standard_id", referencedColumnName="standard_id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="substrate_id", referencedColumnName="substrate_id")}
     * )
     */
    private $substrates;

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
    public function getAbstract()
    {
        return $this->abstract;
    }

    /**
     * @param string $abstract
     */
    public function setAbstract($abstract)
    {
        $this->abstract = $abstract;
    }

    /**
     * @return string
     */
    public function getItemNo()
    {
        return $this->itemNo;
    }

    /**
     * @param string $itemNo
     */
    public function setItemNo($itemNo)
    {
        $this->itemNo = $itemNo;
    }

    /**
     * @return string
     */
    public function getKeywords()
    {
        return $this->keywords;
    }

    /**
     * @param string $keywords
     */
    public function setKeywords($keywords)
    {
        $this->keywords = $keywords;
    }

    /**
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * @param string $link
     */
    public function setLink($link)
    {
        $this->link = $link;
    }

    /**
     * @return int
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * @param int $organization
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;
    }

    /**
     * @return string
     */
    public function getStandardNo()
    {
        return $this->standardNo;
    }

    /**
     * @param string $standardNo
     */
    public function setStandardNo($standardNo)
    {
        $this->standardNo = $standardNo;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->assets = new \Doctrine\Common\Collections\ArrayCollection();
        $this->industries = new \Doctrine\Common\Collections\ArrayCollection();
        $this->environments = new \Doctrine\Common\Collections\ArrayCollection();
        $this->locations = new \Doctrine\Common\Collections\ArrayCollection();
        $this->processes = new \Doctrine\Common\Collections\ArrayCollection();
        $this->types = new \Doctrine\Common\Collections\ArrayCollection();
        $this->substrates = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add assets
     *
     * @param \App\MainBundle\Entity\Asset $assets
     * @return Standards
     */
    public function addAsset(\App\MainBundle\Entity\Asset $assets)
    {
        $this->assets[] = $assets;

        return $this;
    }

    /**
     * Remove assets
     *
     * @param \App\MainBundle\Entity\Asset $assets
     */
    public function removeAsset(\App\MainBundle\Entity\Asset $assets)
    {
        $this->assets->removeElement($assets);
    }

    /**
     * Get assets
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAssets()
    {
        return $this->assets;
    }

    /**
     * Add industries
     *
     * @param \App\MainBundle\Entity\Industry $industries
     * @return Standards
     */
    public function addIndustry(\App\MainBundle\Entity\Industry $industries)
    {
        $this->industries[] = $industries;

        return $this;
    }

    /**
     * Remove industries
     *
     * @param \App\MainBundle\Entity\Industry $industries
     */
    public function removeIndustry(\App\MainBundle\Entity\Industry $industries)
    {
        $this->industries->removeElement($industries);
    }

    /**
     * Get industries
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getIndustries()
    {
        return $this->industries;
    }

    /**
     * Add environments
     *
     * @param \App\MainBundle\Entity\Environment $environments
     * @return Standards
     */
    public function addEnvironment(\App\MainBundle\Entity\Environment $environments)
    {
        $this->environments[] = $environments;

        return $this;
    }

    /**
     * Remove environments
     *
     * @param \App\MainBundle\Entity\Environment $environments
     */
    public function removeEnvironment(\App\MainBundle\Entity\Environment $environments)
    {
        $this->environments->removeElement($environments);
    }

    /**
     * Get environments
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getEnvironments()
    {
        return $this->environments;
    }

    /**
     * Add locations
     *
     * @param \App\MainBundle\Entity\Location $locations
     * @return Standards
     */
    public function addLocation(\App\MainBundle\Entity\Location $locations)
    {
        $this->locations[] = $locations;

        return $this;
    }

    /**
     * Remove locations
     *
     * @param \App\MainBundle\Entity\Location $locations
     */
    public function removeLocation(\App\MainBundle\Entity\Location $locations)
    {
        $this->locations->removeElement($locations);
    }

    /**
     * Get locations
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLocations()
    {
        return $this->locations;
    }

    /**
     * Add processes
     *
     * @param \App\MainBundle\Entity\Process $processes
     * @return Standards
     */
    public function addProcess(\App\MainBundle\Entity\Process $processes)
    {
        $this->processes[] = $processes;

        return $this;
    }

    /**
     * Remove processes
     *
     * @param \App\MainBundle\Entity\Process $processes
     */
    public function removeProcess(\App\MainBundle\Entity\Process $processes)
    {
        $this->processes->removeElement($processes);
    }

    /**
     * Get processes
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getProcesses()
    {
        return $this->processes;
    }

    /**
     * Add type
     *
     * @param \App\MainBundle\Entity\StandardType $type
     * @return Standards
     */
    public function addType(\App\MainBundle\Entity\StandardType $type)
    {
        $this->types[] = $type;

        return $this;
    }

    /**
     * Remove type
     *
     * @param \App\MainBundle\Entity\StandardType $type
     */
    public function removeType(\App\MainBundle\Entity\StandardType $type)
    {
        $this->types->removeElement($type);
    }

    /**
     * Get types
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * Add substrate
     *
     * @param \App\MainBundle\Entity\Substrate $substrate
     * @return Standards
     */
    public function addSubstrate(\App\MainBundle\Entity\Substrate $substrate)
    {
        $this->substrates[] = $substrate;

        return $this;
    }

    /**
     * Remove substrates
     *
     * @param \App\MainBundle\Entity\Substrate $substrate
     */
    public function removeSubstrate(\App\MainBundle\Entity\Substrate $substrate)
    {
        $this->substrates->removeElement($substrate);
    }

    /**
     * Get substrates
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getSubstrates()
    {
        return $this->substrates;
    }

    public function __toString()
    {
        return $this->standardNo;
    }
}
