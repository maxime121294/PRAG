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
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="position", type="integer")
     */
    private $position;
	
	/**
	 * @ORM\ManyToOne(targetEntity="Stage")
	 * @ORM\JoinColumn(nullable=true)
	 */
	private $stage;
	
	/**
     * @ORM\ManyToOne(targetEntity="GDIP\UserBundle\Entity\User", inversedBy="listePreChoix")
     * @ORM\JoinColumn(name="id_user", referencedColumnName="idUser")
    */
    private $listePreChoix;
	
	


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
}
