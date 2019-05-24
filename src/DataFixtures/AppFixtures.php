<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\TestDatabase;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
	$faker = Factory::create("fr_FR");
        for ($i = 0; $i < 10; $i++) {
		$test = new TestDatabase();
		$test
			->setSurname($faker->firstname)
			->setLastname($faker->lastname)
			->setAge($faker->numberBetween(10, 30))
		;
		$manager->persist($test);
	}

        $manager->flush();
    }
}
