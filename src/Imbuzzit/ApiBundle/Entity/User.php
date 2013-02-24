<?php

namespace Imbuzzit\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * Imbuzzit\ApiBundle\User
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Imbuzzit\ApiBundle\Repository\UsersRepository")
 */
class User implements UserInterface
{
    /**
     * @ORM\Column(name="id_user", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25, unique=true)
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $salt;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=60, unique=true)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100, nullable=true)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string", length=100, nullable=true)
     */
    private $firstname;

    /**
     * @ORM\Column(name="is_active", type="boolean")
     */
    private $isActive;
    
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthday", type="date")
     */
    private $birthday;

    /**
     * @var integer
     *
     * @ORM\Column(name="sexe", type="smallint")
     */
    private $sexe;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="account_birthday", type="datetime", nullable=true)
     */
    private $account_birthday;

    /**
     * @var string
     *
     * @ORM\Column(name="biography", type="text", nullable=true)
     */
    private $biography;

    /**
     * @var string
     *
     * @ORM\Column(name="city", type="string", length=100, nullable=true)
     */
    private $city;

    /**
     * @var array
     *
     * @ORM\Column(name="influence", type="array", nullable=true)
     */
    private $influence;

    /**
     * @var string
     *
     * @ORM\Column(name="equipment", type="text", nullable=true)
     */
    private $equipment;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="last_connect", type="datetime", nullable=true)
     */
    private $last_connect;
    
    public function __construct()
    {
        $this->isActive = true;
        $this->salt = md5(uniqid(null, true));
    }

    /**
     * @inheritDoc
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @inheritDoc
     */
    public function getSalt()
    {
        return $this->salt;
    }

    /**
     * @inheritDoc
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @inheritDoc
     */
    public function getRoles()
    {
        return array('ROLE_USER');
    }

    /**
     * @inheritDoc
     */
    public function eraseCredentials()
    {
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Set salt
     *
     * @param string $salt
     * @return User
     */
    public function setSalt($salt)
    {
        $this->salt = $salt;
    
        return $this;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
    
        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;
    
        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     * @return User
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    
        return $this;
    }

    /**
     * Get firstname
     *
     * @return string 
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set isActive
     *
     * @param boolean $isActive
     * @return User
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    
        return $this;
    }

    /**
     * Get isActive
     *
     * @return boolean 
     */
    public function getIsActive()
    {
        return $this->isActive;
    }

    /**
     * Set birthday
     *
     * @param \DateTime $birthday
     * @return User
     */
    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    
        return $this;
    }

    /**
     * Get birthday
     *
     * @return \DateTime 
     */
    public function getBirthday()
    {
        return $this->birthday;
    }

    /**
     * Set sexe
     *
     * @param integer $sexe
     * @return User
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    
        return $this;
    }

    /**
     * Get sexe
     *
     * @return integer 
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * Set account_birthday
     *
     * @param \DateTime $accountBirthday
     * @return User
     */
    public function setAccountBirthday($accountBirthday)
    {
        $this->account_birthday = $accountBirthday;
    
        return $this;
    }

    /**
     * Get account_birthday
     *
     * @return \DateTime 
     */
    public function getAccountBirthday()
    {
        return $this->account_birthday;
    }

    /**
     * Set biography
     *
     * @param string $biography
     * @return User
     */
    public function setBiography($biography)
    {
        $this->biography = $biography;
    
        return $this;
    }

    /**
     * Get biography
     *
     * @return string 
     */
    public function getBiography()
    {
        return $this->biography;
    }

    /**
     * Set city
     *
     * @param string $city
     * @return User
     */
    public function setCity($city)
    {
        $this->city = $city;
    
        return $this;
    }

    /**
     * Get city
     *
     * @return string 
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set influence
     *
     * @param array $influence
     * @return User
     */
    public function setInfluence($influence)
    {
        $this->influence = $influence;
    
        return $this;
    }

    /**
     * Get influence
     *
     * @return array 
     */
    public function getInfluence()
    {
        return $this->influence;
    }

    /**
     * Set equipment
     *
     * @param string $equipment
     * @return User
     */
    public function setEquipment($equipment)
    {
        $this->equipment = $equipment;
    
        return $this;
    }

    /**
     * Get equipment
     *
     * @return string 
     */
    public function getEquipment()
    {
        return $this->equipment;
    }

    /**
     * Set last_connect
     *
     * @param \DateTime $lastConnect
     * @return User
     */
    public function setLastConnect($lastConnect)
    {
        $this->last_connect = $lastConnect;
    
        return $this;
    }

    /**
     * Get last_connect
     *
     * @return \DateTime 
     */
    public function getLastConnect()
    {
        return $this->last_connect;
    }
}