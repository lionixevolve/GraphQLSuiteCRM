<?php

namespace Entities;

/**
 * AmTasktemplates
 */
class AmTasktemplates
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
     * @var string
     */
    private $status = 'Not Started';

    /**
     * @var string
     */
    private $priority = 'High';

    /**
     * @var integer
     */
    private $percentComplete = '0';

    /**
     * @var integer
     */
    private $predecessors;

    /**
     * @var boolean
     */
    private $milestoneFlag = '0';

    /**
     * @var string
     */
    private $relationshipType = 'FS';

    /**
     * @var integer
     */
    private $taskNumber;

    /**
     * @var integer
     */
    private $orderNumber;

    /**
     * @var integer
     */
    private $estimatedEffort;

    /**
     * @var string
     */
    private $utilization = '0';

    /**
     * @var integer
     */
    private $duration;


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
     * @return AmTasktemplates
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
     * @return AmTasktemplates
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
     * @return AmTasktemplates
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
     * @return AmTasktemplates
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
     * @return AmTasktemplates
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
     * @return AmTasktemplates
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
     * @return AmTasktemplates
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
     * @return AmTasktemplates
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
     * Set status
     *
     * @param string $status
     *
     * @return AmTasktemplates
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
     * @return AmTasktemplates
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
     * Set percentComplete
     *
     * @param integer $percentComplete
     *
     * @return AmTasktemplates
     */
    public function setPercentComplete($percentComplete)
    {
        $this->percentComplete = $percentComplete;

        return $this;
    }

    /**
     * Get percentComplete
     *
     * @return integer
     */
    public function getPercentComplete()
    {
        return $this->percentComplete;
    }

    /**
     * Set predecessors
     *
     * @param integer $predecessors
     *
     * @return AmTasktemplates
     */
    public function setPredecessors($predecessors)
    {
        $this->predecessors = $predecessors;

        return $this;
    }

    /**
     * Get predecessors
     *
     * @return integer
     */
    public function getPredecessors()
    {
        return $this->predecessors;
    }

    /**
     * Set milestoneFlag
     *
     * @param boolean $milestoneFlag
     *
     * @return AmTasktemplates
     */
    public function setMilestoneFlag($milestoneFlag)
    {
        $this->milestoneFlag = $milestoneFlag;

        return $this;
    }

    /**
     * Get milestoneFlag
     *
     * @return boolean
     */
    public function getMilestoneFlag()
    {
        return $this->milestoneFlag;
    }

    /**
     * Set relationshipType
     *
     * @param string $relationshipType
     *
     * @return AmTasktemplates
     */
    public function setRelationshipType($relationshipType)
    {
        $this->relationshipType = $relationshipType;

        return $this;
    }

    /**
     * Get relationshipType
     *
     * @return string
     */
    public function getRelationshipType()
    {
        return $this->relationshipType;
    }

    /**
     * Set taskNumber
     *
     * @param integer $taskNumber
     *
     * @return AmTasktemplates
     */
    public function setTaskNumber($taskNumber)
    {
        $this->taskNumber = $taskNumber;

        return $this;
    }

    /**
     * Get taskNumber
     *
     * @return integer
     */
    public function getTaskNumber()
    {
        return $this->taskNumber;
    }

    /**
     * Set orderNumber
     *
     * @param integer $orderNumber
     *
     * @return AmTasktemplates
     */
    public function setOrderNumber($orderNumber)
    {
        $this->orderNumber = $orderNumber;

        return $this;
    }

    /**
     * Get orderNumber
     *
     * @return integer
     */
    public function getOrderNumber()
    {
        return $this->orderNumber;
    }

    /**
     * Set estimatedEffort
     *
     * @param integer $estimatedEffort
     *
     * @return AmTasktemplates
     */
    public function setEstimatedEffort($estimatedEffort)
    {
        $this->estimatedEffort = $estimatedEffort;

        return $this;
    }

    /**
     * Get estimatedEffort
     *
     * @return integer
     */
    public function getEstimatedEffort()
    {
        return $this->estimatedEffort;
    }

    /**
     * Set utilization
     *
     * @param string $utilization
     *
     * @return AmTasktemplates
     */
    public function setUtilization($utilization)
    {
        $this->utilization = $utilization;

        return $this;
    }

    /**
     * Get utilization
     *
     * @return string
     */
    public function getUtilization()
    {
        return $this->utilization;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     *
     * @return AmTasktemplates
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;

        return $this;
    }

    /**
     * Get duration
     *
     * @return integer
     */
    public function getDuration()
    {
        return $this->duration;
    }
}

