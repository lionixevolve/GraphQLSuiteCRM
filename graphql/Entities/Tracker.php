<?php

namespace Entities;

/**
 * Tracker
 */
class Tracker
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $monitorId;

    /**
     * @var string
     */
    private $userId;

    /**
     * @var string
     */
    private $moduleName;

    /**
     * @var string
     */
    private $itemId;

    /**
     * @var string
     */
    private $itemSummary;

    /**
     * @var \DateTime
     */
    private $dateModified;

    /**
     * @var string
     */
    private $action;

    /**
     * @var string
     */
    private $sessionId;

    /**
     * @var boolean
     */
    private $visible = '0';

    /**
     * @var boolean
     */
    private $deleted = '0';


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set monitorId
     *
     * @param string $monitorId
     *
     * @return Tracker
     */
    public function setMonitorId($monitorId)
    {
        $this->monitorId = $monitorId;

        return $this;
    }

    /**
     * Get monitorId
     *
     * @return string
     */
    public function getMonitorId()
    {
        return $this->monitorId;
    }

    /**
     * Set userId
     *
     * @param string $userId
     *
     * @return Tracker
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set moduleName
     *
     * @param string $moduleName
     *
     * @return Tracker
     */
    public function setModuleName($moduleName)
    {
        $this->moduleName = $moduleName;

        return $this;
    }

    /**
     * Get moduleName
     *
     * @return string
     */
    public function getModuleName()
    {
        return $this->moduleName;
    }

    /**
     * Set itemId
     *
     * @param string $itemId
     *
     * @return Tracker
     */
    public function setItemId($itemId)
    {
        $this->itemId = $itemId;

        return $this;
    }

    /**
     * Get itemId
     *
     * @return string
     */
    public function getItemId()
    {
        return $this->itemId;
    }

    /**
     * Set itemSummary
     *
     * @param string $itemSummary
     *
     * @return Tracker
     */
    public function setItemSummary($itemSummary)
    {
        $this->itemSummary = $itemSummary;

        return $this;
    }

    /**
     * Get itemSummary
     *
     * @return string
     */
    public function getItemSummary()
    {
        return $this->itemSummary;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     *
     * @return Tracker
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
     * Set action
     *
     * @param string $action
     *
     * @return Tracker
     */
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }

    /**
     * Get action
     *
     * @return string
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set sessionId
     *
     * @param string $sessionId
     *
     * @return Tracker
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;

        return $this;
    }

    /**
     * Get sessionId
     *
     * @return string
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * Set visible
     *
     * @param boolean $visible
     *
     * @return Tracker
     */
    public function setVisible($visible)
    {
        $this->visible = $visible;

        return $this;
    }

    /**
     * Get visible
     *
     * @return boolean
     */
    public function getVisible()
    {
        return $this->visible;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return Tracker
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
}

