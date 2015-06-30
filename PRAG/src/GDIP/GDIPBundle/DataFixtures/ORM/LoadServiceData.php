<?php

namespace GDIP\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\ORM\EntityManager;
use GDIP\GDIPBundle\Entity\Service;
use Proxies\__CG__\GDIP\GDIPBundle\Entity\Hopital;

class LoadServiceData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $ser1 = new Service();
        $ser1->setLibelleService('Service bio');
        $ser1->setDomaine($this->getReference('dom1'));
        $this->addReference('ser1', $ser1);
        $manager->persist($ser1);

        $manager->flush();
    }

    /**
     *
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 6;
    }
}