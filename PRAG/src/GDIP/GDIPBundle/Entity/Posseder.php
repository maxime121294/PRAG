<?php

namespace GDIP\GDIPBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Posseder
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="GDIP\GDIPBundle\Entity\PossederRepository")
 */
class Posseder
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
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
