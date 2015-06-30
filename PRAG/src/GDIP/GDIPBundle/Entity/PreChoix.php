<?php

namespace GDIP\GDIPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PreChoix
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GDIP\GDIPBundle\Entity\PreChoixRepository")
 */
class PreChoix
{

    /**
     * @var integer
     *
     * @ORM\Column(name="position", type="integer")
     */
    private $position;
	
	/**
     * @var integer
     *
     * @ORM\Column(name="admisProd", type="boolean", options={"default":false})
     */
    private $admisProb;

    /**
     * @var integer
     *
     * @ORM\Column(name="traite", type="boolean", options={"default":false})
     */
    private $traite;
	
	/**
	 * @ORM\ManyToOne(targetEntity="Stage")
	 * @ORM\JoinColumn(nullable=true)
	 * @ORM\Id
	 */
	private $stage;
	
	/**
     * @ORM\ManyToOne(targetEntity="GDIP\UserBundle\Entity\User", inversedBy="listePreChoix")
     * @ORM\JoinColumn(name="id_user", referencedColumnName="idUser")
	 * @ORM\Id
    */
    private $utilisateur;
	
	


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
     * Set position
     *
     * @param integer $position
     * @return PreChoix
     */
    public function setPosition($position)
    {
        $this->position = $position;

        return $this;
    }

    /**
     * Get position
     *
     * @return integer 
     */
    public function getPosition()
    {
        return $this->position;
    }

    /**
     * Set admisProb
     *
     * @param boolean $admisProb
     * @return PreChoix
     */
    public function setAdmisProb($admisProb)
    {
        $this->admisProb = $admisProb;

        return $this;
    }

    /**
     * Get admisProb
     *
     * @return boolean 
     */
    public function getAdmisProb()
    {
        return $this->admisProb;
    }

    /**
     * Set stage
     *
     * @param \GDIP\GDIPBundle\Entity\Stage $stage
     * @return PreChoix
     */
    public function setStage(\GDIP\GDIPBundle\Entity\Stage $stage)
    {
        $this->stage = $stage;

        return $this;
    }

    /**
     * Get stage
     *
     * @return \GDIP\GDIPBundle\Entity\Stage 
     */
    public function getStage()
    {
        return $this->stage;
    }

    /**
     * Set utilisateur
     *
     * @param \GDIP\UserBundle\Entity\User $utilisateur
     * @return PreChoix
     */
    public function setUtilisateur(\GDIP\UserBundle\Entity\User $utilisateur)
    {
        $this->utilisateur = $utilisateur;

        return $this;
    }

    /**
     * Get utilisateur
     *
     * @return \GDIP\UserBundle\Entity\User 
     */
    public function getUtilisateur()
    {
        return $this->utilisateur;
    }

    /**
     * Set traite
     *
     * @param boolean $traite
     * @return PreChoix
     */
    public function setTraite($traite)
    {
        $this->traite = $traite;

        return $this;
    }

    /**
     * Get traite
     *
     * @return boolean 
     */
    public function getTraite()
    {
        return $this->traite;
    }
}
