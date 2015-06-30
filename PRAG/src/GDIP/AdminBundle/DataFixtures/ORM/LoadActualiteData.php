<?php

namespace GDIP\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GDIP\AdminBundle\Entity\Actualite;
use Symfony\Component\Validator\Constraints\DateTime;

class LoadActualiteData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $act1 = new Actualite();
        $act1->setContenu("actu");
       // $act1->setDate(new DateTime('2000-01-01'));
        $this->addReference('act1', $act1);
        $manager->persist($act1);

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