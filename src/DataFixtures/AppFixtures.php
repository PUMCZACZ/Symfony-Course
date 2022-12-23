<?php

namespace App\DataFixtures;

use App\Entity\Client;
use DateTime;
use App\Entity\User;
use App\Entity\MicroPost;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AppFixtures extends Fixture
{
    public function __construct(private UserPasswordHasherInterface $userPasswordHasher)
    {
        
    }

    public function load(ObjectManager $manager): void
    {
        $client = new Client();
        $client->setName('Jarosław');
        $client->setSurname('Kamczymski');
        $client->setEmail('jaromslaw@polmska.ezinflacja');
        $client->setStreet('Kremta 4');
        $client->setPostcode('64-533');
        $client->setCity('Pomdrzemwie');
        $client->setAdddate(new DateTime());
        
        $manager->persist($client);
        $manager->flush();
    }
}
