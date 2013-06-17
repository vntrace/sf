<?php

namespace Acme\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * UserTokens
 */
class UserTokens
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $userAgent;

    /**
     * @var string
     */
    private $token;

    /**
     * @var integer
     */
    private $created;

    /**
     * @var integer
     */
    private $expires;

    /**
     * @var \Acme\StoreBundle\Entity\Users
     */
    private $user;


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
     * Set userAgent
     *
     * @param string $userAgent
     * @return UserTokens
     */
    public function setUserAgent($userAgent)
    {
        $this->userAgent = $userAgent;
    
        return $this;
    }

    /**
     * Get userAgent
     *
     * @return string 
     */
    public function getUserAgent()
    {
        return $this->userAgent;
    }

    /**
     * Set token
     *
     * @param string $token
     * @return UserTokens
     */
    public function setToken($token)
    {
        $this->token = $token;
    
        return $this;
    }

    /**
     * Get token
     *
     * @return string 
     */
    public function getToken()
    {
        return $this->token;
    }

    /**
     * Set created
     *
     * @param integer $created
     * @return UserTokens
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
     * Set expires
     *
     * @param integer $expires
     * @return UserTokens
     */
    public function setExpires($expires)
    {
        $this->expires = $expires;
    
        return $this;
    }

    /**
     * Get expires
     *
     * @return integer 
     */
    public function getExpires()
    {
        return $this->expires;
    }

    /**
     * Set user
     *
     * @param \Acme\StoreBundle\Entity\Users $user
     * @return UserTokens
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
}
