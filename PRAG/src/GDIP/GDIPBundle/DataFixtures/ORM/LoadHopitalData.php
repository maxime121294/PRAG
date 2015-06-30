<?php

namespace GDIP\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GDIP\GDIPBundle\Entity\Hopital;

class LoadHopitalData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $trousseau = new Hopital();
        $trousseau->setLibelleHopital('Trousseau');
        $trousseau->setLieuHopital('Paris');
        $trousseau->setDeptHopital('75');
        $manager->persist($trousseau);

        $cochin = new Hopital();
        $cochin->setLibelleHopital('Cochin');
        $cochin->setLieuHopital('Saint-Mandé');
        $cochin->setDeptHopital('94');
        $manager->persist($cochin);

        $rotschild = new Hopital();
        $rotschild->setLibelleHopital('Rotschild');
        $rotschild->setLieuHopital('Neuilly-sur-Marne');
        $rotschild->setDeptHopital('93');
        $manager->persist($rotschild);

        $manager->flush();
    }
}