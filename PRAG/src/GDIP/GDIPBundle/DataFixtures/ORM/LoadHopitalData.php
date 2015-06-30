<?php

namespace GDIP\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GDIP\GDIPBundle\Entity\Hopital;

class LoadHopitalData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $hop1 = new Hopital();
        $hop1->setLibelleHopital('Trousseau');
        $hop1->setLieuHopital('Paris');
        $hop1->setDeptHopital('75');
        $this->addReference('hop1', $hop1);
        $manager->persist($hop1);

        $manager->flush();
    }

    /**
     *
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 2;
    }
}