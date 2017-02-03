<?php

namespace Entities;

/**
 * Bugs
 */
class Bugs
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
    private $description;

    /**
     * @var boolean
     */
    private $deleted = '0';

    /**
     * @var string
     */
    private $assignedUserId;

    /**
     * @var integer
     */
    private $bugNumber;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $priority;

    /**
     * @var string
     */
    private $resolution;

    /**
     * @var string
     */
    private $workLog;

    /**
     * @var string
     */
    private $foundInRelease;

    /**
     * @var string
     */
    private $fixedInRelease;

    /**
     * @var string
     */
    private $source;

    /**
     * @var string
     */
    private $productCategory;


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
     * @return Bugs
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
     * Set dateEntered
     *
     * @param \DateTime $dateEntered
     *
     * @return Bugs
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
     * @return Bugs
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
     * @return Bugs
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
     * @return Bugs
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
     * Set description
     *
     * @param string $description
     *
     * @return Bugs
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
     * @return Bugs
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
     * Set assignedUserId
     *
     * @param string $assignedUserId
     *
     * @return Bugs
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
     * Set bugNumber
     *
     * @param integer $bugNumber
     *
     * @return Bugs
     */
    public function setBugNumber($bugNumber)
    {
        $this->bugNumber = $bugNumber;

        return $this;
    }

    /**
     * Get bugNumber
     *
     * @return integer
     */
    public function getBugNumber()
    {
        return $this->bugNumber;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return Bugs
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Bugs
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set priority
     *
     * @param string $priority
     *
     * @return Bugs
     */
    public function setPriority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Get priority
     *
     * @return string
     */
    public function getPriority()
    {
        return $this->priority;
    }

    /**
     * Set resolution
     *
     * @param string $resolution
     *
     * @return Bugs
     */
    public function setResolution($resolution)
    {
        $this->resolution = $resolution;

        return $this;
    }

    /**
     * Get resolution
     *
     * @return string
     */
    public function getResolution()
    {
        return $this->resolution;
    }

    /**
     * Set workLog
     *
     * @param string $workLog
     *
     * @return Bugs
     */
    public function setWorkLog($workLog)
    {
        $this->workLog = $workLog;

        return $this;
    }

    /**
     * Get workLog
     *
     * @return string
     */
    public function getWorkLog()
    {
        return $this->workLog;
    }

    /**
     * Set foundInRelease
     *
     * @param string $foundInRelease
     *
     * @return Bugs
     */
    public function setFoundInRelease($foundInRelease)
    {
        $this->foundInRelease = $foundInRelease;

        return $this;
    }

    /**
     * Get foundInRelease
     *
     * @return string
     */
    public function getFoundInRelease()
    {
        return $this->foundInRelease;
    }

    /**
     * Set fixedInRelease
     *
     * @param string $fixedInRelease
     *
     * @return Bugs
     */
    public function setFixedInRelease($fixedInRelease)
    {
        $this->fixedInRelease = $fixedInRelease;

        return $this;
    }

    /**
     * Get fixedInRelease
     *
     * @return string
     */
    public function getFixedInRelease()
    {
        return $this->fixedInRelease;
    }

    /**
     * Set source
     *
     * @param string $source
     *
     * @return Bugs
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set productCategory
     *
     * @param string $productCategory
     *
     * @return Bugs
     */
    public function setProductCategory($productCategory)
    {
        $this->productCategory = $productCategory;

        return $this;
    }

    /**
     * Get productCategory
     *
     * @return string
     */
    public function getProductCategory()
    {
        return $this->productCategory;
    }
}

