<?php

namespace Entities;

/**
 * Calls
 */
class Calls
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
    private $parentType;

    /**
     * @var string
     */
    private $status = 'Planned';

    /**
     * @var string
     */
    private $direction;

    /**
     * @var string
     */
    private $parentId;

    /**
     * @var integer
     */
    private $reminderTime = '-1';

    /**
     * @var integer
     */
    private $emailReminderTime = '-1';

    /**
     * @var boolean
     */
    private $emailReminderSent = '0';

    /**
     * @var string
     */
    private $outlookId;

    /**
     * @var string
     */
    private $repeatType;

    /**
     * @var integer
     */
    private $repeatInterval = '1';

    /**
     * @var string
     */
    private $repeatDow;

    /**
     * @var \DateTime
     */
    private $repeatUntil;

    /**
     * @var integer
     */
    private $repeatCount;

    /**
     * @var string
     */
    private $repeatParentId;

    /**
     * @var string
     */
    private $recurringSource;


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
     * @return Calls
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
     * @return Calls
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
     * @return Calls
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
     * @return Calls
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
     * @return Calls
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
     * @return Calls
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
     * @return Calls
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
     * @return Calls
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
     * @return Calls
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
     * @return Calls
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
     * @return Calls
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
     * @return Calls
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
     * Set parentType
     *
     * @param string $parentType
     *
     * @return Calls
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
     * Set status
     *
     * @param string $status
     *
     * @return Calls
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
     * Set direction
     *
     * @param string $direction
     *
     * @return Calls
     */
    public function setDirection($direction)
    {
        $this->direction = $direction;

        return $this;
    }

    /**
     * Get direction
     *
     * @return string
     */
    public function getDirection()
    {
        return $this->direction;
    }

    /**
     * Set parentId
     *
     * @param string $parentId
     *
     * @return Calls
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
     * Set reminderTime
     *
     * @param integer $reminderTime
     *
     * @return Calls
     */
    public function setReminderTime($reminderTime)
    {
        $this->reminderTime = $reminderTime;

        return $this;
    }

    /**
     * Get reminderTime
     *
     * @return integer
     */
    public function getReminderTime()
    {
        return $this->reminderTime;
    }

    /**
     * Set emailReminderTime
     *
     * @param integer $emailReminderTime
     *
     * @return Calls
     */
    public function setEmailReminderTime($emailReminderTime)
    {
        $this->emailReminderTime = $emailReminderTime;

        return $this;
    }

    /**
     * Get emailReminderTime
     *
     * @return integer
     */
    public function getEmailReminderTime()
    {
        return $this->emailReminderTime;
    }

    /**
     * Set emailReminderSent
     *
     * @param boolean $emailReminderSent
     *
     * @return Calls
     */
    public function setEmailReminderSent($emailReminderSent)
    {
        $this->emailReminderSent = $emailReminderSent;

        return $this;
    }

    /**
     * Get emailReminderSent
     *
     * @return boolean
     */
    public function getEmailReminderSent()
    {
        return $this->emailReminderSent;
    }

    /**
     * Set outlookId
     *
     * @param string $outlookId
     *
     * @return Calls
     */
    public function setOutlookId($outlookId)
    {
        $this->outlookId = $outlookId;

        return $this;
    }

    /**
     * Get outlookId
     *
     * @return string
     */
    public function getOutlookId()
    {
        return $this->outlookId;
    }

    /**
     * Set repeatType
     *
     * @param string $repeatType
     *
     * @return Calls
     */
    public function setRepeatType($repeatType)
    {
        $this->repeatType = $repeatType;

        return $this;
    }

    /**
     * Get repeatType
     *
     * @return string
     */
    public function getRepeatType()
    {
        return $this->repeatType;
    }

    /**
     * Set repeatInterval
     *
     * @param integer $repeatInterval
     *
     * @return Calls
     */
    public function setRepeatInterval($repeatInterval)
    {
        $this->repeatInterval = $repeatInterval;

        return $this;
    }

    /**
     * Get repeatInterval
     *
     * @return integer
     */
    public function getRepeatInterval()
    {
        return $this->repeatInterval;
    }

    /**
     * Set repeatDow
     *
     * @param string $repeatDow
     *
     * @return Calls
     */
    public function setRepeatDow($repeatDow)
    {
        $this->repeatDow = $repeatDow;

        return $this;
    }

    /**
     * Get repeatDow
     *
     * @return string
     */
    public function getRepeatDow()
    {
        return $this->repeatDow;
    }

    /**
     * Set repeatUntil
     *
     * @param \DateTime $repeatUntil
     *
     * @return Calls
     */
    public function setRepeatUntil($repeatUntil)
    {
        $this->repeatUntil = $repeatUntil;

        return $this;
    }

    /**
     * Get repeatUntil
     *
     * @return \DateTime
     */
    public function getRepeatUntil()
    {
        return $this->repeatUntil;
    }

    /**
     * Set repeatCount
     *
     * @param integer $repeatCount
     *
     * @return Calls
     */
    public function setRepeatCount($repeatCount)
    {
        $this->repeatCount = $repeatCount;

        return $this;
    }

    /**
     * Get repeatCount
     *
     * @return integer
     */
    public function getRepeatCount()
    {
        return $this->repeatCount;
    }

    /**
     * Set repeatParentId
     *
     * @param string $repeatParentId
     *
     * @return Calls
     */
    public function setRepeatParentId($repeatParentId)
    {
        $this->repeatParentId = $repeatParentId;

        return $this;
    }

    /**
     * Get repeatParentId
     *
     * @return string
     */
    public function getRepeatParentId()
    {
        return $this->repeatParentId;
    }

    /**
     * Set recurringSource
     *
     * @param string $recurringSource
     *
     * @return Calls
     */
    public function setRecurringSource($recurringSource)
    {
        $this->recurringSource = $recurringSource;

        return $this;
    }

    /**
     * Get recurringSource
     *
     * @return string
     */
    public function getRecurringSource()
    {
        return $this->recurringSource;
    }
}

