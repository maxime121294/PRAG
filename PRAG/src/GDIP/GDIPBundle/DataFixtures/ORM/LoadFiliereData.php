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
        $fil1 = new Filiere();
        $fil1->setLibelleFiliere('Biologie médicale');
        $this->addReference('fil1', $fil1);
        $manager->persist($fil1);

        $manager->flush();
    }

    /**
     *
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 1;
    }
}