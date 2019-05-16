<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\TestDatabase;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 0; $i < 10; $i++) {
		$test = new TestDatabase();
		$test
			->setSurname('Paul')
			->setLastname('Charles')
			->setAge(18)
		;
		$manager->persist($test);
	}

        $manager->flush();
    }
}
