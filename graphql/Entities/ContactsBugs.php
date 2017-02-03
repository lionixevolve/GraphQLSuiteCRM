<?php

namespace Entities;

/**
 * ContactsBugs
 */
class ContactsBugs
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
    private $bugId;

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
     * @return ContactsBugs
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
     * Set bugId
     *
     * @param string $bugId
     *
     * @return ContactsBugs
     */
    public function setBugId($bugId)
    {
        $this->bugId = $bugId;

        return $this;
    }

    /**
     * Get bugId
     *
     * @return string
     */
    public function getBugId()
    {
        return $this->bugId;
    }

    /**
     * Set contactRole
     *
     * @param string $contactRole
     *
     * @return ContactsBugs
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
     * @return ContactsBugs
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
     * @return ContactsBugs
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

