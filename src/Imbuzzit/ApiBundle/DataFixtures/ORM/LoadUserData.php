<?php

namespace Imbuzzit\ApiBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Imbuzzit\ApiBundle\Entity\User;

class LoadUserData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername('admin');
        $user->setPassword('test');
        $user->setEmail('contact@imbuzzit.com');
        $datetime = new \DateTime();
        $user->setBirthday($datetime);
        $user->setAccountBirthday($datetime);
        $user->setSexe(2);

        $manager->persist($user);
        $manager->flush();
    }
}