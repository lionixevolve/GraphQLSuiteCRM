<?php

namespace Entities;

/**
 * FpEventsContactsC
 */
class FpEventsContactsC
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dateModified;

    /**
     * @var boolean
     */
    private $deleted = '0';

    /**
     * @var string
     */
    private $fpEventsContactsfpEventsIda;

    /**
     * @var string
     */
    private $fpEventsContactscontactsIdb;

    /**
     * @var string
     */
    private $inviteStatus = 'Not Invited';

    /**
     * @var string
     */
    private $acceptStatus = 'No Response';

    /**
     * @var integer
     */
    private $emailResponded = '0';


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
     * Set dateModified
     *
     * @param \DateTime $dateModified
     *
     * @return FpEventsContactsC
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
     * @return FpEventsContactsC
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
     * Set fpEventsContactsfpEventsIda
     *
     * @param string $fpEventsContactsfpEventsIda
     *
     * @return FpEventsContactsC
     */
    public function setFpEventsContactsfpEventsIda($fpEventsContactsfpEventsIda)
    {
        $this->fpEventsContactsfpEventsIda = $fpEventsContactsfpEventsIda;

        return $this;
    }

    /**
     * Get fpEventsContactsfpEventsIda
     *
     * @return string
     */
    public function getFpEventsContactsfpEventsIda()
    {
        return $this->fpEventsContactsfpEventsIda;
    }

    /**
     * Set fpEventsContactscontactsIdb
     *
     * @param string $fpEventsContactscontactsIdb
     *
     * @return FpEventsContactsC
     */
    public function setFpEventsContactscontactsIdb($fpEventsContactscontactsIdb)
    {
        $this->fpEventsContactscontactsIdb = $fpEventsContactscontactsIdb;

        return $this;
    }

    /**
     * Get fpEventsContactscontactsIdb
     *
     * @return string
     */
    public function getFpEventsContactscontactsIdb()
    {
        return $this->fpEventsContactscontactsIdb;
    }

    /**
     * Set inviteStatus
     *
     * @param string $inviteStatus
     *
     * @return FpEventsContactsC
     */
    public function setInviteStatus($inviteStatus)
    {
        $this->inviteStatus = $inviteStatus;

        return $this;
    }

    /**
     * Get inviteStatus
     *
     * @return string
     */
    public function getInviteStatus()
    {
        return $this->inviteStatus;
    }

    /**
     * Set acceptStatus
     *
     * @param string $acceptStatus
     *
     * @return FpEventsContactsC
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
     * Set emailResponded
     *
     * @param integer $emailResponded
     *
     * @return FpEventsContactsC
     */
    public function setEmailResponded($emailResponded)
    {
        $this->emailResponded = $emailResponded;

        return $this;
    }

    /**
     * Get emailResponded
     *
     * @return integer
     */
    public function getEmailResponded()
    {
        return $this->emailResponded;
    }
}

