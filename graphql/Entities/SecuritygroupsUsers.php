<?php

namespace Entities;

/**
 * SecuritygroupsUsers
 */
class SecuritygroupsUsers
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dateModified;

    /**
     * @var boolean
     */
    private $deleted = '0';

    /**
     * @var string
     */
    private $securitygroupId;

    /**
     * @var string
     */
    private $userId;

    /**
     * @var boolean
     */
    private $primaryGroup;

    /**
     * @var boolean
     */
    private $noninheritable = '0';


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
     * Set dateModified
     *
     * @param \DateTime $dateModified
     *
     * @return SecuritygroupsUsers
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
     * @return SecuritygroupsUsers
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

    /**
     * Set securitygroupId
     *
     * @param string $securitygroupId
     *
     * @return SecuritygroupsUsers
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
     * Set userId
     *
     * @param string $userId
     *
     * @return SecuritygroupsUsers
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set primaryGroup
     *
     * @param boolean $primaryGroup
     *
     * @return SecuritygroupsUsers
     */
    public function setPrimaryGroup($primaryGroup)
    {
        $this->primaryGroup = $primaryGroup;

        return $this;
    }

    /**
     * Get primaryGroup
     *
     * @return boolean
     */
    public function getPrimaryGroup()
    {
        return $this->primaryGroup;
    }

    /**
     * Set noninheritable
     *
     * @param boolean $noninheritable
     *
     * @return SecuritygroupsUsers
     */
    public function setNoninheritable($noninheritable)
    {
        $this->noninheritable = $noninheritable;

        return $this;
    }

    /**
     * Get noninheritable
     *
     * @return boolean
     */
    public function getNoninheritable()
    {
        return $this->noninheritable;
    }
}

