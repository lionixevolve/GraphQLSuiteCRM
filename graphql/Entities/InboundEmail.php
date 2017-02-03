<?php

namespace Entities;

/**
 * InboundEmail
 */
class InboundEmail
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var boolean
     */
    private $deleted = '0';

    /**
     * @var \DateTime
     */
    private $dateEntered;

    /**
     * @var \DateTime
     */
    private $dateModified;

    /**
     * @var string
     */
    private $modifiedUserId;

    /**
     * @var string
     */
    private $createdBy;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $status = 'Active';

    /**
     * @var string
     */
    private $serverUrl;

    /**
     * @var string
     */
    private $emailUser;

    /**
     * @var string
     */
    private $emailPassword;

    /**
     * @var integer
     */
    private $port;

    /**
     * @var string
     */
    private $service;

    /**
     * @var string
     */
    private $mailbox;

    /**
     * @var boolean
     */
    private $deleteSeen = '0';

    /**
     * @var string
     */
    private $mailboxType;

    /**
     * @var string
     */
    private $templateId;

    /**
     * @var string
     */
    private $storedOptions;

    /**
     * @var string
     */
    private $groupId;

    /**
     * @var boolean
     */
    private $isPersonal = '0';

    /**
     * @var string
     */
    private $groupfolderId;


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
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return InboundEmail
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
     * Set dateEntered
     *
     * @param \DateTime $dateEntered
     *
     * @return InboundEmail
     */
    public function setDateEntered($dateEntered)
    {
        $this->dateEntered = $dateEntered;

        return $this;
    }

    /**
     * Get dateEntered
     *
     * @return \DateTime
     */
    public function getDateEntered()
    {
        return $this->dateEntered;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     *
     * @return InboundEmail
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
     * Set modifiedUserId
     *
     * @param string $modifiedUserId
     *
     * @return InboundEmail
     */
    public function setModifiedUserId($modifiedUserId)
    {
        $this->modifiedUserId = $modifiedUserId;

        return $this;
    }

    /**
     * Get modifiedUserId
     *
     * @return string
     */
    public function getModifiedUserId()
    {
        return $this->modifiedUserId;
    }

    /**
     * Set createdBy
     *
     * @param string $createdBy
     *
     * @return InboundEmail
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return InboundEmail
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return InboundEmail
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set serverUrl
     *
     * @param string $serverUrl
     *
     * @return InboundEmail
     */
    public function setServerUrl($serverUrl)
    {
        $this->serverUrl = $serverUrl;

        return $this;
    }

    /**
     * Get serverUrl
     *
     * @return string
     */
    public function getServerUrl()
    {
        return $this->serverUrl;
    }

    /**
     * Set emailUser
     *
     * @param string $emailUser
     *
     * @return InboundEmail
     */
    public function setEmailUser($emailUser)
    {
        $this->emailUser = $emailUser;

        return $this;
    }

    /**
     * Get emailUser
     *
     * @return string
     */
    public function getEmailUser()
    {
        return $this->emailUser;
    }

    /**
     * Set emailPassword
     *
     * @param string $emailPassword
     *
     * @return InboundEmail
     */
    public function setEmailPassword($emailPassword)
    {
        $this->emailPassword = $emailPassword;

        return $this;
    }

    /**
     * Get emailPassword
     *
     * @return string
     */
    public function getEmailPassword()
    {
        return $this->emailPassword;
    }

    /**
     * Set port
     *
     * @param integer $port
     *
     * @return InboundEmail
     */
    public function setPort($port)
    {
        $this->port = $port;

        return $this;
    }

    /**
     * Get port
     *
     * @return integer
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * Set service
     *
     * @param string $service
     *
     * @return InboundEmail
     */
    public function setService($service)
    {
        $this->service = $service;

        return $this;
    }

    /**
     * Get service
     *
     * @return string
     */
    public function getService()
    {
        return $this->service;
    }

    /**
     * Set mailbox
     *
     * @param string $mailbox
     *
     * @return InboundEmail
     */
    public function setMailbox($mailbox)
    {
        $this->mailbox = $mailbox;

        return $this;
    }

    /**
     * Get mailbox
     *
     * @return string
     */
    public function getMailbox()
    {
        return $this->mailbox;
    }

    /**
     * Set deleteSeen
     *
     * @param boolean $deleteSeen
     *
     * @return InboundEmail
     */
    public function setDeleteSeen($deleteSeen)
    {
        $this->deleteSeen = $deleteSeen;

        return $this;
    }

    /**
     * Get deleteSeen
     *
     * @return boolean
     */
    public function getDeleteSeen()
    {
        return $this->deleteSeen;
    }

    /**
     * Set mailboxType
     *
     * @param string $mailboxType
     *
     * @return InboundEmail
     */
    public function setMailboxType($mailboxType)
    {
        $this->mailboxType = $mailboxType;

        return $this;
    }

    /**
     * Get mailboxType
     *
     * @return string
     */
    public function getMailboxType()
    {
        return $this->mailboxType;
    }

    /**
     * Set templateId
     *
     * @param string $templateId
     *
     * @return InboundEmail
     */
    public function setTemplateId($templateId)
    {
        $this->templateId = $templateId;

        return $this;
    }

    /**
     * Get templateId
     *
     * @return string
     */
    public function getTemplateId()
    {
        return $this->templateId;
    }

    /**
     * Set storedOptions
     *
     * @param string $storedOptions
     *
     * @return InboundEmail
     */
    public function setStoredOptions($storedOptions)
    {
        $this->storedOptions = $storedOptions;

        return $this;
    }

    /**
     * Get storedOptions
     *
     * @return string
     */
    public function getStoredOptions()
    {
        return $this->storedOptions;
    }

    /**
     * Set groupId
     *
     * @param string $groupId
     *
     * @return InboundEmail
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;

        return $this;
    }

    /**
     * Get groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId;
    }

    /**
     * Set isPersonal
     *
     * @param boolean $isPersonal
     *
     * @return InboundEmail
     */
    public function setIsPersonal($isPersonal)
    {
        $this->isPersonal = $isPersonal;

        return $this;
    }

    /**
     * Get isPersonal
     *
     * @return boolean
     */
    public function getIsPersonal()
    {
        return $this->isPersonal;
    }

    /**
     * Set groupfolderId
     *
     * @param string $groupfolderId
     *
     * @return InboundEmail
     */
    public function setGroupfolderId($groupfolderId)
    {
        $this->groupfolderId = $groupfolderId;

        return $this;
    }

    /**
     * Get groupfolderId
     *
     * @return string
     */
    public function getGroupfolderId()
    {
        return $this->groupfolderId;
    }
}

