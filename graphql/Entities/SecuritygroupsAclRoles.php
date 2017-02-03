<?php

namespace Entities;

/**
 * SecuritygroupsAclRoles
 */
class SecuritygroupsAclRoles
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
    private $roleId;

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
     * @return SecuritygroupsAclRoles
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
     * Set roleId
     *
     * @param string $roleId
     *
     * @return SecuritygroupsAclRoles
     */
    public function setRoleId($roleId)
    {
        $this->roleId = $roleId;

        return $this;
    }

    /**
     * Get roleId
     *
     * @return string
     */
    public function getRoleId()
    {
        return $this->roleId;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     *
     * @return SecuritygroupsAclRoles
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
     * @return SecuritygroupsAclRoles
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

