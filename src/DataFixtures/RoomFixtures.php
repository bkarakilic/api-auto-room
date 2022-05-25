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
            $room->setBed($faker->boolean(50) ? 'Lit simple' : 'Lit double');
            $room->setArea(rand(11,48));
            $room->setPrice(rand(8,160));
            $room->setDescription($faker->realText(350));
            $room->setName($faker->name);
            $room->setArea($faker->buildingNumber);
            $room->setThumbnail($faker->imageUrl);
            $manager->persist($room);
         }

         $manager->flush();
    }
}
