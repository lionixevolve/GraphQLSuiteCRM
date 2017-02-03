<?php

namespace Entities;

/**
 * AccountsContacts
 */
class AccountsContacts
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
    private $accountId;

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
     * @return AccountsContacts
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
     * Set accountId
     *
     * @param string $accountId
     *
     * @return AccountsContacts
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * Get accountId
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     *
     * @return AccountsContacts
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
     * @return AccountsContacts
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

