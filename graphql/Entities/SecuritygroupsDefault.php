<?php

namespace Entities;

/**
 * SecuritygroupsDefault
 */
class SecuritygroupsDefault
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $securitygroupId;

    /**
     * @var string
     */
    private $module;

    /**
     * @var \DateTime
     */
    private $dateModified;

    /**
     * @var boolean
     */
    private $deleted = '0';


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
     * Set securitygroupId
     *
     * @param string $securitygroupId
     *
     * @return SecuritygroupsDefault
     */
    public function setSecuritygroupId($securitygroupId)
    {
        $this->securitygroupId = $securitygroupId;

        return $this;
    }

    /**
     * Get securitygroupId
     *
     * @return string
     */
    public function getSecuritygroupId()
    {
        return $this->securitygroupId;
    }

    /**
     * Set module
     *
     * @param string $module
     *
     * @return SecuritygroupsDefault
     */
    public function setModule($module)
    {
        $this->module = $module;

        return $this;
    }

    /**
     * Get module
     *
     * @return string
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     *
     * @return SecuritygroupsDefault
     */
    public function setDateModified($dateModified)
    {
        $this->dateModified = $dateModified;

        return $this;
    }

    /**
     * Get dateModified
     *
     * @return \DateTime
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return SecuritygroupsDefault
     */
    public function setDeleted($deleted)
    {
        $this->deleted = $deleted;

        return $this;
    }

    /**
     * Get deleted
     *
     * @return boolean
     */
    public function getDeleted()
    {
        return $this->deleted;
    }
}

