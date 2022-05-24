<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Room;
use Faker;

class RoomFixtures extends Fixture
{

    public function load(ObjectManager $manager): void
    {
        $faker = Faker\Factory::create('fr_FR');
        for ($i = 0; $i < 10; $i++) {
            $room = new Room();
            $room->setBed('Lit simple');
            $room->setArea(25);
            $room->setPrice(999,90);
            $room->setDescription($faker->text);
            $room->setName($faker->name);
            $room->setArea($faker->buildingNumber);
            $room->setThumbnail($faker->imageUrl);
            $manager->persist($room);
         }

         $manager->flush();
    }
}
