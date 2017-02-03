<?php

namespace Entities;

/**
 * Prospects
 */
class Prospects
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
     * @var integer
     */
    private $trackerKey;

    /**
     * @var \DateTime
     */
    private $birthdate;

    /**
     * @var string
     */
    private $leadId;

    /**
     * @var string
     */
    private $accountName;

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
     * Set dateEntered
     *
     * @param \DateTime $dateEntered
     *
     * @return Prospects
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
     * @return Prospects
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
     * @return Prospects
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
     * @return Prospects
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
     * @return Prospects
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
     * @return Prospects
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
     * @return Prospects
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
     * @return Prospects
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
     * @return Prospects
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
     * @return Prospects
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
     * @return Prospects
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
     * @return Prospects
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
     * @return Prospects
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
     * @return Prospects
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
     * @return Prospects
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
     * @return Prospects
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
     * @return Prospects
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
     * @return Prospects
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
     * @return Prospects
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
     * @return Prospects
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
     * @return Prospects
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
     * @return Prospects
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
     * @return Prospects
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
     * @return Prospects
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
     * @return Prospects
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
     * @return Prospects
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
     * @return Prospects
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
     * @return Prospects
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
     * @return Prospects
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
     * @return Prospects
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
     * @return Prospects
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
     * Set trackerKey
     *
     * @param integer $trackerKey
     *
     * @return Prospects
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
     * Set birthdate
     *
     * @param \DateTime $birthdate
     *
     * @return Prospects
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
     * Set leadId
     *
     * @param string $leadId
     *
     * @return Prospects
     */
    public function setLeadId($leadId)
    {
        $this->leadId = $leadId;

        return $this;
    }

    /**
     * Get leadId
     *
     * @return string
     */
    public function getLeadId()
    {
        return $this->leadId;
    }

    /**
     * Set accountName
     *
     * @param string $accountName
     *
     * @return Prospects
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
     * Set campaignId
     *
     * @param string $campaignId
     *
     * @return Prospects
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

