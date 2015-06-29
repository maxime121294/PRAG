<?php

namespace GDIP\GDIPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reponse
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GDIP\GDIPBundle\Entity\ReponseRepository")
 */
class Reponse
{
	/**
	 * @ORM\Id
     * @ORM\OneToOne(targetEntity="Question")
     */
    private $question;
	
	/**
	 * @ORM\Id
     * @ORM\ManyToOne(targetEntity="GDIP\UserBundle\Entity\User")
	 * @ORM\JoinColumn(name="id_user", referencedColumnName="idUser")
     */
    private $utilisateur;
	
	/**
	 * @ORM\Id
     * @ORM\OneToOne(targetEntity="Evaluation")
     */
    private $evaluation;

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
