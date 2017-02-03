<?php

namespace Entities;

/**
 * Leads
 */
class Leads
{
    /**
     * @var string
     */
    private $id;

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
    private $salutation;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $title;

    /**
     * @var string
     */
    private $photo;

    /**
     * @var string
     */
    private $department;

    /**
     * @var boolean
     */
    private $doNotCall = '0';

    /**
     * @var string
     */
    private $phoneHome;

    /**
     * @var string
     */
    private $phoneMobile;

    /**
     * @var string
     */
    private $phoneWork;

    /**
     * @var string
     */
    private $phoneOther;

    /**
     * @var string
     */
    private $phoneFax;

    /**
     * @var string
     */
    private $primaryAddressStreet;

    /**
     * @var string
     */
    private $primaryAddressCity;

    /**
     * @var string
     */
    private $primaryAddressState;

    /**
     * @var string
     */
    private $primaryAddressPostalcode;

    /**
     * @var string
     */
    private $primaryAddressCountry;

    /**
     * @var string
     */
    private $altAddressStreet;

    /**
     * @var string
     */
    private $altAddressCity;

    /**
     * @var string
     */
    private $altAddressState;

    /**
     * @var string
     */
    private $altAddressPostalcode;

    /**
     * @var string
     */
    private $altAddressCountry;

    /**
     * @var string
     */
    private $assistant;

    /**
     * @var string
     */
    private $assistantPhone;

    /**
     * @var boolean
     */
    private $converted = '0';

    /**
     * @var string
     */
    private $referedBy;

    /**
     * @var string
     */
    private $leadSource;

    /**
     * @var string
     */
    private $leadSourceDescription;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $statusDescription;

    /**
     * @var string
     */
    private $reportsToId;

    /**
     * @var string
     */
    private $accountName;

    /**
     * @var string
     */
    private $accountDescription;

    /**
     * @var string
     */
    private $contactId;

    /**
     * @var string
     */
    private $accountId;

    /**
     * @var string
     */
    private $opportunityId;

    /**
     * @var string
     */
    private $opportunityName;

    /**
     * @var string
     */
    private $opportunityAmount;

    /**
     * @var string
     */
    private $campaignId;

    /**
     * @var \DateTime
     */
    private $birthdate;

    /**
     * @var string
     */
    private $portalName;

    /**
     * @var string
     */
    private $portalApp;

    /**
     * @var string
     */
    private $website;


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
     * Set dateEntered
     *
     * @param \DateTime $dateEntered
     *
     * @return Leads
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
     * @return Leads
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
     * @return Leads
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
     * @return Leads
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
     * @return Leads
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
     * @return Leads
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
     * @return Leads
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
     * Set salutation
     *
     * @param string $salutation
     *
     * @return Leads
     */
    public function setSalutation($salutation)
    {
        $this->salutation = $salutation;

        return $this;
    }

    /**
     * Get salutation
     *
     * @return string
     */
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * Set firstName
     *
     * @param string $firstName
     *
     * @return Leads
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set lastName
     *
     * @param string $lastName
     *
     * @return Leads
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;

        return $this;
    }

    /**
     * Get lastName
     *
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * Set title
     *
     * @param string $title
     *
     * @return Leads
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set photo
     *
     * @param string $photo
     *
     * @return Leads
     */
    public function setPhoto($photo)
    {
        $this->photo = $photo;

        return $this;
    }

    /**
     * Get photo
     *
     * @return string
     */
    public function getPhoto()
    {
        return $this->photo;
    }

    /**
     * Set department
     *
     * @param string $department
     *
     * @return Leads
     */
    public function setDepartment($department)
    {
        $this->department = $department;

        return $this;
    }

    /**
     * Get department
     *
     * @return string
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Set doNotCall
     *
     * @param boolean $doNotCall
     *
     * @return Leads
     */
    public function setDoNotCall($doNotCall)
    {
        $this->doNotCall = $doNotCall;

        return $this;
    }

    /**
     * Get doNotCall
     *
     * @return boolean
     */
    public function getDoNotCall()
    {
        return $this->doNotCall;
    }

    /**
     * Set phoneHome
     *
     * @param string $phoneHome
     *
     * @return Leads
     */
    public function setPhoneHome($phoneHome)
    {
        $this->phoneHome = $phoneHome;

        return $this;
    }

    /**
     * Get phoneHome
     *
     * @return string
     */
    public function getPhoneHome()
    {
        return $this->phoneHome;
    }

    /**
     * Set phoneMobile
     *
     * @param string $phoneMobile
     *
     * @return Leads
     */
    public function setPhoneMobile($phoneMobile)
    {
        $this->phoneMobile = $phoneMobile;

        return $this;
    }

    /**
     * Get phoneMobile
     *
     * @return string
     */
    public function getPhoneMobile()
    {
        return $this->phoneMobile;
    }

    /**
     * Set phoneWork
     *
     * @param string $phoneWork
     *
     * @return Leads
     */
    public function setPhoneWork($phoneWork)
    {
        $this->phoneWork = $phoneWork;

        return $this;
    }

    /**
     * Get phoneWork
     *
     * @return string
     */
    public function getPhoneWork()
    {
        return $this->phoneWork;
    }

    /**
     * Set phoneOther
     *
     * @param string $phoneOther
     *
     * @return Leads
     */
    public function setPhoneOther($phoneOther)
    {
        $this->phoneOther = $phoneOther;

        return $this;
    }

    /**
     * Get phoneOther
     *
     * @return string
     */
    public function getPhoneOther()
    {
        return $this->phoneOther;
    }

    /**
     * Set phoneFax
     *
     * @param string $phoneFax
     *
     * @return Leads
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
     * Set primaryAddressStreet
     *
     * @param string $primaryAddressStreet
     *
     * @return Leads
     */
    public function setPrimaryAddressStreet($primaryAddressStreet)
    {
        $this->primaryAddressStreet = $primaryAddressStreet;

        return $this;
    }

    /**
     * Get primaryAddressStreet
     *
     * @return string
     */
    public function getPrimaryAddressStreet()
    {
        return $this->primaryAddressStreet;
    }

    /**
     * Set primaryAddressCity
     *
     * @param string $primaryAddressCity
     *
     * @return Leads
     */
    public function setPrimaryAddressCity($primaryAddressCity)
    {
        $this->primaryAddressCity = $primaryAddressCity;

        return $this;
    }

    /**
     * Get primaryAddressCity
     *
     * @return string
     */
    public function getPrimaryAddressCity()
    {
        return $this->primaryAddressCity;
    }

    /**
     * Set primaryAddressState
     *
     * @param string $primaryAddressState
     *
     * @return Leads
     */
    public function setPrimaryAddressState($primaryAddressState)
    {
        $this->primaryAddressState = $primaryAddressState;

        return $this;
    }

    /**
     * Get primaryAddressState
     *
     * @return string
     */
    public function getPrimaryAddressState()
    {
        return $this->primaryAddressState;
    }

    /**
     * Set primaryAddressPostalcode
     *
     * @param string $primaryAddressPostalcode
     *
     * @return Leads
     */
    public function setPrimaryAddressPostalcode($primaryAddressPostalcode)
    {
        $this->primaryAddressPostalcode = $primaryAddressPostalcode;

        return $this;
    }

    /**
     * Get primaryAddressPostalcode
     *
     * @return string
     */
    public function getPrimaryAddressPostalcode()
    {
        return $this->primaryAddressPostalcode;
    }

    /**
     * Set primaryAddressCountry
     *
     * @param string $primaryAddressCountry
     *
     * @return Leads
     */
    public function setPrimaryAddressCountry($primaryAddressCountry)
    {
        $this->primaryAddressCountry = $primaryAddressCountry;

        return $this;
    }

    /**
     * Get primaryAddressCountry
     *
     * @return string
     */
    public function getPrimaryAddressCountry()
    {
        return $this->primaryAddressCountry;
    }

    /**
     * Set altAddressStreet
     *
     * @param string $altAddressStreet
     *
     * @return Leads
     */
    public function setAltAddressStreet($altAddressStreet)
    {
        $this->altAddressStreet = $altAddressStreet;

        return $this;
    }

    /**
     * Get altAddressStreet
     *
     * @return string
     */
    public function getAltAddressStreet()
    {
        return $this->altAddressStreet;
    }

    /**
     * Set altAddressCity
     *
     * @param string $altAddressCity
     *
     * @return Leads
     */
    public function setAltAddressCity($altAddressCity)
    {
        $this->altAddressCity = $altAddressCity;

        return $this;
    }

    /**
     * Get altAddressCity
     *
     * @return string
     */
    public function getAltAddressCity()
    {
        return $this->altAddressCity;
    }

    /**
     * Set altAddressState
     *
     * @param string $altAddressState
     *
     * @return Leads
     */
    public function setAltAddressState($altAddressState)
    {
        $this->altAddressState = $altAddressState;

        return $this;
    }

    /**
     * Get altAddressState
     *
     * @return string
     */
    public function getAltAddressState()
    {
        return $this->altAddressState;
    }

    /**
     * Set altAddressPostalcode
     *
     * @param string $altAddressPostalcode
     *
     * @return Leads
     */
    public function setAltAddressPostalcode($altAddressPostalcode)
    {
        $this->altAddressPostalcode = $altAddressPostalcode;

        return $this;
    }

    /**
     * Get altAddressPostalcode
     *
     * @return string
     */
    public function getAltAddressPostalcode()
    {
        return $this->altAddressPostalcode;
    }

    /**
     * Set altAddressCountry
     *
     * @param string $altAddressCountry
     *
     * @return Leads
     */
    public function setAltAddressCountry($altAddressCountry)
    {
        $this->altAddressCountry = $altAddressCountry;

        return $this;
    }

    /**
     * Get altAddressCountry
     *
     * @return string
     */
    public function getAltAddressCountry()
    {
        return $this->altAddressCountry;
    }

    /**
     * Set assistant
     *
     * @param string $assistant
     *
     * @return Leads
     */
    public function setAssistant($assistant)
    {
        $this->assistant = $assistant;

        return $this;
    }

    /**
     * Get assistant
     *
     * @return string
     */
    public function getAssistant()
    {
        return $this->assistant;
    }

    /**
     * Set assistantPhone
     *
     * @param string $assistantPhone
     *
     * @return Leads
     */
    public function setAssistantPhone($assistantPhone)
    {
        $this->assistantPhone = $assistantPhone;

        return $this;
    }

    /**
     * Get assistantPhone
     *
     * @return string
     */
    public function getAssistantPhone()
    {
        return $this->assistantPhone;
    }

    /**
     * Set converted
     *
     * @param boolean $converted
     *
     * @return Leads
     */
    public function setConverted($converted)
    {
        $this->converted = $converted;

        return $this;
    }

    /**
     * Get converted
     *
     * @return boolean
     */
    public function getConverted()
    {
        return $this->converted;
    }

    /**
     * Set referedBy
     *
     * @param string $referedBy
     *
     * @return Leads
     */
    public function setReferedBy($referedBy)
    {
        $this->referedBy = $referedBy;

        return $this;
    }

    /**
     * Get referedBy
     *
     * @return string
     */
    public function getReferedBy()
    {
        return $this->referedBy;
    }

    /**
     * Set leadSource
     *
     * @param string $leadSource
     *
     * @return Leads
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
     * Set leadSourceDescription
     *
     * @param string $leadSourceDescription
     *
     * @return Leads
     */
    public function setLeadSourceDescription($leadSourceDescription)
    {
        $this->leadSourceDescription = $leadSourceDescription;

        return $this;
    }

    /**
     * Get leadSourceDescription
     *
     * @return string
     */
    public function getLeadSourceDescription()
    {
        return $this->leadSourceDescription;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return Leads
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
     * Set statusDescription
     *
     * @param string $statusDescription
     *
     * @return Leads
     */
    public function setStatusDescription($statusDescription)
    {
        $this->statusDescription = $statusDescription;

        return $this;
    }

    /**
     * Get statusDescription
     *
     * @return string
     */
    public function getStatusDescription()
    {
        return $this->statusDescription;
    }

    /**
     * Set reportsToId
     *
     * @param string $reportsToId
     *
     * @return Leads
     */
    public function setReportsToId($reportsToId)
    {
        $this->reportsToId = $reportsToId;

        return $this;
    }

    /**
     * Get reportsToId
     *
     * @return string
     */
    public function getReportsToId()
    {
        return $this->reportsToId;
    }

    /**
     * Set accountName
     *
     * @param string $accountName
     *
     * @return Leads
     */
    public function setAccountName($accountName)
    {
        $this->accountName = $accountName;

        return $this;
    }

    /**
     * Get accountName
     *
     * @return string
     */
    public function getAccountName()
    {
        return $this->accountName;
    }

    /**
     * Set accountDescription
     *
     * @param string $accountDescription
     *
     * @return Leads
     */
    public function setAccountDescription($accountDescription)
    {
        $this->accountDescription = $accountDescription;

        return $this;
    }

    /**
     * Get accountDescription
     *
     * @return string
     */
    public function getAccountDescription()
    {
        return $this->accountDescription;
    }

    /**
     * Set contactId
     *
     * @param string $contactId
     *
     * @return Leads
     */
    public function setContactId($contactId)
    {
        $this->contactId = $contactId;

        return $this;
    }

    /**
     * Get contactId
     *
     * @return string
     */
    public function getContactId()
    {
        return $this->contactId;
    }

    /**
     * Set accountId
     *
     * @param string $accountId
     *
     * @return Leads
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * Get accountId
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * Set opportunityId
     *
     * @param string $opportunityId
     *
     * @return Leads
     */
    public function setOpportunityId($opportunityId)
    {
        $this->opportunityId = $opportunityId;

        return $this;
    }

    /**
     * Get opportunityId
     *
     * @return string
     */
    public function getOpportunityId()
    {
        return $this->opportunityId;
    }

    /**
     * Set opportunityName
     *
     * @param string $opportunityName
     *
     * @return Leads
     */
    public function setOpportunityName($opportunityName)
    {
        $this->opportunityName = $opportunityName;

        return $this;
    }

    /**
     * Get opportunityName
     *
     * @return string
     */
    public function getOpportunityName()
    {
        return $this->opportunityName;
    }

    /**
     * Set opportunityAmount
     *
     * @param string $opportunityAmount
     *
     * @return Leads
     */
    public function setOpportunityAmount($opportunityAmount)
    {
        $this->opportunityAmount = $opportunityAmount;

        return $this;
    }

    /**
     * Get opportunityAmount
     *
     * @return string
     */
    public function getOpportunityAmount()
    {
        return $this->opportunityAmount;
    }

    /**
     * Set campaignId
     *
     * @param string $campaignId
     *
     * @return Leads
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
     * Set birthdate
     *
     * @param \DateTime $birthdate
     *
     * @return Leads
     */
    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;

        return $this;
    }

    /**
     * Get birthdate
     *
     * @return \DateTime
     */
    public function getBirthdate()
    {
        return $this->birthdate;
    }

    /**
     * Set portalName
     *
     * @param string $portalName
     *
     * @return Leads
     */
    public function setPortalName($portalName)
    {
        $this->portalName = $portalName;

        return $this;
    }

    /**
     * Get portalName
     *
     * @return string
     */
    public function getPortalName()
    {
        return $this->portalName;
    }

    /**
     * Set portalApp
     *
     * @param string $portalApp
     *
     * @return Leads
     */
    public function setPortalApp($portalApp)
    {
        $this->portalApp = $portalApp;

        return $this;
    }

    /**
     * Get portalApp
     *
     * @return string
     */
    public function getPortalApp()
    {
        return $this->portalApp;
    }

    /**
     * Set website
     *
     * @param string $website
     *
     * @return Leads
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
}

