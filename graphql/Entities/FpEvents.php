<?php

namespace Entities;

/**
 * FpEvents
 */
class FpEvents
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
    private $durationHours;

    /**
     * @var integer
     */
    private $durationMinutes;

    /**
     * @var \DateTime
     */
    private $dateStart;

    /**
     * @var \DateTime
     */
    private $dateEnd;

    /**
     * @var string
     */
    private $budget;

    /**
     * @var string
     */
    private $currencyId;

    /**
     * @var string
     */
    private $inviteTemplates;

    /**
     * @var string
     */
    private $acceptRedirect;

    /**
     * @var string
     */
    private $declineRedirect;

    /**
     * @var string
     */
    private $activityStatusType;


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
     * @return FpEvents
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
     * @return FpEvents
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
     * @return FpEvents
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
     * @return FpEvents
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
     * @return FpEvents
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
     * @return FpEvents
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
     * @return FpEvents
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
     * @return FpEvents
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
     * Set durationHours
     *
     * @param integer $durationHours
     *
     * @return FpEvents
     */
    public function setDurationHours($durationHours)
    {
        $this->durationHours = $durationHours;

        return $this;
    }

    /**
     * Get durationHours
     *
     * @return integer
     */
    public function getDurationHours()
    {
        return $this->durationHours;
    }

    /**
     * Set durationMinutes
     *
     * @param integer $durationMinutes
     *
     * @return FpEvents
     */
    public function setDurationMinutes($durationMinutes)
    {
        $this->durationMinutes = $durationMinutes;

        return $this;
    }

    /**
     * Get durationMinutes
     *
     * @return integer
     */
    public function getDurationMinutes()
    {
        return $this->durationMinutes;
    }

    /**
     * Set dateStart
     *
     * @param \DateTime $dateStart
     *
     * @return FpEvents
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
     * Set dateEnd
     *
     * @param \DateTime $dateEnd
     *
     * @return FpEvents
     */
    public function setDateEnd($dateEnd)
    {
        $this->dateEnd = $dateEnd;

        return $this;
    }

    /**
     * Get dateEnd
     *
     * @return \DateTime
     */
    public function getDateEnd()
    {
        return $this->dateEnd;
    }

    /**
     * Set budget
     *
     * @param string $budget
     *
     * @return FpEvents
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;

        return $this;
    }

    /**
     * Get budget
     *
     * @return string
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * Set currencyId
     *
     * @param string $currencyId
     *
     * @return FpEvents
     */
    public function setCurrencyId($currencyId)
    {
        $this->currencyId = $currencyId;

        return $this;
    }

    /**
     * Get currencyId
     *
     * @return string
     */
    public function getCurrencyId()
    {
        return $this->currencyId;
    }

    /**
     * Set inviteTemplates
     *
     * @param string $inviteTemplates
     *
     * @return FpEvents
     */
    public function setInviteTemplates($inviteTemplates)
    {
        $this->inviteTemplates = $inviteTemplates;

        return $this;
    }

    /**
     * Get inviteTemplates
     *
     * @return string
     */
    public function getInviteTemplates()
    {
        return $this->inviteTemplates;
    }

    /**
     * Set acceptRedirect
     *
     * @param string $acceptRedirect
     *
     * @return FpEvents
     */
    public function setAcceptRedirect($acceptRedirect)
    {
        $this->acceptRedirect = $acceptRedirect;

        return $this;
    }

    /**
     * Get acceptRedirect
     *
     * @return string
     */
    public function getAcceptRedirect()
    {
        return $this->acceptRedirect;
    }

    /**
     * Set declineRedirect
     *
     * @param string $declineRedirect
     *
     * @return FpEvents
     */
    public function setDeclineRedirect($declineRedirect)
    {
        $this->declineRedirect = $declineRedirect;

        return $this;
    }

    /**
     * Get declineRedirect
     *
     * @return string
     */
    public function getDeclineRedirect()
    {
        return $this->declineRedirect;
    }

    /**
     * Set activityStatusType
     *
     * @param string $activityStatusType
     *
     * @return FpEvents
     */
    public function setActivityStatusType($activityStatusType)
    {
        $this->activityStatusType = $activityStatusType;

        return $this;
    }

    /**
     * Get activityStatusType
     *
     * @return string
     */
    public function getActivityStatusType()
    {
        return $this->activityStatusType;
    }
}

