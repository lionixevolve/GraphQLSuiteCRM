<?php

namespace Entities;

/**
 * SecuritygroupsRecords
 */
class SecuritygroupsRecords
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
    private $recordId;

    /**
     * @var string
     */
    private $module;

    /**
     * @var \DateTime
     */
    private $dateModified;

    /**
     * @var string
     */
    private $modifiedUserId;

    /**
     * @var string
     */
    private $createdBy;

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
     * @return SecuritygroupsRecords
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
     * Set recordId
     *
     * @param string $recordId
     *
     * @return SecuritygroupsRecords
     */
    public function setRecordId($recordId)
    {
        $this->recordId = $recordId;

        return $this;
    }

    /**
     * Get recordId
     *
     * @return string
     */
    public function getRecordId()
    {
        return $this->recordId;
    }

    /**
     * Set module
     *
     * @param string $module
     *
     * @return SecuritygroupsRecords
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
     * @return SecuritygroupsRecords
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
     * Set modifiedUserId
     *
     * @param string $modifiedUserId
     *
     * @return SecuritygroupsRecords
     */
    public function setModifiedUserId($modifiedUserId)
    {
        $this->modifiedUserId = $modifiedUserId;

        return $this;
    }

    /**
     * Get modifiedUserId
     *
     * @return string
     */
    public function getModifiedUserId()
    {
        return $this->modifiedUserId;
    }

    /**
     * Set createdBy
     *
     * @param string $createdBy
     *
     * @return SecuritygroupsRecords
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return SecuritygroupsRecords
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

