<?php

namespace GDIP\GDIPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Hopital
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GDIP\GDIPBundle\Entity\HopitalRepository")
 */
class Hopital
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
     * @ORM\Column(name="libelleHopital", type="string", length=255)
     */
    private $libelleHopital;

    /**
     * @var string
     *
     * @ORM\Column(name="lieuHopital", type="string", length=255)
     */
    private $lieuHopital;

    /**
     * @var integer
     *
     * @ORM\Column(name="deptHopital", type="smallint")
     */
    private $deptHopital;


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
     * Set libelleHopital
     *
     * @param string $libelleHopital
     * @return Hopital
     */
    public function setLibelleHopital($libelleHopital)
    {
        $this->libelleHopital = $libelleHopital;

        return $this;
    }

    /**
     * Get libelleHopital
     *
     * @return string 
     */
    public function getLibelleHopital()
    {
        return $this->libelleHopital;
    }

    /**
     * Set lieuHopital
     *
     * @param string $lieuHopital
     * @return Hopital
     */
    public function setLieuHopital($lieuHopital)
    {
        $this->lieuHopital = $lieuHopital;

        return $this;
    }

    /**
     * Get lieuHopital
     *
     * @return string 
     */
    public function getLieuHopital()
    {
        return $this->lieuHopital;
    }

    /**
     * Set deptHopital
     *
     * @param integer $deptHopital
     * @return Hopital
     */
    public function setDeptHopital($deptHopital)
    {
        $this->deptHopital = $deptHopital;

        return $this;
    }

    /**
     * Get deptHopital
     *
     * @return integer 
     */
    public function getDeptHopital()
    {
        return $this->deptHopital;
    }
}
