<?php

namespace Entities;

/**
 * AowProcessedAowActions
 */
class AowProcessedAowActions
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $aowProcessedId;

    /**
     * @var string
     */
    private $aowActionId;

    /**
     * @var string
     */
    private $status = 'Pending';

    /**
     * @var \DateTime
     */
    private $dateModified;

    /**
     * @var boolean
     */
    private $deleted = '0';


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
     * Set aowProcessedId
     *
     * @param string $aowProcessedId
     *
     * @return AowProcessedAowActions
     */
    public function setAowProcessedId($aowProcessedId)
    {
        $this->aowProcessedId = $aowProcessedId;

        return $this;
    }

    /**
     * Get aowProcessedId
     *
     * @return string
     */
    public function getAowProcessedId()
    {
        return $this->aowProcessedId;
    }

    /**
     * Set aowActionId
     *
     * @param string $aowActionId
     *
     * @return AowProcessedAowActions
     */
    public function setAowActionId($aowActionId)
    {
        $this->aowActionId = $aowActionId;

        return $this;
    }

    /**
     * Get aowActionId
     *
     * @return string
     */
    public function getAowActionId()
    {
        return $this->aowActionId;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return AowProcessedAowActions
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
     * Set dateModified
     *
     * @param \DateTime $dateModified
     *
     * @return AowProcessedAowActions
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
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return AowProcessedAowActions
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

