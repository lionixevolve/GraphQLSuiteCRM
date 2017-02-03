<?php

namespace Entities;

/**
 * MeetingsContacts
 */
class MeetingsContacts
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
    private $contactId;

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
     * @return MeetingsContacts
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
     * Set contactId
     *
     * @param string $contactId
     *
     * @return MeetingsContacts
     */
    public function setContactId($contactId)
    {
        $this->contactId = $contactId;

        return $this;
    }

    /**
     * Get contactId
     *
     * @return string
     */
    public function getContactId()
    {
        return $this->contactId;
    }

    /**
     * Set required
     *
     * @param string $required
     *
     * @return MeetingsContacts
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
     * @return MeetingsContacts
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
     * @return MeetingsContacts
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
     * @return MeetingsContacts
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

