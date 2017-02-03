<?php

namespace Entities;

/**
 * InboundEmailAutoreply
 */
class InboundEmailAutoreply
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var boolean
     */
    private $deleted = '0';

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
    private $autorepliedTo;

    /**
     * @var string
     */
    private $ieId;


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
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return InboundEmailAutoreply
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
     * @return InboundEmailAutoreply
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
     * @return InboundEmailAutoreply
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
     * Set autorepliedTo
     *
     * @param string $autorepliedTo
     *
     * @return InboundEmailAutoreply
     */
    public function setAutorepliedTo($autorepliedTo)
    {
        $this->autorepliedTo = $autorepliedTo;

        return $this;
    }

    /**
     * Get autorepliedTo
     *
     * @return string
     */
    public function getAutorepliedTo()
    {
        return $this->autorepliedTo;
    }

    /**
     * Set ieId
     *
     * @param string $ieId
     *
     * @return InboundEmailAutoreply
     */
    public function setIeId($ieId)
    {
        $this->ieId = $ieId;

        return $this;
    }

    /**
     * Get ieId
     *
     * @return string
     */
    public function getIeId()
    {
        return $this->ieId;
    }
}

