<?php

namespace Acme\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TemplatesBrowsers
 */
class TemplatesBrowsers
{
    /**
     * @var string
     */
    private $templateId;

    /**
     * @var integer
     */
    private $browserId;


    /**
     * Set templateId
     *
     * @param string $templateId
     * @return TemplatesBrowsers
     */
    public function setTemplateId($templateId)
    {
        $this->templateId = $templateId;
    
        return $this;
    }

    /**
     * Get templateId
     *
     * @return string 
     */
    public function getTemplateId()
    {
        return $this->templateId;
    }

    /**
     * Set browserId
     *
     * @param integer $browserId
     * @return TemplatesBrowsers
     */
    public function setBrowserId($browserId)
    {
        $this->browserId = $browserId;
    
        return $this;
    }

    /**
     * Get browserId
     *
     * @return integer 
     */
    public function getBrowserId()
    {
        return $this->browserId;
    }
}
