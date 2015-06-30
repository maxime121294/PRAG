<?php

namespace GDIP\GDIPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Poste
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GDIP\GDIPBundle\Entity\PosteRepository")
 */
class Poste
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
     * @ORM\Column(name="libellePoste", type="string", length=255)
     */
    private $libellePoste;
	
	/**
	* @ORM\ManyToOne(targetEntity="Hopital")
	* @ORM\JoinColumn(nullable=true)
	*/
	private $hopital;
	
	/**
	* @ORM\ManyToOne(targetEntity="Service")
	* @ORM\JoinColumn(nullable=true)
	*/
	private $service;


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
     * Set libellePoste
     *
     * @param string $libellePoste
     * @return Poste
     */
    public function setLibellePoste($libellePoste)
    {
        $this->libellePoste = $libellePoste;

        return $this;
    }

    /**
     * Get libellePoste
     *
     * @return string 
     */
    public function getLibellePoste()
    {
        return $this->libellePoste;
    }

    /**
     * Set hopital
     *
     * @param \GDIP\GDIPBundle\Entity\Hopital $hopital
     * @return Poste
     */
    public function setHopital(\GDIP\GDIPBundle\Entity\Hopital $hopital = null)
    {
        $this->hopital = $hopital;

        return $this;
    }

    /**
     * Get hopital
     *
     * @return \GDIP\GDIPBundle\Entity\Hopital 
     */
    public function getHopital()
    {
        return $this->hopital;
    }

    /**
     * Set service
     *
     * @param \GDIP\GDIPBundle\Entity\Service $service
     * @return Poste
     */
    public function setService(\GDIP\GDIPBundle\Entity\Service $service = null)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return \GDIP\GDIPBundle\Entity\Service 
     */
    public function getService()
    {
        return $this->service;
    }
}
