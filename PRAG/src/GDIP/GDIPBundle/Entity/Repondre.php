<?php

namespace GDIP\GDIPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Repondre
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GDIP\GDIPBundle\Entity\RepondreRepository")
 */
class Repondre
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
     * @ORM\Column(name="valeurReponseQuestion", type="string", length=255)
     */
    private $valeurReponseQuestion;


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
     * Set valeurReponseQuestion
     *
     * @param string $valeurReponseQuestion
     * @return Repondre
     */
    public function setValeurReponseQuestion($valeurReponseQuestion)
    {
        $this->valeurReponseQuestion = $valeurReponseQuestion;

        return $this;
    }

    /**
     * Get valeurReponseQuestion
     *
     * @return string 
     */
    public function getValeurReponseQuestion()
    {
        return $this->valeurReponseQuestion;
    }
}
