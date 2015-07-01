<?php

namespace GDIP\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GDIP\GDIPBundle\Entity\Reponse;

class LoadReponseData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $rep1 = new Reponse();
        $rep1->setUtilisateur($this->getReference('userAdh'));
        $rep1->setEvaluation($this->getReference('eval1'));
        $rep1->setQuestion($this->getReference('que1'));
        $this->addReference('rep1', $rep1);
        $manager->persist($rep1);

        $manager->flush();
    }

    /**
     *
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 11;
    }
}