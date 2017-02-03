<?php

namespace Entities;

/**
 * Eapm
 */
class Eapm
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
    private $password;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $application = 'webex';

    /**
     * @var string
     */
    private $apiData;

    /**
     * @var string
     */
    private $consumerKey;

    /**
     * @var string
     */
    private $consumerSecret;

    /**
     * @var string
     */
    private $oauthToken;

    /**
     * @var string
     */
    private $oauthSecret;

    /**
     * @var boolean
     */
    private $validated;


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
     * @return Eapm
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
     * @return Eapm
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
     * @return Eapm
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
     * @return Eapm
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
     * @return Eapm
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
     * @return Eapm
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
     * @return Eapm
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
     * @return Eapm
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
     * Set password
     *
     * @param string $password
     *
     * @return Eapm
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return Eapm
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set application
     *
     * @param string $application
     *
     * @return Eapm
     */
    public function setApplication($application)
    {
        $this->application = $application;

        return $this;
    }

    /**
     * Get application
     *
     * @return string
     */
    public function getApplication()
    {
        return $this->application;
    }

    /**
     * Set apiData
     *
     * @param string $apiData
     *
     * @return Eapm
     */
    public function setApiData($apiData)
    {
        $this->apiData = $apiData;

        return $this;
    }

    /**
     * Get apiData
     *
     * @return string
     */
    public function getApiData()
    {
        return $this->apiData;
    }

    /**
     * Set consumerKey
     *
     * @param string $consumerKey
     *
     * @return Eapm
     */
    public function setConsumerKey($consumerKey)
    {
        $this->consumerKey = $consumerKey;

        return $this;
    }

    /**
     * Get consumerKey
     *
     * @return string
     */
    public function getConsumerKey()
    {
        return $this->consumerKey;
    }

    /**
     * Set consumerSecret
     *
     * @param string $consumerSecret
     *
     * @return Eapm
     */
    public function setConsumerSecret($consumerSecret)
    {
        $this->consumerSecret = $consumerSecret;

        return $this;
    }

    /**
     * Get consumerSecret
     *
     * @return string
     */
    public function getConsumerSecret()
    {
        return $this->consumerSecret;
    }

    /**
     * Set oauthToken
     *
     * @param string $oauthToken
     *
     * @return Eapm
     */
    public function setOauthToken($oauthToken)
    {
        $this->oauthToken = $oauthToken;

        return $this;
    }

    /**
     * Get oauthToken
     *
     * @return string
     */
    public function getOauthToken()
    {
        return $this->oauthToken;
    }

    /**
     * Set oauthSecret
     *
     * @param string $oauthSecret
     *
     * @return Eapm
     */
    public function setOauthSecret($oauthSecret)
    {
        $this->oauthSecret = $oauthSecret;

        return $this;
    }

    /**
     * Get oauthSecret
     *
     * @return string
     */
    public function getOauthSecret()
    {
        return $this->oauthSecret;
    }

    /**
     * Set validated
     *
     * @param boolean $validated
     *
     * @return Eapm
     */
    public function setValidated($validated)
    {
        $this->validated = $validated;

        return $this;
    }

    /**
     * Get validated
     *
     * @return boolean
     */
    public function getValidated()
    {
        return $this->validated;
    }
}

