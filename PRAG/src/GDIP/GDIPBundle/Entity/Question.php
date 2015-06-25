<?php

namespace GDIP\GDIPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Question
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GDIP\GDIPBundle\Entity\QuestionRepository")
 */
class Question
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
     * @ORM\Column(name="libelleQuestion", type="string", length=255)
     */
    private $libelleQuestion;


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
     * Set libelleQuestion
     *
     * @param string $libelleQuestion
     * @return Question
     */
    public function setLibelleQuestion($libelleQuestion)
    {
        $this->libelleQuestion = $libelleQuestion;

        return $this;
    }

    /**
     * Get libelleQuestion
     *
     * @return string 
     */
    public function getLibelleQuestion()
    {
        return $this->libelleQuestion;
    }
}
