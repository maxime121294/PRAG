<?php

namespace GDIP\GDIPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Effectuer
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GDIP\GDIPBundle\Entity\EffectuerRepository")
 */
class Effectuer
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
     * @var \DateTime
     *
     * @ORM\Column(name="dateDebutStage", type="date")
     */
    private $dateDebutStage;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateFinStage", type="date")
     */
    private $dateFinStage;


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
     * Set dateDebutStage
     *
     * @param \DateTime $dateDebutStage
     * @return Effectuer
     */
    public function setDateDebutStage($dateDebutStage)
    {
        $this->dateDebutStage = $dateDebutStage;

        return $this;
    }

    /**
     * Get dateDebutStage
     *
     * @return \DateTime 
     */
    public function getDateDebutStage()
    {
        return $this->dateDebutStage;
    }

    /**
     * Set dateFinStage
     *
     * @param \DateTime $dateFinStage
     * @return Effectuer
     */
    public function setDateFinStage($dateFinStage)
    {
        $this->dateFinStage = $dateFinStage;

        return $this;
    }

    /**
     * Get dateFinStage
     *
     * @return \DateTime 
     */
    public function getDateFinStage()
    {
        return $this->dateFinStage;
    }
}
