<?php

namespace Entities;

/**
 * EmailsBeans
 */
class EmailsBeans
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
    private $beanId;

    /**
     * @var string
     */
    private $beanModule;

    /**
     * @var string
     */
    private $campaignData;

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
     * Set emailId
     *
     * @param string $emailId
     *
     * @return EmailsBeans
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
     * Set beanId
     *
     * @param string $beanId
     *
     * @return EmailsBeans
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
     * @return EmailsBeans
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
     * Set campaignData
     *
     * @param string $campaignData
     *
     * @return EmailsBeans
     */
    public function setCampaignData($campaignData)
    {
        $this->campaignData = $campaignData;

        return $this;
    }

    /**
     * Get campaignData
     *
     * @return string
     */
    public function getCampaignData()
    {
        return $this->campaignData;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     *
     * @return EmailsBeans
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
     * @return EmailsBeans
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

