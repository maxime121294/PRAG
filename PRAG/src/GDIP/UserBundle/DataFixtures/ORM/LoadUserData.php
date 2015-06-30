<?php

namespace GDIP\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GDIP\UserBundle\Entity\User;

class LoadUserData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $userAdmin = new User();
        $userAdmin->setUsername('admin');
        $userAdmin->setPrenomMembre('Super');
        $userAdmin->setNomMembre('Admin');
        $userAdmin->setRangMembre(0);
        $userAdmin->setNbSemestreValide(0);
        $userAdmin->setEstAdherent(true);
        $userAdmin->setEnabled(true);
        $userAdmin->setPlainPassword('gdip');
        $userAdmin->setDateReussiteMembre(new \DateTime("now"));
        $userAdmin->setEmail('noreply.siphif@gmail.com');
        $userAdmin->setRoles(array('ROLE_SUPER_ADMIN'));
		
		$userAdh = new User();
        $userAdh->setUsername('adherent');
        $userAdh->setPrenomMembre('User');
        $userAdh->setNomMembre('Adherent');
        $userAdh->setRangMembre(0);
        $userAdh->setNbSemestreValide(0);
        $userAdh->setEstAdherent(true);
        $userAdh->setEnabled(true);
        $userAdh->setPlainPassword('test');
        $userAdh->setDateReussiteMembre(new \DateTime("now"));
        $userAdh->setEmail('useradherent@gmail.com');
        $userAdh->setRoles(array('ROLE_USER'));

        $manager->persist($userAdmin);
		$manager->persist($userAdh);
        $manager->flush();
    }
}