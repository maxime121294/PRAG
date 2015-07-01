<?php

namespace GDIP\UserBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use GDIP\GDIPBundle\Entity\Stage;

class LoadStageData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $sta1 = new Stage();
        $sta1->setNbPlaces(2);
        $sta1->setHopital($this->getReference('hop1'));
        $sta1->setFiliere($this->getReference('fil1'));
        $this->addReference('sta1', $sta1);
        $manager->persist($sta1);

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