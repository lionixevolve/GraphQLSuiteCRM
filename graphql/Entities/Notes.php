<?php

namespace Entities;

/**
 * Notes
 */
class Notes
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
     * @var \DateTime
     */
    private $dateEntered;

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
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $fileMimeType;

    /**
     * @var string
     */
    private $filename;

    /**
     * @var string
     */
    private $parentType;

    /**
     * @var string
     */
    private $parentId;

    /**
     * @var string
     */
    private $contactId;

    /**
     * @var boolean
     */
    private $portalFlag;

    /**
     * @var boolean
     */
    private $embedFlag = '0';

    /**
     * @var string
     */
    private $description;

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
     * Set assignedUserId
     *
     * @param string $assignedUserId
     *
     * @return Notes
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
     * Set dateEntered
     *
     * @param \DateTime $dateEntered
     *
     * @return Notes
     */
    public function setDateEntered($dateEntered)
    {
        $this->dateEntered = $dateEntered;

        return $this;
    }

    /**
     * Get dateEntered
     *
     * @return \DateTime
     */
    public function getDateEntered()
    {
        return $this->dateEntered;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     *
     * @return Notes
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
     * @return Notes
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
     * @return Notes
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
     * Set name
     *
     * @param string $name
     *
     * @return Notes
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
     * Set fileMimeType
     *
     * @param string $fileMimeType
     *
     * @return Notes
     */
    public function setFileMimeType($fileMimeType)
    {
        $this->fileMimeType = $fileMimeType;

        return $this;
    }

    /**
     * Get fileMimeType
     *
     * @return string
     */
    public function getFileMimeType()
    {
        return $this->fileMimeType;
    }

    /**
     * Set filename
     *
     * @param string $filename
     *
     * @return Notes
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set parentType
     *
     * @param string $parentType
     *
     * @return Notes
     */
    public function setParentType($parentType)
    {
        $this->parentType = $parentType;

        return $this;
    }

    /**
     * Get parentType
     *
     * @return string
     */
    public function getParentType()
    {
        return $this->parentType;
    }

    /**
     * Set parentId
     *
     * @param string $parentId
     *
     * @return Notes
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Get parentId
     *
     * @return string
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set contactId
     *
     * @param string $contactId
     *
     * @return Notes
     */
    public function setContactId($contactId)
    {
        $this->contactId = $contactId;

        return $this;
    }

    /**
     * Get contactId
     *
     * @return string
     */
    public function getContactId()
    {
        return $this->contactId;
    }

    /**
     * Set portalFlag
     *
     * @param boolean $portalFlag
     *
     * @return Notes
     */
    public function setPortalFlag($portalFlag)
    {
        $this->portalFlag = $portalFlag;

        return $this;
    }

    /**
     * Get portalFlag
     *
     * @return boolean
     */
    public function getPortalFlag()
    {
        return $this->portalFlag;
    }

    /**
     * Set embedFlag
     *
     * @param boolean $embedFlag
     *
     * @return Notes
     */
    public function setEmbedFlag($embedFlag)
    {
        $this->embedFlag = $embedFlag;

        return $this;
    }

    /**
     * Get embedFlag
     *
     * @return boolean
     */
    public function getEmbedFlag()
    {
        return $this->embedFlag;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Notes
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return Notes
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

