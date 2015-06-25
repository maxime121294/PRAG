<?php

namespace GDIP\GDIPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Vouloir
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GDIP\GDIPBundle\Entity\VouloirRepository")
 */
class Vouloir
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
     * @var integer
     *
     * @ORM\Column(name="positionVoeu", type="integer")
     */
    private $positionVoeu;


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
     * Set positionVoeu
     *
     * @param integer $positionVoeu
     * @return Vouloir
     */
    public function setPositionVoeu($positionVoeu)
    {
        $this->positionVoeu = $positionVoeu;

        return $this;
    }

    /**
     * Get positionVoeu
     *
     * @return integer 
     */
    public function getPositionVoeu()
    {
        return $this->positionVoeu;
    }
}
