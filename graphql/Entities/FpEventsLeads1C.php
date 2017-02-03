<?php

namespace Entities;

/**
 * FpEventsLeads1C
 */
class FpEventsLeads1C
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
    private $fpEventsLeads1fpEventsIda;

    /**
     * @var string
     */
    private $fpEventsLeads1leadsIdb;

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
     * @return FpEventsLeads1C
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
     * @return FpEventsLeads1C
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
     * Set fpEventsLeads1fpEventsIda
     *
     * @param string $fpEventsLeads1fpEventsIda
     *
     * @return FpEventsLeads1C
     */
    public function setFpEventsLeads1fpEventsIda($fpEventsLeads1fpEventsIda)
    {
        $this->fpEventsLeads1fpEventsIda = $fpEventsLeads1fpEventsIda;

        return $this;
    }

    /**
     * Get fpEventsLeads1fpEventsIda
     *
     * @return string
     */
    public function getFpEventsLeads1fpEventsIda()
    {
        return $this->fpEventsLeads1fpEventsIda;
    }

    /**
     * Set fpEventsLeads1leadsIdb
     *
     * @param string $fpEventsLeads1leadsIdb
     *
     * @return FpEventsLeads1C
     */
    public function setFpEventsLeads1leadsIdb($fpEventsLeads1leadsIdb)
    {
        $this->fpEventsLeads1leadsIdb = $fpEventsLeads1leadsIdb;

        return $this;
    }

    /**
     * Get fpEventsLeads1leadsIdb
     *
     * @return string
     */
    public function getFpEventsLeads1leadsIdb()
    {
        return $this->fpEventsLeads1leadsIdb;
    }

    /**
     * Set inviteStatus
     *
     * @param string $inviteStatus
     *
     * @return FpEventsLeads1C
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
     * @return FpEventsLeads1C
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
     * @return FpEventsLeads1C
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

