<?php

namespace Entities;

/**
 * JobQueue
 */
class JobQueue
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
     * @var string
     */
    private $name;

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
    private $schedulerId;

    /**
     * @var \DateTime
     */
    private $executeTime;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $resolution;

    /**
     * @var string
     */
    private $message;

    /**
     * @var string
     */
    private $target;

    /**
     * @var string
     */
    private $data;

    /**
     * @var boolean
     */
    private $requeue = '0';

    /**
     * @var boolean
     */
    private $retryCount;

    /**
     * @var boolean
     */
    private $failureCount;

    /**
     * @var integer
     */
    private $jobDelay;

    /**
     * @var string
     */
    private $client;

    /**
     * @var integer
     */
    private $percentComplete;


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
     * @return JobQueue
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
     * Set name
     *
     * @param string $name
     *
     * @return JobQueue
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
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return JobQueue
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
     * @return JobQueue
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
     * @return JobQueue
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
     * Set schedulerId
     *
     * @param string $schedulerId
     *
     * @return JobQueue
     */
    public function setSchedulerId($schedulerId)
    {
        $this->schedulerId = $schedulerId;

        return $this;
    }

    /**
     * Get schedulerId
     *
     * @return string
     */
    public function getSchedulerId()
    {
        return $this->schedulerId;
    }

    /**
     * Set executeTime
     *
     * @param \DateTime $executeTime
     *
     * @return JobQueue
     */
    public function setExecuteTime($executeTime)
    {
        $this->executeTime = $executeTime;

        return $this;
    }

    /**
     * Get executeTime
     *
     * @return \DateTime
     */
    public function getExecuteTime()
    {
        return $this->executeTime;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return JobQueue
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
     * Set resolution
     *
     * @param string $resolution
     *
     * @return JobQueue
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
     * Set message
     *
     * @param string $message
     *
     * @return JobQueue
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set target
     *
     * @param string $target
     *
     * @return JobQueue
     */
    public function setTarget($target)
    {
        $this->target = $target;

        return $this;
    }

    /**
     * Get target
     *
     * @return string
     */
    public function getTarget()
    {
        return $this->target;
    }

    /**
     * Set data
     *
     * @param string $data
     *
     * @return JobQueue
     */
    public function setData($data)
    {
        $this->data = $data;

        return $this;
    }

    /**
     * Get data
     *
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Set requeue
     *
     * @param boolean $requeue
     *
     * @return JobQueue
     */
    public function setRequeue($requeue)
    {
        $this->requeue = $requeue;

        return $this;
    }

    /**
     * Get requeue
     *
     * @return boolean
     */
    public function getRequeue()
    {
        return $this->requeue;
    }

    /**
     * Set retryCount
     *
     * @param boolean $retryCount
     *
     * @return JobQueue
     */
    public function setRetryCount($retryCount)
    {
        $this->retryCount = $retryCount;

        return $this;
    }

    /**
     * Get retryCount
     *
     * @return boolean
     */
    public function getRetryCount()
    {
        return $this->retryCount;
    }

    /**
     * Set failureCount
     *
     * @param boolean $failureCount
     *
     * @return JobQueue
     */
    public function setFailureCount($failureCount)
    {
        $this->failureCount = $failureCount;

        return $this;
    }

    /**
     * Get failureCount
     *
     * @return boolean
     */
    public function getFailureCount()
    {
        return $this->failureCount;
    }

    /**
     * Set jobDelay
     *
     * @param integer $jobDelay
     *
     * @return JobQueue
     */
    public function setJobDelay($jobDelay)
    {
        $this->jobDelay = $jobDelay;

        return $this;
    }

    /**
     * Get jobDelay
     *
     * @return integer
     */
    public function getJobDelay()
    {
        return $this->jobDelay;
    }

    /**
     * Set client
     *
     * @param string $client
     *
     * @return JobQueue
     */
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Get client
     *
     * @return string
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Set percentComplete
     *
     * @param integer $percentComplete
     *
     * @return JobQueue
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
}

