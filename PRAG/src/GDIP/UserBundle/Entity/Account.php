<?php

namespace GDIP\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Account
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GDIP\UserBundle\Entity\AccountRepository")
 */
class Account
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idAccount", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="droitAcces", type="boolean")
     */
    private $droitAcces;

    /**
     * @var boolean
     *
     * @ORM\Column(name="droitConsultation", type="boolean")
     */
    private $droitConsultation;

    /**
     * @var boolean
     *
     * @ORM\Column(name="droitEvaluation", type="boolean")
     */
    private $droitEvaluation;

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
     * Set droitAcces
     *
     * @param boolean $droitAcces
     * @return Account
     */
    public function setDroitAcces($droitAcces)
    {
        $this->droitAcces = $droitAcces;

        return $this;
    }

    /**
     * Get droitAcces
     *
     * @return boolean 
     */
    public function getDroitAcces()
    {
        return $this->droitAcces;
    }

    /**
     * Set droitConsultation
     *
     * @param boolean $droitConsultation
     * @return Account
     */
    public function setDroitConsultation($droitConsultation)
    {
        $this->droitConsultation = $droitConsultation;

        return $this;
    }

    /**
     * Get droitConsultation
     *
     * @return boolean 
     */
    public function getDroitConsultation()
    {
        return $this->droitConsultation;
    }

    /**
     * Set droitEvaluation
     *
     * @param boolean $droitEvaluation
     * @return Account
     */
    public function setDroitEvaluation($droitEvaluation)
    {
        $this->droitEvaluation = $droitEvaluation;

        return $this;
    }

    /**
     * Get droitEvaluation
     *
     * @return boolean 
     */
    public function getDroitEvaluation()
    {
        return $this->droitEvaluation;
    }
}
