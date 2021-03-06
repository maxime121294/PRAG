<?php

namespace GDIP\GDIPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Service
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GDIP\GDIPBundle\Entity\ServiceRepository")
 */
class Service
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
     * @ORM\Column(name="libelleService", type="string", length=255)
     */
    private $libelleService;
	
	/**
	 * @ORM\ManyToOne(targetEntity="Domaine")
	 * @ORM\JoinColumn(nullable=false)
	 */
	private $domaine;


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
     * Set libelleService
     *
     * @param string $libelleService
     * @return Service
     */
    public function setLibelleService($libelleService)
    {
        $this->libelleService = $libelleService;

        return $this;
    }

    /**
     * Get libelleService
     *
     * @return string 
     */
    public function getLibelleService()
    {
        return $this->libelleService;
    }

    /**
     * Set categorie
     *
     * @param string $categorie
     * @return Service
     */
    public function setCategorie($categorie)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return string 
     */
    public function getCategorie()
    {
        return $this->categorie;
    }

    /**
     * Set domaine
     *
     * @param \GDIP\GDIPBundle\Entity\Domaine $domaine
     * @return Service
     */
    public function setDomaine(\GDIP\GDIPBundle\Entity\Domaine $domaine)
    {
        $this->domaine = $domaine;

        return $this;
    }

    /**
     * Get domaine
     *
     * @return \GDIP\GDIPBundle\Entity\Domaine 
     */
    public function getDomaine()
    {
        return $this->domaine;
    }
}
