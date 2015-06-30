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
	 * @ORM\ManyToOne(targetEntity="Hopital")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $hopital;
	


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
     * Set hopital
     *
     * @param \GDIP\GDIPBundle\Entity\Hopital $hopital
     * @return Domaine
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
