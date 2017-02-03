<?php

namespace Entities;

/**
 * EmailsText
 */
class EmailsText
{
    /**
     * @var string
     */
    private $emailId;

    /**
     * @var string
     */
    private $fromAddr;

    /**
     * @var string
     */
    private $replyToAddr;

    /**
     * @var string
     */
    private $toAddrs;

    /**
     * @var string
     */
    private $ccAddrs;

    /**
     * @var string
     */
    private $bccAddrs;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $descriptionHtml;

    /**
     * @var string
     */
    private $rawSource;

    /**
     * @var boolean
     */
    private $deleted = '0';


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
     * Set fromAddr
     *
     * @param string $fromAddr
     *
     * @return EmailsText
     */
    public function setFromAddr($fromAddr)
    {
        $this->fromAddr = $fromAddr;

        return $this;
    }

    /**
     * Get fromAddr
     *
     * @return string
     */
    public function getFromAddr()
    {
        return $this->fromAddr;
    }

    /**
     * Set replyToAddr
     *
     * @param string $replyToAddr
     *
     * @return EmailsText
     */
    public function setReplyToAddr($replyToAddr)
    {
        $this->replyToAddr = $replyToAddr;

        return $this;
    }

    /**
     * Get replyToAddr
     *
     * @return string
     */
    public function getReplyToAddr()
    {
        return $this->replyToAddr;
    }

    /**
     * Set toAddrs
     *
     * @param string $toAddrs
     *
     * @return EmailsText
     */
    public function setToAddrs($toAddrs)
    {
        $this->toAddrs = $toAddrs;

        return $this;
    }

    /**
     * Get toAddrs
     *
     * @return string
     */
    public function getToAddrs()
    {
        return $this->toAddrs;
    }

    /**
     * Set ccAddrs
     *
     * @param string $ccAddrs
     *
     * @return EmailsText
     */
    public function setCcAddrs($ccAddrs)
    {
        $this->ccAddrs = $ccAddrs;

        return $this;
    }

    /**
     * Get ccAddrs
     *
     * @return string
     */
    public function getCcAddrs()
    {
        return $this->ccAddrs;
    }

    /**
     * Set bccAddrs
     *
     * @param string $bccAddrs
     *
     * @return EmailsText
     */
    public function setBccAddrs($bccAddrs)
    {
        $this->bccAddrs = $bccAddrs;

        return $this;
    }

    /**
     * Get bccAddrs
     *
     * @return string
     */
    public function getBccAddrs()
    {
        return $this->bccAddrs;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return EmailsText
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set descriptionHtml
     *
     * @param string $descriptionHtml
     *
     * @return EmailsText
     */
    public function setDescriptionHtml($descriptionHtml)
    {
        $this->descriptionHtml = $descriptionHtml;

        return $this;
    }

    /**
     * Get descriptionHtml
     *
     * @return string
     */
    public function getDescriptionHtml()
    {
        return $this->descriptionHtml;
    }

    /**
     * Set rawSource
     *
     * @param string $rawSource
     *
     * @return EmailsText
     */
    public function setRawSource($rawSource)
    {
        $this->rawSource = $rawSource;

        return $this;
    }

    /**
     * Get rawSource
     *
     * @return string
     */
    public function getRawSource()
    {
        return $this->rawSource;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return EmailsText
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

