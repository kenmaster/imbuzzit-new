<?php

namespace Imbuzzit\ApiBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Imbuzzit\ApiBundle\Stream
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Imbuzzit\ApiBundle\Repository\StreamRepository")
 */
class Stream
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_stream", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="text", type="text", nullable=true)
     */
    private $text;

    /**
     * @var integer
     *
     * @ORM\Column(name="statut", type="integer")
     */
    private $state;

    /**
     * @var integer
     *
     * @ORM\Column(name="type", type="integer")
     */
    private $type;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created_at", type="datetime", nullable=false)
     */
    private $createdAt;

    /**
     * @var Users
     *
     * @ORM\ManyToOne(targetEntity="Imbuzzit\ApiBundle\Entity\User", cascade={"persist", "merge", "remove"})
     * @ORM\JoinColumn(name="created_by", referencedColumnName="id_user")
     */
    private $createdBy;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="vote", type="integer", nullable=true)
     */
    private $poll;

    /**
     * @var string
     *
     * @ORM\Column(name="url", type="string", length=100, nullable=true)
     */
    private $url;

    /**
     * @var integer
     *
     * @ORM\Column(name="media", type="integer", nullable=true)
     */
    private $media;

    /**
     * @var integer
     *
     * @ORM\Column(name="access", type="integer", nullable=true)
     */
    private $access;

    /**
     * @var integer
     *
     * @ORM\Column(name="featured", type="integer", nullable=true)
     */
    private $featured;
    
    public function __construct()
    {
      $this->poll = 0;
      $this->createdAt = new \DateTime('now');
      $this->state = 0;
    }

    /**
     * Set text
     *
     * @param string $text
     * @return Stream
     */
    public function setText($text)
    {
        $this->text = $text;
    
        return $this;
    }

    /**
     * Get text
     *
     * @return string 
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Set state
     *
     * @param integer $state
     * @return Stream
     */
    public function setState($state)
    {
        $this->state = $state;
    
        return $this;
    }

    /**
     * Get state
     *
     * @return integer 
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set type
     *
     * @param integer $type
     * @return Stream
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return integer 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set createdDatetime
     *
     * @param \DateTime $createdDatetime
     * @return Stream
     */
    public function setCreatedDatetime($createdDatetime)
    {
        $this->createdDatetime = $createdDatetime;
    
        return $this;
    }

    /**
     * Get createdDatetime
     *
     * @return \DateTime 
     */
    public function getCreatedDatetime()
    {
        return $this->createdDatetime;
    }

    /**
     * Set poll
     *
     * @param integer $poll
     * @return Stream
     */
    public function setPoll($poll)
    {
        $this->poll = $poll;
    
        return $this;
    }

    /**
     * Get poll
     *
     * @return integer 
     */
    public function getPoll()
    {
        return $this->poll;
    }

    /**
     * Set url
     *
     * @param string $url
     * @return Stream
     */
    public function setUrl($url)
    {
        $this->url = $url;
    
        return $this;
    }

    /**
     * Get url
     *
     * @return string 
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set media
     *
     * @param integer $media
     * @return Stream
     */
    public function setMedia($media)
    {
        $this->media = $media;
    
        return $this;
    }

    /**
     * Get media
     *
     * @return integer 
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Set access
     *
     * @param integer $access
     * @return Stream
     */
    public function setAccess($access)
    {
        $this->access = $access;
    
        return $this;
    }

    /**
     * Get access
     *
     * @return integer 
     */
    public function getAccess()
    {
        return $this->access;
    }

    /**
     * Set featured
     *
     * @param integer $featured
     * @return Stream
     */
    public function setFeatured($featured)
    {
        $this->featured = $featured;
    
        return $this;
    }

    /**
     * Get featured
     *
     * @return integer 
     */
    public function getFeatured()
    {
        return $this->featured;
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
     * Set createdAt
     *
     * @param \DateTime $createdAt
     * @return Stream
     */
    public function setCreatedAt($createdAt)
    {
        $this->createdAt = $createdAt;
    
        return $this;
    }

    /**
     * Get createdAt
     *
     * @return \DateTime 
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set createdBy
     *
     * @param \Imbuzzit\ApiBundle\Users $createdBy
     * @return Stream
     */
    public function setCreatedBy(\Imbuzzit\ApiBundle\Users $createdBy = null)
    {
        $this->createdBy = $createdBy;
    
        return $this;
    }

    /**
     * Get createdBy
     *
     * @return \Imbuzzit\ApiBundle\Users 
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }
}