<?php

namespace GDIP\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GDIP\GDIPBundle\Entity\Evaluation;

class LoadEvaluationData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $eval1 = new Evaluation();
        $eval1->setNoteGenerale(10);
        $eval1->setEnabled(true);
        $eval1->setStage($this->getReference('sta1'));
        $eval1->setUtilisateur($this->getReference('userAdh'));
        $this->addReference('eval1', $eval1);
        $manager->persist($eval1);

        $manager->flush();
    }

    /**
     *
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 10;
    }
}