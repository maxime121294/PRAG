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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
