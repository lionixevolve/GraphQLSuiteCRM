<?php

namespace Entities;

/**
 * FpEventLocations
 */
class FpEventLocations
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
    private $address;

    /**
     * @var string
     */
    private $addressCity;

    /**
     * @var string
     */
    private $addressCountry;

    /**
     * @var string
     */
    private $addressPostalcode;

    /**
     * @var string
     */
    private $addressState;

    /**
     * @var string
     */
    private $capacity;


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
     * @return FpEventLocations
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
     * @return FpEventLocations
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
     * @return FpEventLocations
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
     * @return FpEventLocations
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
     * @return FpEventLocations
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
     * @return FpEventLocations
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
     * @return FpEventLocations
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
     * @return FpEventLocations
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
     * Set address
     *
     * @param string $address
     *
     * @return FpEventLocations
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set addressCity
     *
     * @param string $addressCity
     *
     * @return FpEventLocations
     */
    public function setAddressCity($addressCity)
    {
        $this->addressCity = $addressCity;

        return $this;
    }

    /**
     * Get addressCity
     *
     * @return string
     */
    public function getAddressCity()
    {
        return $this->addressCity;
    }

    /**
     * Set addressCountry
     *
     * @param string $addressCountry
     *
     * @return FpEventLocations
     */
    public function setAddressCountry($addressCountry)
    {
        $this->addressCountry = $addressCountry;

        return $this;
    }

    /**
     * Get addressCountry
     *
     * @return string
     */
    public function getAddressCountry()
    {
        return $this->addressCountry;
    }

    /**
     * Set addressPostalcode
     *
     * @param string $addressPostalcode
     *
     * @return FpEventLocations
     */
    public function setAddressPostalcode($addressPostalcode)
    {
        $this->addressPostalcode = $addressPostalcode;

        return $this;
    }

    /**
     * Get addressPostalcode
     *
     * @return string
     */
    public function getAddressPostalcode()
    {
        return $this->addressPostalcode;
    }

    /**
     * Set addressState
     *
     * @param string $addressState
     *
     * @return FpEventLocations
     */
    public function setAddressState($addressState)
    {
        $this->addressState = $addressState;

        return $this;
    }

    /**
     * Get addressState
     *
     * @return string
     */
    public function getAddressState()
    {
        return $this->addressState;
    }

    /**
     * Set capacity
     *
     * @param string $capacity
     *
     * @return FpEventLocations
     */
    public function setCapacity($capacity)
    {
        $this->capacity = $capacity;

        return $this;
    }

    /**
     * Get capacity
     *
     * @return string
     */
    public function getCapacity()
    {
        return $this->capacity;
    }
}

