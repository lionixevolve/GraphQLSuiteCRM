<?php

namespace Entities;

/**
 * Accounts
 */
class Accounts
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
    private $accountType;

    /**
     * @var string
     */
    private $industry;

    /**
     * @var string
     */
    private $annualRevenue;

    /**
     * @var string
     */
    private $phoneFax;

    /**
     * @var string
     */
    private $billingAddressStreet;

    /**
     * @var string
     */
    private $billingAddressCity;

    /**
     * @var string
     */
    private $billingAddressState;

    /**
     * @var string
     */
    private $billingAddressPostalcode;

    /**
     * @var string
     */
    private $billingAddressCountry;

    /**
     * @var string
     */
    private $rating;

    /**
     * @var string
     */
    private $phoneOffice;

    /**
     * @var string
     */
    private $phoneAlternate;

    /**
     * @var string
     */
    private $website;

    /**
     * @var string
     */
    private $ownership;

    /**
     * @var string
     */
    private $employees;

    /**
     * @var string
     */
    private $tickerSymbol;

    /**
     * @var string
     */
    private $shippingAddressStreet;

    /**
     * @var string
     */
    private $shippingAddressCity;

    /**
     * @var string
     */
    private $shippingAddressState;

    /**
     * @var string
     */
    private $shippingAddressPostalcode;

    /**
     * @var string
     */
    private $shippingAddressCountry;

    /**
     * @var string
     */
    private $parentId;

    /**
     * @var string
     */
    private $sicCode;

    /**
     * @var string
     */
    private $campaignId;


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
     * @return Accounts
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
     * @return Accounts
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
     * @return Accounts
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
     * @return Accounts
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
     * @return Accounts
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
     * @return Accounts
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
     * @return Accounts
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
     * @return Accounts
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
     * Set accountType
     *
     * @param string $accountType
     *
     * @return Accounts
     */
    public function setAccountType($accountType)
    {
        $this->accountType = $accountType;

        return $this;
    }

    /**
     * Get accountType
     *
     * @return string
     */
    public function getAccountType()
    {
        return $this->accountType;
    }

    /**
     * Set industry
     *
     * @param string $industry
     *
     * @return Accounts
     */
    public function setIndustry($industry)
    {
        $this->industry = $industry;

        return $this;
    }

    /**
     * Get industry
     *
     * @return string
     */
    public function getIndustry()
    {
        return $this->industry;
    }

    /**
     * Set annualRevenue
     *
     * @param string $annualRevenue
     *
     * @return Accounts
     */
    public function setAnnualRevenue($annualRevenue)
    {
        $this->annualRevenue = $annualRevenue;

        return $this;
    }

    /**
     * Get annualRevenue
     *
     * @return string
     */
    public function getAnnualRevenue()
    {
        return $this->annualRevenue;
    }

    /**
     * Set phoneFax
     *
     * @param string $phoneFax
     *
     * @return Accounts
     */
    public function setPhoneFax($phoneFax)
    {
        $this->phoneFax = $phoneFax;

        return $this;
    }

    /**
     * Get phoneFax
     *
     * @return string
     */
    public function getPhoneFax()
    {
        return $this->phoneFax;
    }

    /**
     * Set billingAddressStreet
     *
     * @param string $billingAddressStreet
     *
     * @return Accounts
     */
    public function setBillingAddressStreet($billingAddressStreet)
    {
        $this->billingAddressStreet = $billingAddressStreet;

        return $this;
    }

    /**
     * Get billingAddressStreet
     *
     * @return string
     */
    public function getBillingAddressStreet()
    {
        return $this->billingAddressStreet;
    }

    /**
     * Set billingAddressCity
     *
     * @param string $billingAddressCity
     *
     * @return Accounts
     */
    public function setBillingAddressCity($billingAddressCity)
    {
        $this->billingAddressCity = $billingAddressCity;

        return $this;
    }

    /**
     * Get billingAddressCity
     *
     * @return string
     */
    public function getBillingAddressCity()
    {
        return $this->billingAddressCity;
    }

    /**
     * Set billingAddressState
     *
     * @param string $billingAddressState
     *
     * @return Accounts
     */
    public function setBillingAddressState($billingAddressState)
    {
        $this->billingAddressState = $billingAddressState;

        return $this;
    }

    /**
     * Get billingAddressState
     *
     * @return string
     */
    public function getBillingAddressState()
    {
        return $this->billingAddressState;
    }

    /**
     * Set billingAddressPostalcode
     *
     * @param string $billingAddressPostalcode
     *
     * @return Accounts
     */
    public function setBillingAddressPostalcode($billingAddressPostalcode)
    {
        $this->billingAddressPostalcode = $billingAddressPostalcode;

        return $this;
    }

    /**
     * Get billingAddressPostalcode
     *
     * @return string
     */
    public function getBillingAddressPostalcode()
    {
        return $this->billingAddressPostalcode;
    }

    /**
     * Set billingAddressCountry
     *
     * @param string $billingAddressCountry
     *
     * @return Accounts
     */
    public function setBillingAddressCountry($billingAddressCountry)
    {
        $this->billingAddressCountry = $billingAddressCountry;

        return $this;
    }

    /**
     * Get billingAddressCountry
     *
     * @return string
     */
    public function getBillingAddressCountry()
    {
        return $this->billingAddressCountry;
    }

    /**
     * Set rating
     *
     * @param string $rating
     *
     * @return Accounts
     */
    public function setRating($rating)
    {
        $this->rating = $rating;

        return $this;
    }

    /**
     * Get rating
     *
     * @return string
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * Set phoneOffice
     *
     * @param string $phoneOffice
     *
     * @return Accounts
     */
    public function setPhoneOffice($phoneOffice)
    {
        $this->phoneOffice = $phoneOffice;

        return $this;
    }

    /**
     * Get phoneOffice
     *
     * @return string
     */
    public function getPhoneOffice()
    {
        return $this->phoneOffice;
    }

    /**
     * Set phoneAlternate
     *
     * @param string $phoneAlternate
     *
     * @return Accounts
     */
    public function setPhoneAlternate($phoneAlternate)
    {
        $this->phoneAlternate = $phoneAlternate;

        return $this;
    }

    /**
     * Get phoneAlternate
     *
     * @return string
     */
    public function getPhoneAlternate()
    {
        return $this->phoneAlternate;
    }

    /**
     * Set website
     *
     * @param string $website
     *
     * @return Accounts
     */
    public function setWebsite($website)
    {
        $this->website = $website;

        return $this;
    }

    /**
     * Get website
     *
     * @return string
     */
    public function getWebsite()
    {
        return $this->website;
    }

    /**
     * Set ownership
     *
     * @param string $ownership
     *
     * @return Accounts
     */
    public function setOwnership($ownership)
    {
        $this->ownership = $ownership;

        return $this;
    }

    /**
     * Get ownership
     *
     * @return string
     */
    public function getOwnership()
    {
        return $this->ownership;
    }

    /**
     * Set employees
     *
     * @param string $employees
     *
     * @return Accounts
     */
    public function setEmployees($employees)
    {
        $this->employees = $employees;

        return $this;
    }

    /**
     * Get employees
     *
     * @return string
     */
    public function getEmployees()
    {
        return $this->employees;
    }

    /**
     * Set tickerSymbol
     *
     * @param string $tickerSymbol
     *
     * @return Accounts
     */
    public function setTickerSymbol($tickerSymbol)
    {
        $this->tickerSymbol = $tickerSymbol;

        return $this;
    }

    /**
     * Get tickerSymbol
     *
     * @return string
     */
    public function getTickerSymbol()
    {
        return $this->tickerSymbol;
    }

    /**
     * Set shippingAddressStreet
     *
     * @param string $shippingAddressStreet
     *
     * @return Accounts
     */
    public function setShippingAddressStreet($shippingAddressStreet)
    {
        $this->shippingAddressStreet = $shippingAddressStreet;

        return $this;
    }

    /**
     * Get shippingAddressStreet
     *
     * @return string
     */
    public function getShippingAddressStreet()
    {
        return $this->shippingAddressStreet;
    }

    /**
     * Set shippingAddressCity
     *
     * @param string $shippingAddressCity
     *
     * @return Accounts
     */
    public function setShippingAddressCity($shippingAddressCity)
    {
        $this->shippingAddressCity = $shippingAddressCity;

        return $this;
    }

    /**
     * Get shippingAddressCity
     *
     * @return string
     */
    public function getShippingAddressCity()
    {
        return $this->shippingAddressCity;
    }

    /**
     * Set shippingAddressState
     *
     * @param string $shippingAddressState
     *
     * @return Accounts
     */
    public function setShippingAddressState($shippingAddressState)
    {
        $this->shippingAddressState = $shippingAddressState;

        return $this;
    }

    /**
     * Get shippingAddressState
     *
     * @return string
     */
    public function getShippingAddressState()
    {
        return $this->shippingAddressState;
    }

    /**
     * Set shippingAddressPostalcode
     *
     * @param string $shippingAddressPostalcode
     *
     * @return Accounts
     */
    public function setShippingAddressPostalcode($shippingAddressPostalcode)
    {
        $this->shippingAddressPostalcode = $shippingAddressPostalcode;

        return $this;
    }

    /**
     * Get shippingAddressPostalcode
     *
     * @return string
     */
    public function getShippingAddressPostalcode()
    {
        return $this->shippingAddressPostalcode;
    }

    /**
     * Set shippingAddressCountry
     *
     * @param string $shippingAddressCountry
     *
     * @return Accounts
     */
    public function setShippingAddressCountry($shippingAddressCountry)
    {
        $this->shippingAddressCountry = $shippingAddressCountry;

        return $this;
    }

    /**
     * Get shippingAddressCountry
     *
     * @return string
     */
    public function getShippingAddressCountry()
    {
        return $this->shippingAddressCountry;
    }

    /**
     * Set parentId
     *
     * @param string $parentId
     *
     * @return Accounts
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Get parentId
     *
     * @return string
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set sicCode
     *
     * @param string $sicCode
     *
     * @return Accounts
     */
    public function setSicCode($sicCode)
    {
        $this->sicCode = $sicCode;

        return $this;
    }

    /**
     * Get sicCode
     *
     * @return string
     */
    public function getSicCode()
    {
        return $this->sicCode;
    }

    /**
     * Set campaignId
     *
     * @param string $campaignId
     *
     * @return Accounts
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
}

