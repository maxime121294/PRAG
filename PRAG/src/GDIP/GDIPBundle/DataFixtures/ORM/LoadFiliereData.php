<?php

namespace GDIP\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GDIP\GDIPBundle\Entity\Filiere;

class LoadFiliereData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $filiereBio = new Filiere();
        $filiereBio->setLibelleFiliere('Biologie médicale');
        $manager->persist($filiereBio);

        $filierePharma = new Filiere();
        $filierePharma->setLibelleFiliere('Pharmacie hospitalière');
        $manager->persist($filierePharma);

        $filiereIPR = new Filiere();
        $filiereIPR->setLibelleFiliere('IPR');
        $manager->persist($filiereIPR);

        $manager->flush();
    }
}