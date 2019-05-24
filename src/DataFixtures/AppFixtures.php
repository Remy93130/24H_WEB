<?php

namespace App\DataFixtures;

use App\Entity\Producteur;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use App\Entity\TestDatabase;
use Faker\Factory;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
	$faker = Factory::create("fr_FR");
        for ($i = 0; $i < 20; $i++) {
		$producteur = new Producteur();
		$producteur
			->setNom($faker->country)
            ->setDescription($faker->realText())
            ->setCapitale($faker->word)
            ->setSurface($faker->numberBetween(1000, 2000))
            ->setDrapeau("https://cdn.shopify.com/s/files/1/0344/6469/products/Hippie_Kitty_Sunglasses_grande.jpg")
            ->setHabitant($faker->numberBetween(1000, 100000))
            ->setPourcent($faker->numberBetween(0, 100))
            ->setTonne($faker->numberBetween(5, 100))
		;
		$manager->persist($producteur);
	}

        $manager->flush();
    }
}
