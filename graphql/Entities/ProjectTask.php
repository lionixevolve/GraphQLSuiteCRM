<?php

namespace Entities;

/**
 * ProjectTask
 */
class ProjectTask
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
    private $projectId;

    /**
     * @var integer
     */
    private $projectTaskId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $relationshipType;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $predecessors;

    /**
     * @var \DateTime
     */
    private $dateStart;

    /**
     * @var integer
     */
    private $timeStart;

    /**
     * @var integer
     */
    private $timeFinish;

    /**
     * @var \DateTime
     */
    private $dateFinish;

    /**
     * @var integer
     */
    private $duration;

    /**
     * @var string
     */
    private $durationUnit;

    /**
     * @var integer
     */
    private $actualDuration;

    /**
     * @var integer
     */
    private $percentComplete;

    /**
     * @var \DateTime
     */
    private $dateDue;

    /**
     * @var \DateTime
     */
    private $timeDue;

    /**
     * @var integer
     */
    private $parentTaskId;

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
    private $priority;

    /**
     * @var string
     */
    private $createdBy;

    /**
     * @var boolean
     */
    private $milestoneFlag;

    /**
     * @var integer
     */
    private $orderNumber = '1';

    /**
     * @var integer
     */
    private $taskNumber;

    /**
     * @var integer
     */
    private $estimatedEffort;

    /**
     * @var integer
     */
    private $actualEffort;

    /**
     * @var boolean
     */
    private $deleted = '0';

    /**
     * @var integer
     */
    private $utilization = '100';


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
     * @return ProjectTask
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
     * @return ProjectTask
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
     * Set projectId
     *
     * @param string $projectId
     *
     * @return ProjectTask
     */
    public function setProjectId($projectId)
    {
        $this->projectId = $projectId;

        return $this;
    }

    /**
     * Get projectId
     *
     * @return string
     */
    public function getProjectId()
    {
        return $this->projectId;
    }

    /**
     * Set projectTaskId
     *
     * @param integer $projectTaskId
     *
     * @return ProjectTask
     */
    public function setProjectTaskId($projectTaskId)
    {
        $this->projectTaskId = $projectTaskId;

        return $this;
    }

    /**
     * Get projectTaskId
     *
     * @return integer
     */
    public function getProjectTaskId()
    {
        return $this->projectTaskId;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return ProjectTask
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
     * Set status
     *
     * @param string $status
     *
     * @return ProjectTask
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
     * Set relationshipType
     *
     * @param string $relationshipType
     *
     * @return ProjectTask
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
     * Set description
     *
     * @param string $description
     *
     * @return ProjectTask
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
     * Set predecessors
     *
     * @param string $predecessors
     *
     * @return ProjectTask
     */
    public function setPredecessors($predecessors)
    {
        $this->predecessors = $predecessors;

        return $this;
    }

    /**
     * Get predecessors
     *
     * @return string
     */
    public function getPredecessors()
    {
        return $this->predecessors;
    }

    /**
     * Set dateStart
     *
     * @param \DateTime $dateStart
     *
     * @return ProjectTask
     */
    public function setDateStart($dateStart)
    {
        $this->dateStart = $dateStart;

        return $this;
    }

    /**
     * Get dateStart
     *
     * @return \DateTime
     */
    public function getDateStart()
    {
        return $this->dateStart;
    }

    /**
     * Set timeStart
     *
     * @param integer $timeStart
     *
     * @return ProjectTask
     */
    public function setTimeStart($timeStart)
    {
        $this->timeStart = $timeStart;

        return $this;
    }

    /**
     * Get timeStart
     *
     * @return integer
     */
    public function getTimeStart()
    {
        return $this->timeStart;
    }

    /**
     * Set timeFinish
     *
     * @param integer $timeFinish
     *
     * @return ProjectTask
     */
    public function setTimeFinish($timeFinish)
    {
        $this->timeFinish = $timeFinish;

        return $this;
    }

    /**
     * Get timeFinish
     *
     * @return integer
     */
    public function getTimeFinish()
    {
        return $this->timeFinish;
    }

    /**
     * Set dateFinish
     *
     * @param \DateTime $dateFinish
     *
     * @return ProjectTask
     */
    public function setDateFinish($dateFinish)
    {
        $this->dateFinish = $dateFinish;

        return $this;
    }

    /**
     * Get dateFinish
     *
     * @return \DateTime
     */
    public function getDateFinish()
    {
        return $this->dateFinish;
    }

    /**
     * Set duration
     *
     * @param integer $duration
     *
     * @return ProjectTask
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

    /**
     * Set durationUnit
     *
     * @param string $durationUnit
     *
     * @return ProjectTask
     */
    public function setDurationUnit($durationUnit)
    {
        $this->durationUnit = $durationUnit;

        return $this;
    }

    /**
     * Get durationUnit
     *
     * @return string
     */
    public function getDurationUnit()
    {
        return $this->durationUnit;
    }

    /**
     * Set actualDuration
     *
     * @param integer $actualDuration
     *
     * @return ProjectTask
     */
    public function setActualDuration($actualDuration)
    {
        $this->actualDuration = $actualDuration;

        return $this;
    }

    /**
     * Get actualDuration
     *
     * @return integer
     */
    public function getActualDuration()
    {
        return $this->actualDuration;
    }

    /**
     * Set percentComplete
     *
     * @param integer $percentComplete
     *
     * @return ProjectTask
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
     * Set dateDue
     *
     * @param \DateTime $dateDue
     *
     * @return ProjectTask
     */
    public function setDateDue($dateDue)
    {
        $this->dateDue = $dateDue;

        return $this;
    }

    /**
     * Get dateDue
     *
     * @return \DateTime
     */
    public function getDateDue()
    {
        return $this->dateDue;
    }

    /**
     * Set timeDue
     *
     * @param \DateTime $timeDue
     *
     * @return ProjectTask
     */
    public function setTimeDue($timeDue)
    {
        $this->timeDue = $timeDue;

        return $this;
    }

    /**
     * Get timeDue
     *
     * @return \DateTime
     */
    public function getTimeDue()
    {
        return $this->timeDue;
    }

    /**
     * Set parentTaskId
     *
     * @param integer $parentTaskId
     *
     * @return ProjectTask
     */
    public function setParentTaskId($parentTaskId)
    {
        $this->parentTaskId = $parentTaskId;

        return $this;
    }

    /**
     * Get parentTaskId
     *
     * @return integer
     */
    public function getParentTaskId()
    {
        return $this->parentTaskId;
    }

    /**
     * Set assignedUserId
     *
     * @param string $assignedUserId
     *
     * @return ProjectTask
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
     * @return ProjectTask
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
     * Set priority
     *
     * @param string $priority
     *
     * @return ProjectTask
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
     * Set createdBy
     *
     * @param string $createdBy
     *
     * @return ProjectTask
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
     * Set milestoneFlag
     *
     * @param boolean $milestoneFlag
     *
     * @return ProjectTask
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
     * Set orderNumber
     *
     * @param integer $orderNumber
     *
     * @return ProjectTask
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
     * Set taskNumber
     *
     * @param integer $taskNumber
     *
     * @return ProjectTask
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
     * Set estimatedEffort
     *
     * @param integer $estimatedEffort
     *
     * @return ProjectTask
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
     * Set actualEffort
     *
     * @param integer $actualEffort
     *
     * @return ProjectTask
     */
    public function setActualEffort($actualEffort)
    {
        $this->actualEffort = $actualEffort;

        return $this;
    }

    /**
     * Get actualEffort
     *
     * @return integer
     */
    public function getActualEffort()
    {
        return $this->actualEffort;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return ProjectTask
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
     * Set utilization
     *
     * @param integer $utilization
     *
     * @return ProjectTask
     */
    public function setUtilization($utilization)
    {
        $this->utilization = $utilization;

        return $this;
    }

    /**
     * Get utilization
     *
     * @return integer
     */
    public function getUtilization()
    {
        return $this->utilization;
    }
}

