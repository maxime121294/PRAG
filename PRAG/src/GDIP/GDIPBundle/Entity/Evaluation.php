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
}
