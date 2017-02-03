<?php

namespace Entities;

/**
 * Project
 */
class Project
{
    /**
     * @var string
     */
    private $id;

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
    private $assignedUserId;

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
    private $description;

    /**
     * @var boolean
     */
    private $deleted = '0';

    /**
     * @var \DateTime
     */
    private $estimatedStartDate;

    /**
     * @var \DateTime
     */
    private $estimatedEndDate;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $priority;

    /**
     * @var boolean
     */
    private $overrideBusinessHours = '0';


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
     * Set dateEntered
     *
     * @param \DateTime $dateEntered
     *
     * @return Project
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
     * @return Project
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
     * Set assignedUserId
     *
     * @param string $assignedUserId
     *
     * @return Project
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
     * Set modifiedUserId
     *
     * @param string $modifiedUserId
     *
     * @return Project
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
     * @return Project
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
     * @return Project
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
     * Set description
     *
     * @param string $description
     *
     * @return Project
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
     * @return Project
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
     * Set estimatedStartDate
     *
     * @param \DateTime $estimatedStartDate
     *
     * @return Project
     */
    public function setEstimatedStartDate($estimatedStartDate)
    {
        $this->estimatedStartDate = $estimatedStartDate;

        return $this;
    }

    /**
     * Get estimatedStartDate
     *
     * @return \DateTime
     */
    public function getEstimatedStartDate()
    {
        return $this->estimatedStartDate;
    }

    /**
     * Set estimatedEndDate
     *
     * @param \DateTime $estimatedEndDate
     *
     * @return Project
     */
    public function setEstimatedEndDate($estimatedEndDate)
    {
        $this->estimatedEndDate = $estimatedEndDate;

        return $this;
    }

    /**
     * Get estimatedEndDate
     *
     * @return \DateTime
     */
    public function getEstimatedEndDate()
    {
        return $this->estimatedEndDate;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Project
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
     * @return Project
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
     * Set overrideBusinessHours
     *
     * @param boolean $overrideBusinessHours
     *
     * @return Project
     */
    public function setOverrideBusinessHours($overrideBusinessHours)
    {
        $this->overrideBusinessHours = $overrideBusinessHours;

        return $this;
    }

    /**
     * Get overrideBusinessHours
     *
     * @return boolean
     */
    public function getOverrideBusinessHours()
    {
        return $this->overrideBusinessHours;
    }
}

