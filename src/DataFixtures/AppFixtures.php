<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Regime;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $faker = Factory::create('FR-fr');

        for($i = 1; $i <= 3; $i++){
            $regime = new Regime();

            $title = $faker->sentence(1);
            $description = $faker->paragraph(1);

            $regime->setType($title)
            ->setDescription($description)
            ->setImage("regime.jpg");

            $manager->persist($regime);
        }
        $manager->flush();
    }
}
