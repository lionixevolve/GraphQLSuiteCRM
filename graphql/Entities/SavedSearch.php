<?php

namespace Entities;

/**
 * SavedSearch
 */
class SavedSearch
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
     * @var string
     */
    private $searchModule;

    /**
     * @var boolean
     */
    private $deleted;

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
    private $assignedUserId;

    /**
     * @var string
     */
    private $contents;

    /**
     * @var string
     */
    private $description;


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
     * @return SavedSearch
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
     * Set searchModule
     *
     * @param string $searchModule
     *
     * @return SavedSearch
     */
    public function setSearchModule($searchModule)
    {
        $this->searchModule = $searchModule;

        return $this;
    }

    /**
     * Get searchModule
     *
     * @return string
     */
    public function getSearchModule()
    {
        return $this->searchModule;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return SavedSearch
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
     * Set dateEntered
     *
     * @param \DateTime $dateEntered
     *
     * @return SavedSearch
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
     * @return SavedSearch
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
     * Set assignedUserId
     *
     * @param string $assignedUserId
     *
     * @return SavedSearch
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
     * Set contents
     *
     * @param string $contents
     *
     * @return SavedSearch
     */
    public function setContents($contents)
    {
        $this->contents = $contents;

        return $this;
    }

    /**
     * Get contents
     *
     * @return string
     */
    public function getContents()
    {
        return $this->contents;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return SavedSearch
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
}

