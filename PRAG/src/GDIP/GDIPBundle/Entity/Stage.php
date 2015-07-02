<?php

namespace GDIP\GDIPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Stage
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GDIP\GDIPBundle\Entity\StageRepository")
 */
class Stage
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
     * @var integer
     *
     * @ORM\Column(name="places", type="integer")
     */
    private $nbPlaces;
	
	/**
	* @ORM\ManyToOne(targetEntity="Hopital", inversedBy="stages")
	* @ORM\JoinColumn(nullable=false)
	*/
	private $hopital;
	
	/**
	* @ORM\ManyToOne(targetEntity="Filiere")
	* @ORM\JoinColumn(nullable=false)
	*/
	private $filiere;

    /**
    * @ORM\OneToOne(targetEntity="Service")
    * @ORM\JoinColumn(referencedColumnName="id", nullable=false)
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
     * Set filiere
     *
     * @param \GDIP\GDIPBundle\Entity\Filiere $filiere
     * @return Stage
     */
    public function setFiliere(\GDIP\GDIPBundle\Entity\Filiere $filiere)
    {
        $this->filiere = $filiere;

        return $this;
    }

    /**
     * Get filiere
     *
     * @return \GDIP\GDIPBundle\Entity\Filiere 
     */
    public function getFiliere()
    {
        return $this->filiere;
    }

    /**
     * Set utilisateurs
     *
     * @param \GDIP\UserBundle\Entity\User $utilisateurs
     * @return Stage
     */
    public function setUtilisateurs(\GDIP\UserBundle\Entity\User $utilisateurs = null)
    {
        $this->utilisateurs = $utilisateurs;

        return $this;
    }

    /**
     * Get utilisateurs
     *
     * @return \GDIP\UserBundle\Entity\User 
     */
    public function getUtilisateurs()
    {
        return $this->utilisateurs;
    }

    /**
     * Set nbPlaces
     *
     * @param integer $nbPlaces
     * @return Stage
     */
    public function setNbPlaces($nbPlaces)
    {
        $this->nbPlaces = $nbPlaces;

        return $this;
    }

    /**
     * Get nbPlaces
     *
     * @return integer 
     */
    public function getNbPlaces()
    {
        return $this->nbPlaces;
    }

    /**
     * Set service
     *
     * @param \GDIP\GDIPBundle\Entity\Service $service
     * @return Stage
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

    /**
     * Set hopital
     *
     * @param \GDIP\GDIPBundle\Entity\Hopital $hopital
     * @return Stage
     */
    public function setHopital(\GDIP\GDIPBundle\Entity\Hopital $hopital)
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
}
