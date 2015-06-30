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
        $serv1 = new Service();
        $serv1->setLibelleService('Service bio');
        $serv1->setDomaine($this->getReference('dom1'));
        $this->addReference('serv1', $serv1);
        $manager->persist($serv1);

/*
        $serv2 = new Service();
        $serv2>setLibelleService('Service viro');
        $serv2->setDomaine($this->getReference('dom2'));
        $this->addReference('serv2', $serv2);
        $manager->persist($serv2);
        */

        $manager->flush();
    }

    /**
     *
     * {@inheritDoc}
     */
    public function getOrder()
    {
        return 3;
    }
}