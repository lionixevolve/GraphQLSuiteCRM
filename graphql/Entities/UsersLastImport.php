<?php

namespace Entities;

/**
 * UsersLastImport
 */
class UsersLastImport
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $assignedUserId;

    /**
     * @var string
     */
    private $importModule;

    /**
     * @var string
     */
    private $beanType;

    /**
     * @var string
     */
    private $beanId;

    /**
     * @var boolean
     */
    private $deleted;


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
     * Set assignedUserId
     *
     * @param string $assignedUserId
     *
     * @return UsersLastImport
     */
    public function setAssignedUserId($assignedUserId)
    {
        $this->assignedUserId = $assignedUserId;

        return $this;
    }

    /**
     * Get assignedUserId
     *
     * @return string
     */
    public function getAssignedUserId()
    {
        return $this->assignedUserId;
    }

    /**
     * Set importModule
     *
     * @param string $importModule
     *
     * @return UsersLastImport
     */
    public function setImportModule($importModule)
    {
        $this->importModule = $importModule;

        return $this;
    }

    /**
     * Get importModule
     *
     * @return string
     */
    public function getImportModule()
    {
        return $this->importModule;
    }

    /**
     * Set beanType
     *
     * @param string $beanType
     *
     * @return UsersLastImport
     */
    public function setBeanType($beanType)
    {
        $this->beanType = $beanType;

        return $this;
    }

    /**
     * Get beanType
     *
     * @return string
     */
    public function getBeanType()
    {
        return $this->beanType;
    }

    /**
     * Set beanId
     *
     * @param string $beanId
     *
     * @return UsersLastImport
     */
    public function setBeanId($beanId)
    {
        $this->beanId = $beanId;

        return $this;
    }

    /**
     * Get beanId
     *
     * @return string
     */
    public function getBeanId()
    {
        return $this->beanId;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return UsersLastImport
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

