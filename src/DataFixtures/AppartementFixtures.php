<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

use App\Entity\Appartement;
use Faker;

class AppartementFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');
        for ($i = 0; $i < 3; $i++) {
            $appartement = new Appartement();
            // $appartement->addRoom('Lit simple');
            $appartement->setZipCode('69000');
            $appartement->setCity('Lyon');
            $appartement->setName($faker->name);
            $appartement->setStreet($faker->city);
            $manager->persist($appartement);
         }

         $manager->flush();
    }
}
