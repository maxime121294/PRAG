<?php

namespace GDIP\GDIPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hopital
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GDIP\GDIPBundle\Entity\HopitalRepository")
 */
class Hopital
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="libelleHopital", type="string", length=255)
     */
    private $libelleHopital;

    /**
     * @var string
     *
     * @ORM\Column(name="lieuHopital", type="string", length=255)
     */
    private $lieuHopital;

    /**
     * @var integer
     *
     * @ORM\Column(name="deptHopital", type="smallint")
     */
    private $deptHopital;
	
	/**
     * @ORM\ManyToMany(targetEntity="Service")
     */
    private $services;

    /**
    * @ORM\OneToMany(targetEntity="Stage", mappedBy="hopital")
    */
    private $stages;

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set libelleHopital
     *
     * @param string $libelleHopital
     * @return Hopital
     */
    public function setLibelleHopital($libelleHopital)
    {
        $this->libelleHopital = $libelleHopital;

        return $this;
    }

    /**
     * Get libelleHopital
     *
     * @return string 
     */
    public function getLibelleHopital()
    {
        return $this->libelleHopital;
    }

    /**
     * Set lieuHopital
     *
     * @param string $lieuHopital
     * @return Hopital
     */
    public function setLieuHopital($lieuHopital)
    {
        $this->lieuHopital = $lieuHopital;

        return $this;
    }

    /**
     * Get lieuHopital
     *
     * @return string 
     */
    public function getLieuHopital()
    {
        return $this->lieuHopital;
    }

    /**
     * Set deptHopital
     *
     * @param integer $deptHopital
     * @return Hopital
     */
    public function setDeptHopital($deptHopital)
    {
        $this->deptHopital = $deptHopital;

        return $this;
    }

    /**
     * Get deptHopital
     *
     * @return integer 
     */
    public function getDeptHopital()
    {
        return $this->deptHopital;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->services = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add services
     *
     * @param \GDIP\GDIPBundle\Entity\Service $services
     * @return Hopital
     */
    public function addService(\GDIP\GDIPBundle\Entity\Service $services)
    {
        $this->services[] = $services;

        return $this;
    }

    /**
     * Remove services
     *
     * @param \GDIP\GDIPBundle\Entity\Service $services
     */
    public function removeService(\GDIP\GDIPBundle\Entity\Service $services)
    {
        $this->services->removeElement($services);
    }

    /**
     * Get services
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getServices()
    {
        return $this->services;
    }

    /**
     * Add stages
     *
     * @param \GDIP\GDIPBundle\Entity\Stage $stages
     * @return Hopital
     */
    public function addStage(\GDIP\GDIPBundle\Entity\Stage $stages)
    {
        $this->stages[] = $stages;

        return $this;
    }

    /**
     * Remove stages
     *
     * @param \GDIP\GDIPBundle\Entity\Stage $stages
     */
    public function removeStage(\GDIP\GDIPBundle\Entity\Stage $stages)
    {
        $this->stages->removeElement($stages);
    }

    /**
     * Get stages
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getStages()
    {
        return $this->stages;
    }
}
