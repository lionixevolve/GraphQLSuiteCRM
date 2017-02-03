<?php

namespace Entities;

/**
 * ContactsCases
 */
class ContactsCases
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
    private $caseId;

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
     * @return ContactsCases
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
     * Set caseId
     *
     * @param string $caseId
     *
     * @return ContactsCases
     */
    public function setCaseId($caseId)
    {
        $this->caseId = $caseId;

        return $this;
    }

    /**
     * Get caseId
     *
     * @return string
     */
    public function getCaseId()
    {
        return $this->caseId;
    }

    /**
     * Set contactRole
     *
     * @param string $contactRole
     *
     * @return ContactsCases
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
     * @return ContactsCases
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
     * @return ContactsCases
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

