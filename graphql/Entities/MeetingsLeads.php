<?php

namespace Entities;

/**
 * MeetingsLeads
 */
class MeetingsLeads
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $meetingId;

    /**
     * @var string
     */
    private $leadId;

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
     * Set meetingId
     *
     * @param string $meetingId
     *
     * @return MeetingsLeads
     */
    public function setMeetingId($meetingId)
    {
        $this->meetingId = $meetingId;

        return $this;
    }

    /**
     * Get meetingId
     *
     * @return string
     */
    public function getMeetingId()
    {
        return $this->meetingId;
    }

    /**
     * Set leadId
     *
     * @param string $leadId
     *
     * @return MeetingsLeads
     */
    public function setLeadId($leadId)
    {
        $this->leadId = $leadId;

        return $this;
    }

    /**
     * Get leadId
     *
     * @return string
     */
    public function getLeadId()
    {
        return $this->leadId;
    }

    /**
     * Set required
     *
     * @param string $required
     *
     * @return MeetingsLeads
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
     * @return MeetingsLeads
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
     * @return MeetingsLeads
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
     * @return MeetingsLeads
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

