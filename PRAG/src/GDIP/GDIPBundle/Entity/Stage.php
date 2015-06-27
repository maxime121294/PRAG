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
	* @ORM\ManyToOne(targetEntity="Hopital")
	* @ORM\JoinColumn(nullable=false)
	*/
	private $hopital;
	
	/**
	* @ORM\ManyToOne(targetEntity="Poste")
	* @ORM\JoinColumn(nullable=false)
	*/
	private $poste;
	
	/**
	* @ORM\ManyToOne(targetEntity="Filiere")
	* @ORM\JoinColumn(nullable=false)
	*/
	private $filiere;
	
	/**
	 * @ORM\ManyToOne(targetEntity="GDIP\UserBundle\Entity\User", inversedBy="stages")
	 * @ORM\JoinColumn(name="id_user", referencedColumnName="idUser")
	 */
	private $utilisateurs;


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

    /**
     * Set poste
     *
     * @param \GDIP\GDIPBundle\Entity\Poste $poste
     * @return Stage
     */
    public function setPoste(\GDIP\GDIPBundle\Entity\Poste $poste)
    {
        $this->poste = $poste;

        return $this;
    }

    /**
     * Get poste
     *
     * @return \GDIP\GDIPBundle\Entity\Poste 
     */
    public function getPoste()
    {
        return $this->poste;
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
}
