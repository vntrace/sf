<?php

namespace Acme\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Payments
 */
class Payments
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $taxName;

    /**
     * @var string
     */
    private $taxNumber;

    /**
     * @var string
     */
    private $paypal;

    /**
     * @var \Acme\StoreBundle\Entity\Users
     */
    private $user;

    /**
     * @var \Acme\StoreBundle\Entity\Organizations
     */
    private $organization;


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
     * Set taxName
     *
     * @param string $taxName
     * @return Payments
     */
    public function setTaxName($taxName)
    {
        $this->taxName = $taxName;
    
        return $this;
    }

    /**
     * Get taxName
     *
     * @return string 
     */
    public function getTaxName()
    {
        return $this->taxName;
    }

    /**
     * Set taxNumber
     *
     * @param string $taxNumber
     * @return Payments
     */
    public function setTaxNumber($taxNumber)
    {
        $this->taxNumber = $taxNumber;
    
        return $this;
    }

    /**
     * Get taxNumber
     *
     * @return string 
     */
    public function getTaxNumber()
    {
        return $this->taxNumber;
    }

    /**
     * Set paypal
     *
     * @param string $paypal
     * @return Payments
     */
    public function setPaypal($paypal)
    {
        $this->paypal = $paypal;
    
        return $this;
    }

    /**
     * Get paypal
     *
     * @return string 
     */
    public function getPaypal()
    {
        return $this->paypal;
    }

    /**
     * Set user
     *
     * @param \Acme\StoreBundle\Entity\Users $user
     * @return Payments
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
     * Set organization
     *
     * @param \Acme\StoreBundle\Entity\Organizations $organization
     * @return Payments
     */
    public function setOrganization(\Acme\StoreBundle\Entity\Organizations $organization = null)
    {
        $this->organization = $organization;
    
        return $this;
    }

    /**
     * Get organization
     *
     * @return \Acme\StoreBundle\Entity\Organizations 
     */
    public function getOrganization()
    {
        return $this->organization;
    }
}
