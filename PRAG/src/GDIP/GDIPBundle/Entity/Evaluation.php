<?php

namespace GDIP\GDIPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evaluation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GDIP\GDIPBundle\Entity\EvaluationRepository")
 */
class Evaluation
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
     * @var float
     *
     * @ORM\Column(name="noteGenerale", type="float")
     */
    private $noteGenerale;
	
	/**
	* @ORM\ManyToOne(targetEntity="Stage")
	* @ORM\JoinColumn(nullable=false)
	*/
	private $stage;
	
	/**
     * @ORM\ManyToOne(targetEntity="GDIP\UserBundle\Entity\User", inversedBy="listeEvaluation")
     * @ORM\JoinColumn(name="id_user", referencedColumnName="idUser")
    */
    private $utilisateur;
	
	/**
	* @ORM\ManyToMany(targetEntity="Question")
	*/
	private $questions;


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
     * Set noteGenerale
     *
     * @param float $noteGenerale
     * @return Evaluation
     */
    public function setNoteGenerale($noteGenerale)
    {
        $this->noteGenerale = $noteGenerale;

        return $this;
    }

    /**
     * Get noteGenerale
     *
     * @return float 
     */
    public function getNoteGenerale()
    {
        return $this->noteGenerale;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->questions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set stage
     *
     * @param \GDIP\GDIPBundle\Entity\Stage $stage
     * @return Evaluation
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
     * Add questions
     *
     * @param \GDIP\GDIPBundle\Entity\Question $questions
     * @return Evaluation
     */
    public function addQuestion(\GDIP\GDIPBundle\Entity\Question $questions)
    {
        $this->questions[] = $questions;

        return $this;
    }

    /**
     * Remove questions
     *
     * @param \GDIP\GDIPBundle\Entity\Question $questions
     */
    public function removeQuestion(\GDIP\GDIPBundle\Entity\Question $questions)
    {
        $this->questions->removeElement($questions);
    }

    /**
     * Get questions
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getQuestions()
    {
        return $this->questions;
    }

    /**
     * Set utilisateur
     *
     * @param \GDIP\UserBundle\Entity\User $utilisateur
     * @return Evaluation
     */
    public function setUtilisateur(\GDIP\UserBundle\Entity\User $utilisateur = null)
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
}
