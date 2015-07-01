<?php

namespace GDIP\GDIPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Domaine
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GDIP\GDIPBundle\Entity\DomaineRepository")
 */
class Domaine
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
     * @ORM\Column(name="libelleDomaine", type="string", length=255)
     */
    private $libelleDomaine;
	
	/**
	 * @ORM\ManyToMany(targetEntity="Hopital")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $hopitaux;

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
     * Set libelleDomaine
     *
     * @param string $libelleDomaine
     * @return Domaine
     */
    public function setLibelleDomaine($libelleDomaine)
    {
        $this->libelleDomaine = $libelleDomaine;

        return $this;
    }

    /**
     * Get libelleDomaine
     *
     * @return string 
     */
    public function getLibelleDomaine()
    {
        return $this->libelleDomaine;
    }
    
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->hopitaux = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add hopitaux
     *
     * @param \GDIP\GDIPBundle\Entity\Hopital $hopitaux
     * @return Domaine
     */
    public function addHopitaux(\GDIP\GDIPBundle\Entity\Hopital $hopitaux)
    {
        $this->hopitaux[] = $hopitaux;

        return $this;
    }

    /**
     * Remove hopitaux
     *
     * @param \GDIP\GDIPBundle\Entity\Hopital $hopitaux
     */
    public function removeHopitaux(\GDIP\GDIPBundle\Entity\Hopital $hopitaux)
    {
        $this->hopitaux->removeElement($hopitaux);
    }

    /**
     * Get hopitaux
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getHopitaux()
    {
        return $this->hopitaux;
    }
}
