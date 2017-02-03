<?php

namespace Entities;

/**
 * EmailAddrBeanRel
 */
class EmailAddrBeanRel
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $emailAddressId;

    /**
     * @var string
     */
    private $beanId;

    /**
     * @var string
     */
    private $beanModule;

    /**
     * @var boolean
     */
    private $primaryAddress = '0';

    /**
     * @var boolean
     */
    private $replyToAddress = '0';

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
     * Set emailAddressId
     *
     * @param string $emailAddressId
     *
     * @return EmailAddrBeanRel
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
     * Set beanId
     *
     * @param string $beanId
     *
     * @return EmailAddrBeanRel
     */
    public function setBeanId($beanId)
    {
        $this->beanId = $beanId;

        return $this;
    }

    /**
     * Get beanId
     *
     * @return string
     */
    public function getBeanId()
    {
        return $this->beanId;
    }

    /**
     * Set beanModule
     *
     * @param string $beanModule
     *
     * @return EmailAddrBeanRel
     */
    public function setBeanModule($beanModule)
    {
        $this->beanModule = $beanModule;

        return $this;
    }

    /**
     * Get beanModule
     *
     * @return string
     */
    public function getBeanModule()
    {
        return $this->beanModule;
    }

    /**
     * Set primaryAddress
     *
     * @param boolean $primaryAddress
     *
     * @return EmailAddrBeanRel
     */
    public function setPrimaryAddress($primaryAddress)
    {
        $this->primaryAddress = $primaryAddress;

        return $this;
    }

    /**
     * Get primaryAddress
     *
     * @return boolean
     */
    public function getPrimaryAddress()
    {
        return $this->primaryAddress;
    }

    /**
     * Set replyToAddress
     *
     * @param boolean $replyToAddress
     *
     * @return EmailAddrBeanRel
     */
    public function setReplyToAddress($replyToAddress)
    {
        $this->replyToAddress = $replyToAddress;

        return $this;
    }

    /**
     * Get replyToAddress
     *
     * @return boolean
     */
    public function getReplyToAddress()
    {
        return $this->replyToAddress;
    }

    /**
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return EmailAddrBeanRel
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
     * @return EmailAddrBeanRel
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
     * @return EmailAddrBeanRel
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

