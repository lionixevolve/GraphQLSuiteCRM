<?php

namespace Entities;

/**
 * CallsUsers
 */
class CallsUsers
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $callId;

    /**
     * @var string
     */
    private $userId;

    /**
     * @var string
     */
    private $required = '1';

    /**
     * @var string
     */
    private $acceptStatus = 'none';

    /**
     * @var \DateTime
     */
    private $dateModified;

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
     * Set callId
     *
     * @param string $callId
     *
     * @return CallsUsers
     */
    public function setCallId($callId)
    {
        $this->callId = $callId;

        return $this;
    }

    /**
     * Get callId
     *
     * @return string
     */
    public function getCallId()
    {
        return $this->callId;
    }

    /**
     * Set userId
     *
     * @param string $userId
     *
     * @return CallsUsers
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set required
     *
     * @param string $required
     *
     * @return CallsUsers
     */
    public function setRequired($required)
    {
        $this->required = $required;

        return $this;
    }

    /**
     * Get required
     *
     * @return string
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Set acceptStatus
     *
     * @param string $acceptStatus
     *
     * @return CallsUsers
     */
    public function setAcceptStatus($acceptStatus)
    {
        $this->acceptStatus = $acceptStatus;

        return $this;
    }

    /**
     * Get acceptStatus
     *
     * @return string
     */
    public function getAcceptStatus()
    {
        return $this->acceptStatus;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     *
     * @return CallsUsers
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
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return CallsUsers
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

