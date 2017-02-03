<?php

namespace Entities;

/**
 * ImportMaps
 */
class ImportMaps
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
    private $source;

    /**
     * @var string
     */
    private $enclosure = ' ';

    /**
     * @var string
     */
    private $delimiter = ',';

    /**
     * @var string
     */
    private $module;

    /**
     * @var string
     */
    private $content;

    /**
     * @var string
     */
    private $defaultValues;

    /**
     * @var boolean
     */
    private $hasHeader = '1';

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
    private $isPublished = 'no';


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
     * @return ImportMaps
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
     * Set source
     *
     * @param string $source
     *
     * @return ImportMaps
     */
    public function setSource($source)
    {
        $this->source = $source;

        return $this;
    }

    /**
     * Get source
     *
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Set enclosure
     *
     * @param string $enclosure
     *
     * @return ImportMaps
     */
    public function setEnclosure($enclosure)
    {
        $this->enclosure = $enclosure;

        return $this;
    }

    /**
     * Get enclosure
     *
     * @return string
     */
    public function getEnclosure()
    {
        return $this->enclosure;
    }

    /**
     * Set delimiter
     *
     * @param string $delimiter
     *
     * @return ImportMaps
     */
    public function setDelimiter($delimiter)
    {
        $this->delimiter = $delimiter;

        return $this;
    }

    /**
     * Get delimiter
     *
     * @return string
     */
    public function getDelimiter()
    {
        return $this->delimiter;
    }

    /**
     * Set module
     *
     * @param string $module
     *
     * @return ImportMaps
     */
    public function setModule($module)
    {
        $this->module = $module;

        return $this;
    }

    /**
     * Get module
     *
     * @return string
     */
    public function getModule()
    {
        return $this->module;
    }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return ImportMaps
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
     * Set defaultValues
     *
     * @param string $defaultValues
     *
     * @return ImportMaps
     */
    public function setDefaultValues($defaultValues)
    {
        $this->defaultValues = $defaultValues;

        return $this;
    }

    /**
     * Get defaultValues
     *
     * @return string
     */
    public function getDefaultValues()
    {
        return $this->defaultValues;
    }

    /**
     * Set hasHeader
     *
     * @param boolean $hasHeader
     *
     * @return ImportMaps
     */
    public function setHasHeader($hasHeader)
    {
        $this->hasHeader = $hasHeader;

        return $this;
    }

    /**
     * Get hasHeader
     *
     * @return boolean
     */
    public function getHasHeader()
    {
        return $this->hasHeader;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return ImportMaps
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
     * @return ImportMaps
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
     * @return ImportMaps
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
     * @return ImportMaps
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
     * Set isPublished
     *
     * @param string $isPublished
     *
     * @return ImportMaps
     */
    public function setIsPublished($isPublished)
    {
        $this->isPublished = $isPublished;

        return $this;
    }

    /**
     * Get isPublished
     *
     * @return string
     */
    public function getIsPublished()
    {
        return $this->isPublished;
    }
}

