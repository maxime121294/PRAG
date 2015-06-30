<?php

namespace GDIP\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GDIP\GDIPBundle\Entity\Poste;

class LoadPosteData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $pos1 = new Poste();
        $pos1->setLibellePoste('Infirmier');
        $pos1->setHopital($this->getReference('hop1'));
        $pos1->setService($this->getReference('ser1'));
        $this->addReference('pos1', $pos1);
        $manager->persist($pos1);

        $manager->flush();
    }

    /**
     *
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 7;
    }
}