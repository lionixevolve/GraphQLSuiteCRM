<?php

namespace Entities;

/**
 * CampaignTrkrs
 */
class CampaignTrkrs
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $trackerName;

    /**
     * @var string
     */
    private $trackerUrl = 'http://';

    /**
     * @var integer
     */
    private $trackerKey;

    /**
     * @var string
     */
    private $campaignId;

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
    private $isOptout = '0';

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
     * Set trackerName
     *
     * @param string $trackerName
     *
     * @return CampaignTrkrs
     */
    public function setTrackerName($trackerName)
    {
        $this->trackerName = $trackerName;

        return $this;
    }

    /**
     * Get trackerName
     *
     * @return string
     */
    public function getTrackerName()
    {
        return $this->trackerName;
    }

    /**
     * Set trackerUrl
     *
     * @param string $trackerUrl
     *
     * @return CampaignTrkrs
     */
    public function setTrackerUrl($trackerUrl)
    {
        $this->trackerUrl = $trackerUrl;

        return $this;
    }

    /**
     * Get trackerUrl
     *
     * @return string
     */
    public function getTrackerUrl()
    {
        return $this->trackerUrl;
    }

    /**
     * Set trackerKey
     *
     * @param integer $trackerKey
     *
     * @return CampaignTrkrs
     */
    public function setTrackerKey($trackerKey)
    {
        $this->trackerKey = $trackerKey;

        return $this;
    }

    /**
     * Get trackerKey
     *
     * @return integer
     */
    public function getTrackerKey()
    {
        return $this->trackerKey;
    }

    /**
     * Set campaignId
     *
     * @param string $campaignId
     *
     * @return CampaignTrkrs
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;

        return $this;
    }

    /**
     * Get campaignId
     *
     * @return string
     */
    public function getCampaignId()
    {
        return $this->campaignId;
    }

    /**
     * Set dateEntered
     *
     * @param \DateTime $dateEntered
     *
     * @return CampaignTrkrs
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
     * @return CampaignTrkrs
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
     * @return CampaignTrkrs
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
     * @return CampaignTrkrs
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
     * Set isOptout
     *
     * @param boolean $isOptout
     *
     * @return CampaignTrkrs
     */
    public function setIsOptout($isOptout)
    {
        $this->isOptout = $isOptout;

        return $this;
    }

    /**
     * Get isOptout
     *
     * @return boolean
     */
    public function getIsOptout()
    {
        return $this->isOptout;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return CampaignTrkrs
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

