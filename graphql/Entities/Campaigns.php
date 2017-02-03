<?php

namespace Entities;

/**
 * Campaigns
 */
class Campaigns
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
     * @var integer
     */
    private $trackerKey;

    /**
     * @var integer
     */
    private $trackerCount = '0';

    /**
     * @var string
     */
    private $referUrl = 'http://';

    /**
     * @var string
     */
    private $trackerText;

    /**
     * @var \DateTime
     */
    private $startDate;

    /**
     * @var \DateTime
     */
    private $endDate;

    /**
     * @var string
     */
    private $status;

    /**
     * @var integer
     */
    private $impressions = '0';

    /**
     * @var string
     */
    private $currencyId;

    /**
     * @var float
     */
    private $budget;

    /**
     * @var float
     */
    private $expectedCost;

    /**
     * @var float
     */
    private $actualCost;

    /**
     * @var float
     */
    private $expectedRevenue;

    /**
     * @var string
     */
    private $campaignType;

    /**
     * @var string
     */
    private $objective;

    /**
     * @var string
     */
    private $content;

    /**
     * @var string
     */
    private $frequency;


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
     * @return Campaigns
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
     * @return Campaigns
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
     * @return Campaigns
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
     * @return Campaigns
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
     * @return Campaigns
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
     * @return Campaigns
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
     * @return Campaigns
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
     * Set trackerKey
     *
     * @param integer $trackerKey
     *
     * @return Campaigns
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
     * Set trackerCount
     *
     * @param integer $trackerCount
     *
     * @return Campaigns
     */
    public function setTrackerCount($trackerCount)
    {
        $this->trackerCount = $trackerCount;

        return $this;
    }

    /**
     * Get trackerCount
     *
     * @return integer
     */
    public function getTrackerCount()
    {
        return $this->trackerCount;
    }

    /**
     * Set referUrl
     *
     * @param string $referUrl
     *
     * @return Campaigns
     */
    public function setReferUrl($referUrl)
    {
        $this->referUrl = $referUrl;

        return $this;
    }

    /**
     * Get referUrl
     *
     * @return string
     */
    public function getReferUrl()
    {
        return $this->referUrl;
    }

    /**
     * Set trackerText
     *
     * @param string $trackerText
     *
     * @return Campaigns
     */
    public function setTrackerText($trackerText)
    {
        $this->trackerText = $trackerText;

        return $this;
    }

    /**
     * Get trackerText
     *
     * @return string
     */
    public function getTrackerText()
    {
        return $this->trackerText;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return Campaigns
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     *
     * @return Campaigns
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Campaigns
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
     * Set impressions
     *
     * @param integer $impressions
     *
     * @return Campaigns
     */
    public function setImpressions($impressions)
    {
        $this->impressions = $impressions;

        return $this;
    }

    /**
     * Get impressions
     *
     * @return integer
     */
    public function getImpressions()
    {
        return $this->impressions;
    }

    /**
     * Set currencyId
     *
     * @param string $currencyId
     *
     * @return Campaigns
     */
    public function setCurrencyId($currencyId)
    {
        $this->currencyId = $currencyId;

        return $this;
    }

    /**
     * Get currencyId
     *
     * @return string
     */
    public function getCurrencyId()
    {
        return $this->currencyId;
    }

    /**
     * Set budget
     *
     * @param float $budget
     *
     * @return Campaigns
     */
    public function setBudget($budget)
    {
        $this->budget = $budget;

        return $this;
    }

    /**
     * Get budget
     *
     * @return float
     */
    public function getBudget()
    {
        return $this->budget;
    }

    /**
     * Set expectedCost
     *
     * @param float $expectedCost
     *
     * @return Campaigns
     */
    public function setExpectedCost($expectedCost)
    {
        $this->expectedCost = $expectedCost;

        return $this;
    }

    /**
     * Get expectedCost
     *
     * @return float
     */
    public function getExpectedCost()
    {
        return $this->expectedCost;
    }

    /**
     * Set actualCost
     *
     * @param float $actualCost
     *
     * @return Campaigns
     */
    public function setActualCost($actualCost)
    {
        $this->actualCost = $actualCost;

        return $this;
    }

    /**
     * Get actualCost
     *
     * @return float
     */
    public function getActualCost()
    {
        return $this->actualCost;
    }

    /**
     * Set expectedRevenue
     *
     * @param float $expectedRevenue
     *
     * @return Campaigns
     */
    public function setExpectedRevenue($expectedRevenue)
    {
        $this->expectedRevenue = $expectedRevenue;

        return $this;
    }

    /**
     * Get expectedRevenue
     *
     * @return float
     */
    public function getExpectedRevenue()
    {
        return $this->expectedRevenue;
    }

    /**
     * Set campaignType
     *
     * @param string $campaignType
     *
     * @return Campaigns
     */
    public function setCampaignType($campaignType)
    {
        $this->campaignType = $campaignType;

        return $this;
    }

    /**
     * Get campaignType
     *
     * @return string
     */
    public function getCampaignType()
    {
        return $this->campaignType;
    }

    /**
     * Set objective
     *
     * @param string $objective
     *
     * @return Campaigns
     */
    public function setObjective($objective)
    {
        $this->objective = $objective;

        return $this;
    }

    /**
     * Get objective
     *
     * @return string
     */
    public function getObjective()
    {
        return $this->objective;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Campaigns
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set frequency
     *
     * @param string $frequency
     *
     * @return Campaigns
     */
    public function setFrequency($frequency)
    {
        $this->frequency = $frequency;

        return $this;
    }

    /**
     * Get frequency
     *
     * @return string
     */
    public function getFrequency()
    {
        return $this->frequency;
    }
}

