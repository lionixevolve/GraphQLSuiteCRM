<?php

namespace Entities;

/**
 * Opportunities
 */
class Opportunities
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
     * @var string
     */
    private $description;

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
    private $opportunityType;

    /**
     * @var string
     */
    private $campaignId;

    /**
     * @var string
     */
    private $leadSource;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var float
     */
    private $amountUsdollar;

    /**
     * @var string
     */
    private $currencyId;

    /**
     * @var \DateTime
     */
    private $dateClosed;

    /**
     * @var string
     */
    private $nextStep;

    /**
     * @var string
     */
    private $salesStage;

    /**
     * @var float
     */
    private $probability;


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
     * @return Opportunities
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
     * @return Opportunities
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
     * @return Opportunities
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
     * @return Opportunities
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
     * @return Opportunities
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
     * Set description
     *
     * @param string $description
     *
     * @return Opportunities
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
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return Opportunities
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
     * @return Opportunities
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
     * Set opportunityType
     *
     * @param string $opportunityType
     *
     * @return Opportunities
     */
    public function setOpportunityType($opportunityType)
    {
        $this->opportunityType = $opportunityType;

        return $this;
    }

    /**
     * Get opportunityType
     *
     * @return string
     */
    public function getOpportunityType()
    {
        return $this->opportunityType;
    }

    /**
     * Set campaignId
     *
     * @param string $campaignId
     *
     * @return Opportunities
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
     * Set leadSource
     *
     * @param string $leadSource
     *
     * @return Opportunities
     */
    public function setLeadSource($leadSource)
    {
        $this->leadSource = $leadSource;

        return $this;
    }

    /**
     * Get leadSource
     *
     * @return string
     */
    public function getLeadSource()
    {
        return $this->leadSource;
    }

    /**
     * Set amount
     *
     * @param float $amount
     *
     * @return Opportunities
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * Set amountUsdollar
     *
     * @param float $amountUsdollar
     *
     * @return Opportunities
     */
    public function setAmountUsdollar($amountUsdollar)
    {
        $this->amountUsdollar = $amountUsdollar;

        return $this;
    }

    /**
     * Get amountUsdollar
     *
     * @return float
     */
    public function getAmountUsdollar()
    {
        return $this->amountUsdollar;
    }

    /**
     * Set currencyId
     *
     * @param string $currencyId
     *
     * @return Opportunities
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
     * Set dateClosed
     *
     * @param \DateTime $dateClosed
     *
     * @return Opportunities
     */
    public function setDateClosed($dateClosed)
    {
        $this->dateClosed = $dateClosed;

        return $this;
    }

    /**
     * Get dateClosed
     *
     * @return \DateTime
     */
    public function getDateClosed()
    {
        return $this->dateClosed;
    }

    /**
     * Set nextStep
     *
     * @param string $nextStep
     *
     * @return Opportunities
     */
    public function setNextStep($nextStep)
    {
        $this->nextStep = $nextStep;

        return $this;
    }

    /**
     * Get nextStep
     *
     * @return string
     */
    public function getNextStep()
    {
        return $this->nextStep;
    }

    /**
     * Set salesStage
     *
     * @param string $salesStage
     *
     * @return Opportunities
     */
    public function setSalesStage($salesStage)
    {
        $this->salesStage = $salesStage;

        return $this;
    }

    /**
     * Get salesStage
     *
     * @return string
     */
    public function getSalesStage()
    {
        return $this->salesStage;
    }

    /**
     * Set probability
     *
     * @param float $probability
     *
     * @return Opportunities
     */
    public function setProbability($probability)
    {
        $this->probability = $probability;

        return $this;
    }

    /**
     * Get probability
     *
     * @return float
     */
    public function getProbability()
    {
        return $this->probability;
    }
}

