<?php

namespace Entities;

/**
 * EmailMarketingProspectLists
 */
class EmailMarketingProspectLists
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $prospectListId;

    /**
     * @var string
     */
    private $emailMarketingId;

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
     * Set prospectListId
     *
     * @param string $prospectListId
     *
     * @return EmailMarketingProspectLists
     */
    public function setProspectListId($prospectListId)
    {
        $this->prospectListId = $prospectListId;

        return $this;
    }

    /**
     * Get prospectListId
     *
     * @return string
     */
    public function getProspectListId()
    {
        return $this->prospectListId;
    }

    /**
     * Set emailMarketingId
     *
     * @param string $emailMarketingId
     *
     * @return EmailMarketingProspectLists
     */
    public function setEmailMarketingId($emailMarketingId)
    {
        $this->emailMarketingId = $emailMarketingId;

        return $this;
    }

    /**
     * Get emailMarketingId
     *
     * @return string
     */
    public function getEmailMarketingId()
    {
        return $this->emailMarketingId;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     *
     * @return EmailMarketingProspectLists
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
     * @return EmailMarketingProspectLists
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

