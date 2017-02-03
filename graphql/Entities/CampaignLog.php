<?php

namespace Entities;

/**
 * CampaignLog
 */
class CampaignLog
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $campaignId;

    /**
     * @var string
     */
    private $targetTrackerKey;

    /**
     * @var string
     */
    private $targetId;

    /**
     * @var string
     */
    private $targetType;

    /**
     * @var string
     */
    private $activityType;

    /**
     * @var \DateTime
     */
    private $activityDate;

    /**
     * @var string
     */
    private $relatedId;

    /**
     * @var string
     */
    private $relatedType;

    /**
     * @var boolean
     */
    private $archived = '0';

    /**
     * @var integer
     */
    private $hits = '0';

    /**
     * @var string
     */
    private $listId;

    /**
     * @var boolean
     */
    private $deleted;

    /**
     * @var \DateTime
     */
    private $dateModified;

    /**
     * @var string
     */
    private $moreInformation;

    /**
     * @var string
     */
    private $marketingId;


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
     * Set campaignId
     *
     * @param string $campaignId
     *
     * @return CampaignLog
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
     * Set targetTrackerKey
     *
     * @param string $targetTrackerKey
     *
     * @return CampaignLog
     */
    public function setTargetTrackerKey($targetTrackerKey)
    {
        $this->targetTrackerKey = $targetTrackerKey;

        return $this;
    }

    /**
     * Get targetTrackerKey
     *
     * @return string
     */
    public function getTargetTrackerKey()
    {
        return $this->targetTrackerKey;
    }

    /**
     * Set targetId
     *
     * @param string $targetId
     *
     * @return CampaignLog
     */
    public function setTargetId($targetId)
    {
        $this->targetId = $targetId;

        return $this;
    }

    /**
     * Get targetId
     *
     * @return string
     */
    public function getTargetId()
    {
        return $this->targetId;
    }

    /**
     * Set targetType
     *
     * @param string $targetType
     *
     * @return CampaignLog
     */
    public function setTargetType($targetType)
    {
        $this->targetType = $targetType;

        return $this;
    }

    /**
     * Get targetType
     *
     * @return string
     */
    public function getTargetType()
    {
        return $this->targetType;
    }

    /**
     * Set activityType
     *
     * @param string $activityType
     *
     * @return CampaignLog
     */
    public function setActivityType($activityType)
    {
        $this->activityType = $activityType;

        return $this;
    }

    /**
     * Get activityType
     *
     * @return string
     */
    public function getActivityType()
    {
        return $this->activityType;
    }

    /**
     * Set activityDate
     *
     * @param \DateTime $activityDate
     *
     * @return CampaignLog
     */
    public function setActivityDate($activityDate)
    {
        $this->activityDate = $activityDate;

        return $this;
    }

    /**
     * Get activityDate
     *
     * @return \DateTime
     */
    public function getActivityDate()
    {
        return $this->activityDate;
    }

    /**
     * Set relatedId
     *
     * @param string $relatedId
     *
     * @return CampaignLog
     */
    public function setRelatedId($relatedId)
    {
        $this->relatedId = $relatedId;

        return $this;
    }

    /**
     * Get relatedId
     *
     * @return string
     */
    public function getRelatedId()
    {
        return $this->relatedId;
    }

    /**
     * Set relatedType
     *
     * @param string $relatedType
     *
     * @return CampaignLog
     */
    public function setRelatedType($relatedType)
    {
        $this->relatedType = $relatedType;

        return $this;
    }

    /**
     * Get relatedType
     *
     * @return string
     */
    public function getRelatedType()
    {
        return $this->relatedType;
    }

    /**
     * Set archived
     *
     * @param boolean $archived
     *
     * @return CampaignLog
     */
    public function setArchived($archived)
    {
        $this->archived = $archived;

        return $this;
    }

    /**
     * Get archived
     *
     * @return boolean
     */
    public function getArchived()
    {
        return $this->archived;
    }

    /**
     * Set hits
     *
     * @param integer $hits
     *
     * @return CampaignLog
     */
    public function setHits($hits)
    {
        $this->hits = $hits;

        return $this;
    }

    /**
     * Get hits
     *
     * @return integer
     */
    public function getHits()
    {
        return $this->hits;
    }

    /**
     * Set listId
     *
     * @param string $listId
     *
     * @return CampaignLog
     */
    public function setListId($listId)
    {
        $this->listId = $listId;

        return $this;
    }

    /**
     * Get listId
     *
     * @return string
     */
    public function getListId()
    {
        return $this->listId;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return CampaignLog
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
     * Set dateModified
     *
     * @param \DateTime $dateModified
     *
     * @return CampaignLog
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
     * Set moreInformation
     *
     * @param string $moreInformation
     *
     * @return CampaignLog
     */
    public function setMoreInformation($moreInformation)
    {
        $this->moreInformation = $moreInformation;

        return $this;
    }

    /**
     * Get moreInformation
     *
     * @return string
     */
    public function getMoreInformation()
    {
        return $this->moreInformation;
    }

    /**
     * Set marketingId
     *
     * @param string $marketingId
     *
     * @return CampaignLog
     */
    public function setMarketingId($marketingId)
    {
        $this->marketingId = $marketingId;

        return $this;
    }

    /**
     * Get marketingId
     *
     * @return string
     */
    public function getMarketingId()
    {
        return $this->marketingId;
    }
}

