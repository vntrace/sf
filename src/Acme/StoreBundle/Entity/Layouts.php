<?php

namespace Acme\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Layouts
 */
class Layouts
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $type;

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
     * Set type
     *
     * @param string $type
     * @return Layouts
     */
    public function setType($type)
    {
        $this->type = $type;
    
        return $this;
    }

    /**
     * Get type
     *
     * @return string 
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Add template
     *
     * @param \Acme\StoreBundle\Entity\Templates $template
     * @return Layouts
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
