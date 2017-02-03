<?php

namespace Entities;

/**
 * RemindersInvitees
 */
class RemindersInvitees
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
    private $reminderId;

    /**
     * @var string
     */
    private $relatedInviteeModule;

    /**
     * @var string
     */
    private $relatedInviteeModuleId;


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
     * @return RemindersInvitees
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
     * @return RemindersInvitees
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
     * @return RemindersInvitees
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
     * @return RemindersInvitees
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
     * @return RemindersInvitees
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
     * @return RemindersInvitees
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
     * @return RemindersInvitees
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
     * @return RemindersInvitees
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
     * Set reminderId
     *
     * @param string $reminderId
     *
     * @return RemindersInvitees
     */
    public function setReminderId($reminderId)
    {
        $this->reminderId = $reminderId;

        return $this;
    }

    /**
     * Get reminderId
     *
     * @return string
     */
    public function getReminderId()
    {
        return $this->reminderId;
    }

    /**
     * Set relatedInviteeModule
     *
     * @param string $relatedInviteeModule
     *
     * @return RemindersInvitees
     */
    public function setRelatedInviteeModule($relatedInviteeModule)
    {
        $this->relatedInviteeModule = $relatedInviteeModule;

        return $this;
    }

    /**
     * Get relatedInviteeModule
     *
     * @return string
     */
    public function getRelatedInviteeModule()
    {
        return $this->relatedInviteeModule;
    }

    /**
     * Set relatedInviteeModuleId
     *
     * @param string $relatedInviteeModuleId
     *
     * @return RemindersInvitees
     */
    public function setRelatedInviteeModuleId($relatedInviteeModuleId)
    {
        $this->relatedInviteeModuleId = $relatedInviteeModuleId;

        return $this;
    }

    /**
     * Get relatedInviteeModuleId
     *
     * @return string
     */
    public function getRelatedInviteeModuleId()
    {
        return $this->relatedInviteeModuleId;
    }
}

