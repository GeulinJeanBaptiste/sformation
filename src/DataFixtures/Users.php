<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class Users extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
        for ($i = 0; $i <= 5; $i++) :
            $users = new User();
            $users->setNom($faker->lastName());
            $users->setPrenom($faker->firstName());
            $users->setAge($faker->numberBetween(18, 99));
            $users->setEmail($faker->email());
            $users->setPassword($faker->password(8, 12));
            $manager->persist($users);
        endfor;

        $manager->flush();
    }
}
