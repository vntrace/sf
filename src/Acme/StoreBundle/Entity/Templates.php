<?php

namespace Acme\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Templates
 */
class Templates
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $slug;

    /**
     * @var float
     */
    private $price;

    /**
     * @var boolean
     */
    private $exclusivity;

    /**
     * @var string
     */
    private $license;

    /**
     * @var boolean
     */
    private $status;

    /**
     * @var boolean
     */
    private $isDeploy;

    /**
     * @var integer
     */
    private $created;

    /**
     * @var integer
     */
    private $updated;

    /**
     * @var string
     */
    private $description;

    /**
     * @var \Acme\StoreBundle\Entity\Users
     */
    private $user;

    /**
     * @var \Acme\StoreBundle\Entity\Screenshots
     */
    private $screenshot;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $layout;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $tag;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->layout = new \Doctrine\Common\Collections\ArrayCollection();
        $this->tag = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * Get id
     *
     * @return string 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Templates
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
     * Set slug
     *
     * @param string $slug
     * @return Templates
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;
    
        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }

    /**
     * Set price
     *
     * @param float $price
     * @return Templates
     */
    public function setPrice($price)
    {
        $this->price = $price;
    
        return $this;
    }

    /**
     * Get price
     *
     * @return float 
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set exclusivity
     *
     * @param boolean $exclusivity
     * @return Templates
     */
    public function setExclusivity($exclusivity)
    {
        $this->exclusivity = $exclusivity;
    
        return $this;
    }

    /**
     * Get exclusivity
     *
     * @return boolean 
     */
    public function getExclusivity()
    {
        return $this->exclusivity;
    }

    /**
     * Set license
     *
     * @param string $license
     * @return Templates
     */
    public function setLicense($license)
    {
        $this->license = $license;
    
        return $this;
    }

    /**
     * Get license
     *
     * @return string 
     */
    public function getLicense()
    {
        return $this->license;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return Templates
     */
    public function setStatus($status)
    {
        $this->status = $status;
    
        return $this;
    }

    /**
     * Get status
     *
     * @return boolean 
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set isDeploy
     *
     * @param boolean $isDeploy
     * @return Templates
     */
    public function setIsDeploy($isDeploy)
    {
        $this->isDeploy = $isDeploy;
    
        return $this;
    }

    /**
     * Get isDeploy
     *
     * @return boolean 
     */
    public function getIsDeploy()
    {
        return $this->isDeploy;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return Templates
     */
    public function setCreated($created)
    {
        $this->created = $created;
    
        return $this;
    }

    /**
     * Get created
     *
     * @return integer 
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * Set updated
     *
     * @param integer $updated
     * @return Templates
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
    
        return $this;
    }

    /**
     * Get updated
     *
     * @return integer 
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return Templates
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set user
     *
     * @param \Acme\StoreBundle\Entity\Users $user
     * @return Templates
     */
    public function setUser(\Acme\StoreBundle\Entity\Users $user = null)
    {
        $this->user = $user;
    
        return $this;
    }

    /**
     * Get user
     *
     * @return \Acme\StoreBundle\Entity\Users 
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set screenshot
     *
     * @param \Acme\StoreBundle\Entity\Screenshots $screenshot
     * @return Templates
     */
    public function setScreenshot(\Acme\StoreBundle\Entity\Screenshots $screenshot = null)
    {
        $this->screenshot = $screenshot;
    
        return $this;
    }

    /**
     * Get screenshot
     *
     * @return \Acme\StoreBundle\Entity\Screenshots 
     */
    public function getScreenshot()
    {
        return $this->screenshot;
    }

    /**
     * Add layout
     *
     * @param \Acme\StoreBundle\Entity\Layouts $layout
     * @return Templates
     */
    public function addLayout(\Acme\StoreBundle\Entity\Layouts $layout)
    {
        $this->layout[] = $layout;
    
        return $this;
    }

    /**
     * Remove layout
     *
     * @param \Acme\StoreBundle\Entity\Layouts $layout
     */
    public function removeLayout(\Acme\StoreBundle\Entity\Layouts $layout)
    {
        $this->layout->removeElement($layout);
    }

    /**
     * Get layout
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getLayout()
    {
        return $this->layout;
    }

    /**
     * Add tag
     *
     * @param \Acme\StoreBundle\Entity\Tags $tag
     * @return Templates
     */
    public function addTag(\Acme\StoreBundle\Entity\Tags $tag)
    {
        $this->tag[] = $tag;
    
        return $this;
    }

    /**
     * Remove tag
     *
     * @param \Acme\StoreBundle\Entity\Tags $tag
     */
    public function removeTag(\Acme\StoreBundle\Entity\Tags $tag)
    {
        $this->tag->removeElement($tag);
    }

    /**
     * Get tag
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTag()
    {
        return $this->tag;
    }
}
