<?php

namespace Imbuzzit\ApiBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Imbuzzit\ApiBundle\Entity\User;

class LoadUserData implements FixtureInterface, ContainerAwareInterface
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * {@inheritDoc}
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setUsername('admin');
        $encoder = $this->container
            ->get('security.encoder_factory')
            ->getEncoder($user)
        ;
        $user->setPassword($encoder->encodePassword('secret', $user->getSalt()));
        $user->setEmail('contact@imbuzzit.com');
        $datetime = new \DateTime();
        $user->setBirthday($datetime);
        $user->setAccountBirthday($datetime);
        $user->setSexe(2);

        $manager->persist($user);
        $manager->flush();
    }
}