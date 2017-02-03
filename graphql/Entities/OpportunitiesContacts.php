<?php

namespace Entities;

/**
 * OpportunitiesContacts
 */
class OpportunitiesContacts
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $contactId;

    /**
     * @var string
     */
    private $opportunityId;

    /**
     * @var string
     */
    private $contactRole;

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
     * Set contactId
     *
     * @param string $contactId
     *
     * @return OpportunitiesContacts
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
     * Set opportunityId
     *
     * @param string $opportunityId
     *
     * @return OpportunitiesContacts
     */
    public function setOpportunityId($opportunityId)
    {
        $this->opportunityId = $opportunityId;

        return $this;
    }

    /**
     * Get opportunityId
     *
     * @return string
     */
    public function getOpportunityId()
    {
        return $this->opportunityId;
    }

    /**
     * Set contactRole
     *
     * @param string $contactRole
     *
     * @return OpportunitiesContacts
     */
    public function setContactRole($contactRole)
    {
        $this->contactRole = $contactRole;

        return $this;
    }

    /**
     * Get contactRole
     *
     * @return string
     */
    public function getContactRole()
    {
        return $this->contactRole;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     *
     * @return OpportunitiesContacts
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
     * @return OpportunitiesContacts
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

