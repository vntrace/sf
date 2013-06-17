<?php

namespace Acme\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Feedbacks
 */
class Feedbacks
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $message;

    /**
     * @var \Acme\StoreBundle\Entity\Users
     */
    private $owner;

    /**
     * @var \Acme\StoreBundle\Entity\Users
     */
    private $viewer;


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
     * Set message
     *
     * @param string $message
     * @return Feedbacks
     */
    public function setMessage($message)
    {
        $this->message = $message;
    
        return $this;
    }

    /**
     * Get message
     *
     * @return string 
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set owner
     *
     * @param \Acme\StoreBundle\Entity\Users $owner
     * @return Feedbacks
     */
    public function setOwner(\Acme\StoreBundle\Entity\Users $owner = null)
    {
        $this->owner = $owner;
    
        return $this;
    }

    /**
     * Get owner
     *
     * @return \Acme\StoreBundle\Entity\Users 
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * Set viewer
     *
     * @param \Acme\StoreBundle\Entity\Users $viewer
     * @return Feedbacks
     */
    public function setViewer(\Acme\StoreBundle\Entity\Users $viewer = null)
    {
        $this->viewer = $viewer;
    
        return $this;
    }

    /**
     * Get viewer
     *
     * @return \Acme\StoreBundle\Entity\Users 
     */
    public function getViewer()
    {
        return $this->viewer;
    }
}
