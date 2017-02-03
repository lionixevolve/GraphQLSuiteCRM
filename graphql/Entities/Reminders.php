<?php

namespace Entities;

/**
 * Reminders
 */
class Reminders
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
     * @var boolean
     */
    private $popup;

    /**
     * @var boolean
     */
    private $email;

    /**
     * @var boolean
     */
    private $emailSent;

    /**
     * @var string
     */
    private $timerPopup;

    /**
     * @var string
     */
    private $timerEmail;

    /**
     * @var string
     */
    private $relatedEventModule;

    /**
     * @var string
     */
    private $relatedEventModuleId;


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
     * @return Reminders
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
     * @return Reminders
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
     * @return Reminders
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
     * @return Reminders
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
     * @return Reminders
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
     * @return Reminders
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
     * @return Reminders
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
     * @return Reminders
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
     * Set popup
     *
     * @param boolean $popup
     *
     * @return Reminders
     */
    public function setPopup($popup)
    {
        $this->popup = $popup;

        return $this;
    }

    /**
     * Get popup
     *
     * @return boolean
     */
    public function getPopup()
    {
        return $this->popup;
    }

    /**
     * Set email
     *
     * @param boolean $email
     *
     * @return Reminders
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return boolean
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set emailSent
     *
     * @param boolean $emailSent
     *
     * @return Reminders
     */
    public function setEmailSent($emailSent)
    {
        $this->emailSent = $emailSent;

        return $this;
    }

    /**
     * Get emailSent
     *
     * @return boolean
     */
    public function getEmailSent()
    {
        return $this->emailSent;
    }

    /**
     * Set timerPopup
     *
     * @param string $timerPopup
     *
     * @return Reminders
     */
    public function setTimerPopup($timerPopup)
    {
        $this->timerPopup = $timerPopup;

        return $this;
    }

    /**
     * Get timerPopup
     *
     * @return string
     */
    public function getTimerPopup()
    {
        return $this->timerPopup;
    }

    /**
     * Set timerEmail
     *
     * @param string $timerEmail
     *
     * @return Reminders
     */
    public function setTimerEmail($timerEmail)
    {
        $this->timerEmail = $timerEmail;

        return $this;
    }

    /**
     * Get timerEmail
     *
     * @return string
     */
    public function getTimerEmail()
    {
        return $this->timerEmail;
    }

    /**
     * Set relatedEventModule
     *
     * @param string $relatedEventModule
     *
     * @return Reminders
     */
    public function setRelatedEventModule($relatedEventModule)
    {
        $this->relatedEventModule = $relatedEventModule;

        return $this;
    }

    /**
     * Get relatedEventModule
     *
     * @return string
     */
    public function getRelatedEventModule()
    {
        return $this->relatedEventModule;
    }

    /**
     * Set relatedEventModuleId
     *
     * @param string $relatedEventModuleId
     *
     * @return Reminders
     */
    public function setRelatedEventModuleId($relatedEventModuleId)
    {
        $this->relatedEventModuleId = $relatedEventModuleId;

        return $this;
    }

    /**
     * Get relatedEventModuleId
     *
     * @return string
     */
    public function getRelatedEventModuleId()
    {
        return $this->relatedEventModuleId;
    }
}

