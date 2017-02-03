<?php

namespace Entities;

/**
 * Schedulers
 */
class Schedulers
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var boolean
     */
    private $deleted = '0';

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
    private $createdBy;

    /**
     * @var string
     */
    private $modifiedUserId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $job;

    /**
     * @var \DateTime
     */
    private $dateTimeStart;

    /**
     * @var \DateTime
     */
    private $dateTimeEnd;

    /**
     * @var string
     */
    private $jobInterval;

    /**
     * @var \DateTime
     */
    private $timeFrom;

    /**
     * @var \DateTime
     */
    private $timeTo;

    /**
     * @var \DateTime
     */
    private $lastRun;

    /**
     * @var string
     */
    private $status;

    /**
     * @var boolean
     */
    private $catchUp = '1';


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
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return Schedulers
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
     * Set dateEntered
     *
     * @param \DateTime $dateEntered
     *
     * @return Schedulers
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
     * @return Schedulers
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
     * Set createdBy
     *
     * @param string $createdBy
     *
     * @return Schedulers
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
     * Set modifiedUserId
     *
     * @param string $modifiedUserId
     *
     * @return Schedulers
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
     * Set name
     *
     * @param string $name
     *
     * @return Schedulers
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
     * Set job
     *
     * @param string $job
     *
     * @return Schedulers
     */
    public function setJob($job)
    {
        $this->job = $job;

        return $this;
    }

    /**
     * Get job
     *
     * @return string
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * Set dateTimeStart
     *
     * @param \DateTime $dateTimeStart
     *
     * @return Schedulers
     */
    public function setDateTimeStart($dateTimeStart)
    {
        $this->dateTimeStart = $dateTimeStart;

        return $this;
    }

    /**
     * Get dateTimeStart
     *
     * @return \DateTime
     */
    public function getDateTimeStart()
    {
        return $this->dateTimeStart;
    }

    /**
     * Set dateTimeEnd
     *
     * @param \DateTime $dateTimeEnd
     *
     * @return Schedulers
     */
    public function setDateTimeEnd($dateTimeEnd)
    {
        $this->dateTimeEnd = $dateTimeEnd;

        return $this;
    }

    /**
     * Get dateTimeEnd
     *
     * @return \DateTime
     */
    public function getDateTimeEnd()
    {
        return $this->dateTimeEnd;
    }

    /**
     * Set jobInterval
     *
     * @param string $jobInterval
     *
     * @return Schedulers
     */
    public function setJobInterval($jobInterval)
    {
        $this->jobInterval = $jobInterval;

        return $this;
    }

    /**
     * Get jobInterval
     *
     * @return string
     */
    public function getJobInterval()
    {
        return $this->jobInterval;
    }

    /**
     * Set timeFrom
     *
     * @param \DateTime $timeFrom
     *
     * @return Schedulers
     */
    public function setTimeFrom($timeFrom)
    {
        $this->timeFrom = $timeFrom;

        return $this;
    }

    /**
     * Get timeFrom
     *
     * @return \DateTime
     */
    public function getTimeFrom()
    {
        return $this->timeFrom;
    }

    /**
     * Set timeTo
     *
     * @param \DateTime $timeTo
     *
     * @return Schedulers
     */
    public function setTimeTo($timeTo)
    {
        $this->timeTo = $timeTo;

        return $this;
    }

    /**
     * Get timeTo
     *
     * @return \DateTime
     */
    public function getTimeTo()
    {
        return $this->timeTo;
    }

    /**
     * Set lastRun
     *
     * @param \DateTime $lastRun
     *
     * @return Schedulers
     */
    public function setLastRun($lastRun)
    {
        $this->lastRun = $lastRun;

        return $this;
    }

    /**
     * Get lastRun
     *
     * @return \DateTime
     */
    public function getLastRun()
    {
        return $this->lastRun;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Schedulers
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
     * Set catchUp
     *
     * @param boolean $catchUp
     *
     * @return Schedulers
     */
    public function setCatchUp($catchUp)
    {
        $this->catchUp = $catchUp;

        return $this;
    }

    /**
     * Get catchUp
     *
     * @return boolean
     */
    public function getCatchUp()
    {
        return $this->catchUp;
    }
}

