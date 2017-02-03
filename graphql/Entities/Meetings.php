<?php

namespace Entities;

/**
 * Meetings
 */
class Meetings
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
    private $location;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $joinUrl;

    /**
     * @var string
     */
    private $hostUrl;

    /**
     * @var string
     */
    private $displayedUrl;

    /**
     * @var string
     */
    private $creator;

    /**
     * @var string
     */
    private $externalId;

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
    private $type = 'Sugar';

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
     * @var integer
     */
    private $sequence = '0';

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
     * @return Meetings
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
     * @return Meetings
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
     * @return Meetings
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
     * @return Meetings
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
     * @return Meetings
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
     * @return Meetings
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
     * @return Meetings
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
     * @return Meetings
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
     * Set location
     *
     * @param string $location
     *
     * @return Meetings
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return Meetings
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set joinUrl
     *
     * @param string $joinUrl
     *
     * @return Meetings
     */
    public function setJoinUrl($joinUrl)
    {
        $this->joinUrl = $joinUrl;

        return $this;
    }

    /**
     * Get joinUrl
     *
     * @return string
     */
    public function getJoinUrl()
    {
        return $this->joinUrl;
    }

    /**
     * Set hostUrl
     *
     * @param string $hostUrl
     *
     * @return Meetings
     */
    public function setHostUrl($hostUrl)
    {
        $this->hostUrl = $hostUrl;

        return $this;
    }

    /**
     * Get hostUrl
     *
     * @return string
     */
    public function getHostUrl()
    {
        return $this->hostUrl;
    }

    /**
     * Set displayedUrl
     *
     * @param string $displayedUrl
     *
     * @return Meetings
     */
    public function setDisplayedUrl($displayedUrl)
    {
        $this->displayedUrl = $displayedUrl;

        return $this;
    }

    /**
     * Get displayedUrl
     *
     * @return string
     */
    public function getDisplayedUrl()
    {
        return $this->displayedUrl;
    }

    /**
     * Set creator
     *
     * @param string $creator
     *
     * @return Meetings
     */
    public function setCreator($creator)
    {
        $this->creator = $creator;

        return $this;
    }

    /**
     * Get creator
     *
     * @return string
     */
    public function getCreator()
    {
        return $this->creator;
    }

    /**
     * Set externalId
     *
     * @param string $externalId
     *
     * @return Meetings
     */
    public function setExternalId($externalId)
    {
        $this->externalId = $externalId;

        return $this;
    }

    /**
     * Get externalId
     *
     * @return string
     */
    public function getExternalId()
    {
        return $this->externalId;
    }

    /**
     * Set durationHours
     *
     * @param integer $durationHours
     *
     * @return Meetings
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
     * @return Meetings
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
     * @return Meetings
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
     * @return Meetings
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
     * @return Meetings
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
     * @return Meetings
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
     * Set type
     *
     * @param string $type
     *
     * @return Meetings
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
     * Set parentId
     *
     * @param string $parentId
     *
     * @return Meetings
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
     * @return Meetings
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
     * @return Meetings
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
     * @return Meetings
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
     * @return Meetings
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
     * Set sequence
     *
     * @param integer $sequence
     *
     * @return Meetings
     */
    public function setSequence($sequence)
    {
        $this->sequence = $sequence;

        return $this;
    }

    /**
     * Get sequence
     *
     * @return integer
     */
    public function getSequence()
    {
        return $this->sequence;
    }

    /**
     * Set repeatType
     *
     * @param string $repeatType
     *
     * @return Meetings
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
     * @return Meetings
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
     * @return Meetings
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
     * @return Meetings
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
     * @return Meetings
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
     * @return Meetings
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
     * @return Meetings
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

