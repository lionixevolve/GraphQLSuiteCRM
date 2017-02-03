<?php

namespace Entities;

/**
 * Folders
 */
class Folders
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $folderType;

    /**
     * @var string
     */
    private $parentFolder;

    /**
     * @var boolean
     */
    private $hasChild = '0';

    /**
     * @var boolean
     */
    private $isGroup = '0';

    /**
     * @var boolean
     */
    private $isDynamic = '0';

    /**
     * @var string
     */
    private $dynamicQuery;

    /**
     * @var string
     */
    private $assignToId;

    /**
     * @var string
     */
    private $createdBy;

    /**
     * @var string
     */
    private $modifiedBy;

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
     * Set name
     *
     * @param string $name
     *
     * @return Folders
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
     * Set folderType
     *
     * @param string $folderType
     *
     * @return Folders
     */
    public function setFolderType($folderType)
    {
        $this->folderType = $folderType;

        return $this;
    }

    /**
     * Get folderType
     *
     * @return string
     */
    public function getFolderType()
    {
        return $this->folderType;
    }

    /**
     * Set parentFolder
     *
     * @param string $parentFolder
     *
     * @return Folders
     */
    public function setParentFolder($parentFolder)
    {
        $this->parentFolder = $parentFolder;

        return $this;
    }

    /**
     * Get parentFolder
     *
     * @return string
     */
    public function getParentFolder()
    {
        return $this->parentFolder;
    }

    /**
     * Set hasChild
     *
     * @param boolean $hasChild
     *
     * @return Folders
     */
    public function setHasChild($hasChild)
    {
        $this->hasChild = $hasChild;

        return $this;
    }

    /**
     * Get hasChild
     *
     * @return boolean
     */
    public function getHasChild()
    {
        return $this->hasChild;
    }

    /**
     * Set isGroup
     *
     * @param boolean $isGroup
     *
     * @return Folders
     */
    public function setIsGroup($isGroup)
    {
        $this->isGroup = $isGroup;

        return $this;
    }

    /**
     * Get isGroup
     *
     * @return boolean
     */
    public function getIsGroup()
    {
        return $this->isGroup;
    }

    /**
     * Set isDynamic
     *
     * @param boolean $isDynamic
     *
     * @return Folders
     */
    public function setIsDynamic($isDynamic)
    {
        $this->isDynamic = $isDynamic;

        return $this;
    }

    /**
     * Get isDynamic
     *
     * @return boolean
     */
    public function getIsDynamic()
    {
        return $this->isDynamic;
    }

    /**
     * Set dynamicQuery
     *
     * @param string $dynamicQuery
     *
     * @return Folders
     */
    public function setDynamicQuery($dynamicQuery)
    {
        $this->dynamicQuery = $dynamicQuery;

        return $this;
    }

    /**
     * Get dynamicQuery
     *
     * @return string
     */
    public function getDynamicQuery()
    {
        return $this->dynamicQuery;
    }

    /**
     * Set assignToId
     *
     * @param string $assignToId
     *
     * @return Folders
     */
    public function setAssignToId($assignToId)
    {
        $this->assignToId = $assignToId;

        return $this;
    }

    /**
     * Get assignToId
     *
     * @return string
     */
    public function getAssignToId()
    {
        return $this->assignToId;
    }

    /**
     * Set createdBy
     *
     * @param string $createdBy
     *
     * @return Folders
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
     * Set modifiedBy
     *
     * @param string $modifiedBy
     *
     * @return Folders
     */
    public function setModifiedBy($modifiedBy)
    {
        $this->modifiedBy = $modifiedBy;

        return $this;
    }

    /**
     * Get modifiedBy
     *
     * @return string
     */
    public function getModifiedBy()
    {
        return $this->modifiedBy;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return Folders
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

