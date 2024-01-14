<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Usersfixtures;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;


class Userfixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
        for ($i = 0; $i <= 5; $i++) :
            $users = new Usersfixtures();
            $users->setNom($faker->lastName());
            $users->setusersfixtures($faker->firstName());
            $users->setAge($faker->numberBetween(18, 99));
            $users->setTelephone($faker->e164PhoneNumber());
            $users->setAdresse($faker->email());

            $manager->persist($users);
        endfor;

        $manager->flush();
    }
}
