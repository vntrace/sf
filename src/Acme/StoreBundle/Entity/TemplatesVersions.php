<?php

namespace Acme\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TemplatesVersions
 */
class TemplatesVersions
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $item;

    /**
     * @var boolean
     */
    private $status;

    /**
     * @var \Acme\StoreBundle\Entity\Templates
     */
    private $template;


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
     * Set item
     *
     * @param string $item
     * @return TemplatesVersions
     */
    public function setItem($item)
    {
        $this->item = $item;
    
        return $this;
    }

    /**
     * Get item
     *
     * @return string 
     */
    public function getItem()
    {
        return $this->item;
    }

    /**
     * Set status
     *
     * @param boolean $status
     * @return TemplatesVersions
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
     * @return TemplatesVersions
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
}
