<?php

namespace Entities;

/**
 * EmailsEmailAddrRel
 */
class EmailsEmailAddrRel
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $emailId;

    /**
     * @var string
     */
    private $addressType;

    /**
     * @var string
     */
    private $emailAddressId;

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
     * Set emailId
     *
     * @param string $emailId
     *
     * @return EmailsEmailAddrRel
     */
    public function setEmailId($emailId)
    {
        $this->emailId = $emailId;

        return $this;
    }

    /**
     * Get emailId
     *
     * @return string
     */
    public function getEmailId()
    {
        return $this->emailId;
    }

    /**
     * Set addressType
     *
     * @param string $addressType
     *
     * @return EmailsEmailAddrRel
     */
    public function setAddressType($addressType)
    {
        $this->addressType = $addressType;

        return $this;
    }

    /**
     * Get addressType
     *
     * @return string
     */
    public function getAddressType()
    {
        return $this->addressType;
    }

    /**
     * Set emailAddressId
     *
     * @param string $emailAddressId
     *
     * @return EmailsEmailAddrRel
     */
    public function setEmailAddressId($emailAddressId)
    {
        $this->emailAddressId = $emailAddressId;

        return $this;
    }

    /**
     * Get emailAddressId
     *
     * @return string
     */
    public function getEmailAddressId()
    {
        return $this->emailAddressId;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return EmailsEmailAddrRel
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

