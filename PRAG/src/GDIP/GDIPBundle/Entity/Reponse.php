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

    /**
     * Set question
     *
     * @param \GDIP\GDIPBundle\Entity\Question $question
     * @return Reponse
     */
    public function setQuestion(\GDIP\GDIPBundle\Entity\Question $question)
    {
        $this->question = $question;

        return $this;
    }

    /**
     * Get question
     *
     * @return \GDIP\GDIPBundle\Entity\Question 
     */
    public function getQuestion()
    {
        return $this->question;
    }

    /**
     * Set utilisateur
     *
     * @param \GDIP\UserBundle\Entity\User $utilisateur
     * @return Reponse
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
     * Set evaluation
     *
     * @param \GDIP\GDIPBundle\Entity\Evaluation $evaluation
     * @return Reponse
     */
    public function setEvaluation(\GDIP\GDIPBundle\Entity\Evaluation $evaluation)
    {
        $this->evaluation = $evaluation;

        return $this;
    }

    /**
     * Get evaluation
     *
     * @return \GDIP\GDIPBundle\Entity\Evaluation 
     */
    public function getEvaluation()
    {
        return $this->evaluation;
    }
}
