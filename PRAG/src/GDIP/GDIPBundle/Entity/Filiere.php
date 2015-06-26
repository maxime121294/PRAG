<?php

namespace GDIP\GDIPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Filiere
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GDIP\GDIPBundle\Entity\FiliereRepository")
 */
class Filiere
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
     * @ORM\Column(name="libelleFiliere", type="string", length=255)
     */
    private $libelleFiliere;


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
     * Set libelleFiliere
     *
     * @param string $libelleFiliere
     * @return Filiere
     */
    public function setLibelleFiliere($libelleFiliere)
    {
        $this->libelleFiliere = $libelleFiliere;

        return $this;
    }

    /**
     * Get libelleFiliere
     *
     * @return string 
     */
    public function getLibelleFiliere()
    {
        return $this->libelleFiliere;
    }
}
