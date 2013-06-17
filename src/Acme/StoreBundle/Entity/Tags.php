<?php

namespace Acme\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tags
 */
class Tags
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $template;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->template = new \Doctrine\Common\Collections\ArrayCollection();
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
     * Set name
     *
     * @param string $name
     * @return Tags
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
     * Add template
     *
     * @param \Acme\StoreBundle\Entity\Templates $template
     * @return Tags
     */
    public function addTemplate(\Acme\StoreBundle\Entity\Templates $template)
    {
        $this->template[] = $template;
    
        return $this;
    }

    /**
     * Remove template
     *
     * @param \Acme\StoreBundle\Entity\Templates $template
     */
    public function removeTemplate(\Acme\StoreBundle\Entity\Templates $template)
    {
        $this->template->removeElement($template);
    }

    /**
     * Get template
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getTemplate()
    {
        return $this->template;
    }
}
