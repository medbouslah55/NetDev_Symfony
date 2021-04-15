<?php

namespace App\DataFixtures;

use Faker\Factory;
use App\Entity\Menu;
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

            for($j = 1; $j <= mt_rand(2,5) ; $j++){
                $menu = new Menu();

                $menu->setIdRegime($regime)
                    ->setDescription($faker->sentence(1))
                    ->setNumJour(mt_rand(1,30))
                    ->setMatin($faker->sentence(1))
                    ->setMatinImg(mt_rand(1,5).".jpg")
                    ->setDejeuner($faker->sentence(1))
                    ->setDejeunerImg(mt_rand(1,5).".jpg")
                    ->setDinner($faker->sentence(1))
                    ->setDinnerImg(mt_rand(1,5).".jpg")
                    ->setTotalCalories(mt_rand(1500,3000))
                ;
                $manager->persist($menu);
            }

            $manager->persist($regime);
        }
        $manager->flush();
    }
}
