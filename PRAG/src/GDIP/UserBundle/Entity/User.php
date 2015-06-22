<?php

namespace GDIP\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GDIP\UserBundle\Entity\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="prenomMembre", type="string", length=255)
     */
    private $prenomMembre;

    /**
     * @var string
     *
     * @ORM\Column(name="nomMembre", type="string", length=255)
     */
    private $nomMembre;

    /**
     * @var integer
     *
     * @ORM\Column(name="rangMembre", type="integer")
     */
    private $rangMembre;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateReussiteMembre", type="date")
     */
    private $dateReussiteMembre;

    /**
     * @var integer
     *
     * @ORM\Column(name="nbSemestreValide", type="integer")
     */
    private $nbSemestreValide;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estAdherent", type="boolean")
     */
    private $estAdherent;


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
     * Set prenomMembre
     *
     * @param string $prenomMembre
     * @return User
     */
    public function setPrenomMembre($prenomMembre)
    {
        $this->prenomMembre = $prenomMembre;

        return $this;
    }

    /**
     * Get prenomMembre
     *
     * @return string 
     */
    public function getPrenomMembre()
    {
        return $this->prenomMembre;
    }

    /**
     * Set nomMembre
     *
     * @param string $nomMembre
     * @return User
     */
    public function setNomMembre($nomMembre)
    {
        $this->nomMembre = $nomMembre;

        return $this;
    }

    /**
     * Get nomMembre
     *
     * @return string 
     */
    public function getNomMembre()
    {
        return $this->nomMembre;
    }

    /**
     * Set rangMembre
     *
     * @param integer $rangMembre
     * @return User
     */
    public function setRangMembre($rangMembre)
    {
        $this->rangMembre = $rangMembre;

        return $this;
    }

    /**
     * Get rangMembre
     *
     * @return integer 
     */
    public function getRangMembre()
    {
        return $this->rangMembre;
    }

    /**
     * Set dateReussiteMembre
     *
     * @param \DateTime $dateReussiteMembre
     * @return User
     */
    public function setDateReussiteMembre($dateReussiteMembre)
    {
        $this->dateReussiteMembre = $dateReussiteMembre;

        return $this;
    }

    /**
     * Get dateReussiteMembre
     *
     * @return \DateTime 
     */
    public function getDateReussiteMembre()
    {
        return $this->dateReussiteMembre;
    }

    /**
     * Set nbSemestreValide
     *
     * @param integer $nbSemestreValide
     * @return User
     */
    public function setNbSemestreValide($nbSemestreValide)
    {
        $this->nbSemestreValide = $nbSemestreValide;

        return $this;
    }

    /**
     * Get nbSemestreValide
     *
     * @return integer 
     */
    public function getNbSemestreValide()
    {
        return $this->nbSemestreValide;
    }

    /**
     * Set estAdherent
     *
     * @param boolean $estAdherent
     * @return User
     */
    public function setEstAdherent($estAdherent)
    {
        $this->estAdherent = $estAdherent;

        return $this;
    }

    /**
     * Get estAdherent
     *
     * @return boolean 
     */
    public function getEstAdherent()
    {
        return $this->estAdherent;
    }
}
