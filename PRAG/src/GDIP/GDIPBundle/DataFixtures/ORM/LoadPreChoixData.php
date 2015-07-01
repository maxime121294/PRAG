<?php

namespace GDIP\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GDIP\GDIPBundle\Entity\PreChoix;

class LoadPreChoixData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $prech1 = new PreChoix();
        $prech1->setAdmisProb(false);
        $prech1->setPosition(1);
        $prech1->setStage($this->getReference('sta1'));
        $prech1->setUtilisateur($this->getReference('userAdh'));
        $this->addReference('prech1', $prech1);
        $manager->persist($prech1);

        $manager->flush();
    }

    /**
     *
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 9;
    }
}