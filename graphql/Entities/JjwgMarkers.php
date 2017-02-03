<?php

namespace Entities;

/**
 * JjwgMarkers
 */
class JjwgMarkers
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
    private $city;

    /**
     * @var string
     */
    private $state;

    /**
     * @var string
     */
    private $country;

    /**
     * @var float
     */
    private $jjwgMapsLat = '0.00000000';

    /**
     * @var float
     */
    private $jjwgMapsLng = '0.00000000';

    /**
     * @var string
     */
    private $markerImage = 'company';


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
     * @return JjwgMarkers
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
     * @return JjwgMarkers
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
     * @return JjwgMarkers
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
     * @return JjwgMarkers
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
     * @return JjwgMarkers
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
     * @return JjwgMarkers
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
     * @return JjwgMarkers
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
     * @return JjwgMarkers
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
     * Set city
     *
     * @param string $city
     *
     * @return JjwgMarkers
     */
    public function setCity($city)
    {
        $this->city = $city;

        return $this;
    }

    /**
     * Get city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * Set state
     *
     * @param string $state
     *
     * @return JjwgMarkers
     */
    public function setState($state)
    {
        $this->state = $state;

        return $this;
    }

    /**
     * Get state
     *
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set country
     *
     * @param string $country
     *
     * @return JjwgMarkers
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set jjwgMapsLat
     *
     * @param float $jjwgMapsLat
     *
     * @return JjwgMarkers
     */
    public function setJjwgMapsLat($jjwgMapsLat)
    {
        $this->jjwgMapsLat = $jjwgMapsLat;

        return $this;
    }

    /**
     * Get jjwgMapsLat
     *
     * @return float
     */
    public function getJjwgMapsLat()
    {
        return $this->jjwgMapsLat;
    }

    /**
     * Set jjwgMapsLng
     *
     * @param float $jjwgMapsLng
     *
     * @return JjwgMarkers
     */
    public function setJjwgMapsLng($jjwgMapsLng)
    {
        $this->jjwgMapsLng = $jjwgMapsLng;

        return $this;
    }

    /**
     * Get jjwgMapsLng
     *
     * @return float
     */
    public function getJjwgMapsLng()
    {
        return $this->jjwgMapsLng;
    }

    /**
     * Set markerImage
     *
     * @param string $markerImage
     *
     * @return JjwgMarkers
     */
    public function setMarkerImage($markerImage)
    {
        $this->markerImage = $markerImage;

        return $this;
    }

    /**
     * Get markerImage
     *
     * @return string
     */
    public function getMarkerImage()
    {
        return $this->markerImage;
    }
}

