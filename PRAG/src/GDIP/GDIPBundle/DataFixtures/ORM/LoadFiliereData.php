<?php

namespace GDIP\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GDIP\GDIPBundle\Entity\Filiere;

class LoadFiliereData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $filiere1 = new Filiere();
        $filiere1->setLibelleFiliere('Biologie médicale');
        $this->addReference('filiere1', $filiere1);
        $manager->persist($filiere1);
/*

        $filiere2 = new Filiere();
        $filiere2->setLibelleFiliere('Pharmacie hospitalière');
        $this->addReference('filiere2', $filiere2);
        $manager->persist($filiere2);
*/

        $manager->flush();
    }

    /**
     *
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 4;
    }
}