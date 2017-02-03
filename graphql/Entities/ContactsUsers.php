<?php

namespace Entities;

/**
 * ContactsUsers
 */
class ContactsUsers
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
    private $userId;

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
     * @return ContactsUsers
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
     * Set userId
     *
     * @param string $userId
     *
     * @return ContactsUsers
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
     * Set dateModified
     *
     * @param \DateTime $dateModified
     *
     * @return ContactsUsers
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
     * @return ContactsUsers
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

