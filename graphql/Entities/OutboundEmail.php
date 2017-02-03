<?php

namespace Entities;

/**
 * OutboundEmail
 */
class OutboundEmail
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $name;

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
     * @var boolean
     */
    private $deleted = '0';

    /**
     * @var string
     */
    private $assignedUserId;

    /**
     * @var string
     */
    private $type = 'user';

    /**
     * @var string
     */
    private $userId;

    /**
     * @var string
     */
    private $mailSendtype = 'smtp';

    /**
     * @var string
     */
    private $mailSmtptype = 'other';

    /**
     * @var string
     */
    private $mailSmtpserver;

    /**
     * @var integer
     */
    private $mailSmtpport = '0';

    /**
     * @var string
     */
    private $mailSmtpuser;

    /**
     * @var string
     */
    private $mailSmtppass;

    /**
     * @var boolean
     */
    private $mailSmtpauthReq = '0';

    /**
     * @var string
     */
    private $mailSmtpssl = '0';


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
     * Set name
     *
     * @param string $name
     *
     * @return OutboundEmail
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
     * Set dateEntered
     *
     * @param \DateTime $dateEntered
     *
     * @return OutboundEmail
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
     * @return OutboundEmail
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
     * @return OutboundEmail
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
     * @return OutboundEmail
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
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return OutboundEmail
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
     * Set assignedUserId
     *
     * @param string $assignedUserId
     *
     * @return OutboundEmail
     */
    public function setAssignedUserId($assignedUserId)
    {
        $this->assignedUserId = $assignedUserId;

        return $this;
    }

    /**
     * Get assignedUserId
     *
     * @return string
     */
    public function getAssignedUserId()
    {
        return $this->assignedUserId;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return OutboundEmail
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set userId
     *
     * @param string $userId
     *
     * @return OutboundEmail
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
     * Set mailSendtype
     *
     * @param string $mailSendtype
     *
     * @return OutboundEmail
     */
    public function setMailSendtype($mailSendtype)
    {
        $this->mailSendtype = $mailSendtype;

        return $this;
    }

    /**
     * Get mailSendtype
     *
     * @return string
     */
    public function getMailSendtype()
    {
        return $this->mailSendtype;
    }

    /**
     * Set mailSmtptype
     *
     * @param string $mailSmtptype
     *
     * @return OutboundEmail
     */
    public function setMailSmtptype($mailSmtptype)
    {
        $this->mailSmtptype = $mailSmtptype;

        return $this;
    }

    /**
     * Get mailSmtptype
     *
     * @return string
     */
    public function getMailSmtptype()
    {
        return $this->mailSmtptype;
    }

    /**
     * Set mailSmtpserver
     *
     * @param string $mailSmtpserver
     *
     * @return OutboundEmail
     */
    public function setMailSmtpserver($mailSmtpserver)
    {
        $this->mailSmtpserver = $mailSmtpserver;

        return $this;
    }

    /**
     * Get mailSmtpserver
     *
     * @return string
     */
    public function getMailSmtpserver()
    {
        return $this->mailSmtpserver;
    }

    /**
     * Set mailSmtpport
     *
     * @param integer $mailSmtpport
     *
     * @return OutboundEmail
     */
    public function setMailSmtpport($mailSmtpport)
    {
        $this->mailSmtpport = $mailSmtpport;

        return $this;
    }

    /**
     * Get mailSmtpport
     *
     * @return integer
     */
    public function getMailSmtpport()
    {
        return $this->mailSmtpport;
    }

    /**
     * Set mailSmtpuser
     *
     * @param string $mailSmtpuser
     *
     * @return OutboundEmail
     */
    public function setMailSmtpuser($mailSmtpuser)
    {
        $this->mailSmtpuser = $mailSmtpuser;

        return $this;
    }

    /**
     * Get mailSmtpuser
     *
     * @return string
     */
    public function getMailSmtpuser()
    {
        return $this->mailSmtpuser;
    }

    /**
     * Set mailSmtppass
     *
     * @param string $mailSmtppass
     *
     * @return OutboundEmail
     */
    public function setMailSmtppass($mailSmtppass)
    {
        $this->mailSmtppass = $mailSmtppass;

        return $this;
    }

    /**
     * Get mailSmtppass
     *
     * @return string
     */
    public function getMailSmtppass()
    {
        return $this->mailSmtppass;
    }

    /**
     * Set mailSmtpauthReq
     *
     * @param boolean $mailSmtpauthReq
     *
     * @return OutboundEmail
     */
    public function setMailSmtpauthReq($mailSmtpauthReq)
    {
        $this->mailSmtpauthReq = $mailSmtpauthReq;

        return $this;
    }

    /**
     * Get mailSmtpauthReq
     *
     * @return boolean
     */
    public function getMailSmtpauthReq()
    {
        return $this->mailSmtpauthReq;
    }

    /**
     * Set mailSmtpssl
     *
     * @param string $mailSmtpssl
     *
     * @return OutboundEmail
     */
    public function setMailSmtpssl($mailSmtpssl)
    {
        $this->mailSmtpssl = $mailSmtpssl;

        return $this;
    }

    /**
     * Get mailSmtpssl
     *
     * @return string
     */
    public function getMailSmtpssl()
    {
        return $this->mailSmtpssl;
    }
}

