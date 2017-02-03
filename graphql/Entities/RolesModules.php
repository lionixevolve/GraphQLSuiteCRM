<?php

namespace Entities;

/**
 * RolesModules
 */
class RolesModules
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $roleId;

    /**
     * @var string
     */
    private $moduleId;

    /**
     * @var boolean
     */
    private $allow = '0';

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
     * Set roleId
     *
     * @param string $roleId
     *
     * @return RolesModules
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
     * Set moduleId
     *
     * @param string $moduleId
     *
     * @return RolesModules
     */
    public function setModuleId($moduleId)
    {
        $this->moduleId = $moduleId;

        return $this;
    }

    /**
     * Get moduleId
     *
     * @return string
     */
    public function getModuleId()
    {
        return $this->moduleId;
    }

    /**
     * Set allow
     *
     * @param boolean $allow
     *
     * @return RolesModules
     */
    public function setAllow($allow)
    {
        $this->allow = $allow;

        return $this;
    }

    /**
     * Get allow
     *
     * @return boolean
     */
    public function getAllow()
    {
        return $this->allow;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     *
     * @return RolesModules
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
     * @return RolesModules
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

