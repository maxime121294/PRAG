<?php

namespace GDIP\GDIPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Parametre
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GDIP\GDIPBundle\Entity\ParametreRepository")
 */
class Parametre
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
     * @ORM\Column(name="dateButoirConsultEval", type="date")
     */
    private $dateButoirConsultEval;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateButoirModifEval", type="date")
     */
    private $dateButoirModifEval;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateButoirConsultChoix", type="date")
     */
    private $dateButoirConsultChoix;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateButoirModifChoix", type="date")
     */
    private $dateButoirModifChoix;


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
     * Set dateButoirConsultEval
     *
     * @param \DateTime $dateButoirConsultEval
     * @return Parametre
     */
    public function setDateButoirConsultEval($dateButoirConsultEval)
    {
        $this->dateButoirConsultEval = $dateButoirConsultEval;

        return $this;
    }

    /**
     * Get dateButoirConsultEval
     *
     * @return \DateTime 
     */
    public function getDateButoirConsultEval()
    {
        return $this->dateButoirConsultEval;
    }

    /**
     * Set dateButoirModifEval
     *
     * @param \DateTime $dateButoirModifEval
     * @return Parametre
     */
    public function setDateButoirModifEval($dateButoirModifEval)
    {
        $this->dateButoirModifEval = $dateButoirModifEval;

        return $this;
    }

    /**
     * Get dateButoirModifEval
     *
     * @return \DateTime 
     */
    public function getDateButoirModifEval()
    {
        return $this->dateButoirModifEval;
    }

    /**
     * Set dateButoirConsultChoix
     *
     * @param \DateTime $dateButoirConsultChoix
     * @return Parametre
     */
    public function setDateButoirConsultChoix($dateButoirConsultChoix)
    {
        $this->dateButoirConsultChoix = $dateButoirConsultChoix;

        return $this;
    }

    /**
     * Get dateButoirConsultChoix
     *
     * @return \DateTime 
     */
    public function getDateButoirConsultChoix()
    {
        return $this->dateButoirConsultChoix;
    }

    /**
     * Set dateButoirModifChoix
     *
     * @param \DateTime $dateButoirModifChoix
     * @return Parametre
     */
    public function setDateButoirModifChoix($dateButoirModifChoix)
    {
        $this->dateButoirModifChoix = $dateButoirModifChoix;

        return $this;
    }

    /**
     * Get dateButoirModifChoix
     *
     * @return \DateTime 
     */
    public function getDateButoirModifChoix()
    {
        return $this->dateButoirModifChoix;
    }
}
