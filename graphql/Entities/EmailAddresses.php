<?php

namespace Entities;

/**
 * EmailAddresses
 */
class EmailAddresses
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $emailAddress;

    /**
     * @var string
     */
    private $emailAddressCaps;

    /**
     * @var boolean
     */
    private $invalidEmail = '0';

    /**
     * @var boolean
     */
    private $optOut = '0';

    /**
     * @var \DateTime
     */
    private $dateCreated;

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
     * Set emailAddress
     *
     * @param string $emailAddress
     *
     * @return EmailAddresses
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;

        return $this;
    }

    /**
     * Get emailAddress
     *
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Set emailAddressCaps
     *
     * @param string $emailAddressCaps
     *
     * @return EmailAddresses
     */
    public function setEmailAddressCaps($emailAddressCaps)
    {
        $this->emailAddressCaps = $emailAddressCaps;

        return $this;
    }

    /**
     * Get emailAddressCaps
     *
     * @return string
     */
    public function getEmailAddressCaps()
    {
        return $this->emailAddressCaps;
    }

    /**
     * Set invalidEmail
     *
     * @param boolean $invalidEmail
     *
     * @return EmailAddresses
     */
    public function setInvalidEmail($invalidEmail)
    {
        $this->invalidEmail = $invalidEmail;

        return $this;
    }

    /**
     * Get invalidEmail
     *
     * @return boolean
     */
    public function getInvalidEmail()
    {
        return $this->invalidEmail;
    }

    /**
     * Set optOut
     *
     * @param boolean $optOut
     *
     * @return EmailAddresses
     */
    public function setOptOut($optOut)
    {
        $this->optOut = $optOut;

        return $this;
    }

    /**
     * Get optOut
     *
     * @return boolean
     */
    public function getOptOut()
    {
        return $this->optOut;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return EmailAddresses
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     *
     * @return EmailAddresses
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
     * @return EmailAddresses
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

