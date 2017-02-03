<?php

namespace Entities;

/**
 * FpEventsProspects1C
 */
class FpEventsProspects1C
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
    private $fpEventsProspects1fpEventsIda;

    /**
     * @var string
     */
    private $fpEventsProspects1prospectsIdb;

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
     * @return FpEventsProspects1C
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
     * @return FpEventsProspects1C
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
     * Set fpEventsProspects1fpEventsIda
     *
     * @param string $fpEventsProspects1fpEventsIda
     *
     * @return FpEventsProspects1C
     */
    public function setFpEventsProspects1fpEventsIda($fpEventsProspects1fpEventsIda)
    {
        $this->fpEventsProspects1fpEventsIda = $fpEventsProspects1fpEventsIda;

        return $this;
    }

    /**
     * Get fpEventsProspects1fpEventsIda
     *
     * @return string
     */
    public function getFpEventsProspects1fpEventsIda()
    {
        return $this->fpEventsProspects1fpEventsIda;
    }

    /**
     * Set fpEventsProspects1prospectsIdb
     *
     * @param string $fpEventsProspects1prospectsIdb
     *
     * @return FpEventsProspects1C
     */
    public function setFpEventsProspects1prospectsIdb($fpEventsProspects1prospectsIdb)
    {
        $this->fpEventsProspects1prospectsIdb = $fpEventsProspects1prospectsIdb;

        return $this;
    }

    /**
     * Get fpEventsProspects1prospectsIdb
     *
     * @return string
     */
    public function getFpEventsProspects1prospectsIdb()
    {
        return $this->fpEventsProspects1prospectsIdb;
    }

    /**
     * Set inviteStatus
     *
     * @param string $inviteStatus
     *
     * @return FpEventsProspects1C
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
     * @return FpEventsProspects1C
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
     * @return FpEventsProspects1C
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

