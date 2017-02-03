<?php

namespace Entities;

/**
 * AowWorkflow
 */
class AowWorkflow
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
    private $flowModule;

    /**
     * @var string
     */
    private $flowRunOn = '0';

    /**
     * @var string
     */
    private $status = 'Active';

    /**
     * @var string
     */
    private $runWhen = 'Always';

    /**
     * @var boolean
     */
    private $multipleRuns = '0';


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
     * @return AowWorkflow
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
     * @return AowWorkflow
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
     * @return AowWorkflow
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
     * @return AowWorkflow
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
     * @return AowWorkflow
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
     * @return AowWorkflow
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
     * @return AowWorkflow
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
     * @return AowWorkflow
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
     * Set flowModule
     *
     * @param string $flowModule
     *
     * @return AowWorkflow
     */
    public function setFlowModule($flowModule)
    {
        $this->flowModule = $flowModule;

        return $this;
    }

    /**
     * Get flowModule
     *
     * @return string
     */
    public function getFlowModule()
    {
        return $this->flowModule;
    }

    /**
     * Set flowRunOn
     *
     * @param string $flowRunOn
     *
     * @return AowWorkflow
     */
    public function setFlowRunOn($flowRunOn)
    {
        $this->flowRunOn = $flowRunOn;

        return $this;
    }

    /**
     * Get flowRunOn
     *
     * @return string
     */
    public function getFlowRunOn()
    {
        return $this->flowRunOn;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return AowWorkflow
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
     * Set runWhen
     *
     * @param string $runWhen
     *
     * @return AowWorkflow
     */
    public function setRunWhen($runWhen)
    {
        $this->runWhen = $runWhen;

        return $this;
    }

    /**
     * Get runWhen
     *
     * @return string
     */
    public function getRunWhen()
    {
        return $this->runWhen;
    }

    /**
     * Set multipleRuns
     *
     * @param boolean $multipleRuns
     *
     * @return AowWorkflow
     */
    public function setMultipleRuns($multipleRuns)
    {
        $this->multipleRuns = $multipleRuns;

        return $this;
    }

    /**
     * Get multipleRuns
     *
     * @return boolean
     */
    public function getMultipleRuns()
    {
        return $this->multipleRuns;
    }
}

