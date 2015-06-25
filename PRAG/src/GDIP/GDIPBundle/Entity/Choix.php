<?php

namespace GDIP\GDIPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Choix
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GDIP\GDIPBundle\Entity\ChoixRepository")
 */
class Choix
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
     * @ORM\Column(name="libelleChoix", type="string", length=255)
     */
    private $libelleChoix;


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
     * Set libelleChoix
     *
     * @param string $libelleChoix
     * @return Choix
     */
    public function setLibelleChoix($libelleChoix)
    {
        $this->libelleChoix = $libelleChoix;

        return $this;
    }

    /**
     * Get libelleChoix
     *
     * @return string 
     */
    public function getLibelleChoix()
    {
        return $this->libelleChoix;
    }
}
