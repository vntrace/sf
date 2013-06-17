<?php

namespace Acme\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Orders
 */
class Orders
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var float
     */
    private $price;

    /**
     * @var integer
     */
    private $created;

    /**
     * @var integer
     */
    private $updated;

    /**
     * @var boolean
     */
    private $status;

    /**
     * @var \Acme\StoreBundle\Entity\Templates
     */
    private $template;

    /**
     * @var \Acme\StoreBundle\Entity\Users
     */
    private $author;

    /**
     * @var \Acme\StoreBundle\Entity\Users
     */
    private $buyer;


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
     * Set price
     *
     * @param float $price
     * @return Orders
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
     * Set created
     *
     * @param integer $created
     * @return Orders
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
     * @return Orders
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
     * Set status
     *
     * @param boolean $status
     * @return Orders
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
     * Set template
     *
     * @param \Acme\StoreBundle\Entity\Templates $template
     * @return Orders
     */
    public function setTemplate(\Acme\StoreBundle\Entity\Templates $template = null)
    {
        $this->template = $template;
    
        return $this;
    }

    /**
     * Get template
     *
     * @return \Acme\StoreBundle\Entity\Templates 
     */
    public function getTemplate()
    {
        return $this->template;
    }

    /**
     * Set author
     *
     * @param \Acme\StoreBundle\Entity\Users $author
     * @return Orders
     */
    public function setAuthor(\Acme\StoreBundle\Entity\Users $author = null)
    {
        $this->author = $author;
    
        return $this;
    }

    /**
     * Get author
     *
     * @return \Acme\StoreBundle\Entity\Users 
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set buyer
     *
     * @param \Acme\StoreBundle\Entity\Users $buyer
     * @return Orders
     */
    public function setBuyer(\Acme\StoreBundle\Entity\Users $buyer = null)
    {
        $this->buyer = $buyer;
    
        return $this;
    }

    /**
     * Get buyer
     *
     * @return \Acme\StoreBundle\Entity\Users 
     */
    public function getBuyer()
    {
        return $this->buyer;
    }
}
