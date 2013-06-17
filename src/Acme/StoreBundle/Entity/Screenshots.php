<?php

namespace Acme\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Screenshots
 */
class Screenshots
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $thumb;

    /**
     * @var string
     */
    private $large;


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
     * Set thumb
     *
     * @param string $thumb
     * @return Screenshots
     */
    public function setThumb($thumb)
    {
        $this->thumb = $thumb;
    
        return $this;
    }

    /**
     * Get thumb
     *
     * @return string 
     */
    public function getThumb()
    {
        return $this->thumb;
    }

    /**
     * Set large
     *
     * @param string $large
     * @return Screenshots
     */
    public function setLarge($large)
    {
        $this->large = $large;
    
        return $this;
    }

    /**
     * Get large
     *
     * @return string 
     */
    public function getLarge()
    {
        return $this->large;
    }
}
