<?php

namespace Entities;

/**
 * FpEventsFpEventDelegates1C
 */
class FpEventsFpEventDelegates1C
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dateModified;

    /**
     * @var boolean
     */
    private $deleted = '0';

    /**
     * @var string
     */
    private $fpEventsFpEventDelegates1fpEventsIda;

    /**
     * @var string
     */
    private $fpEventsFpEventDelegates1fpEventDelegatesIdb;


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
     * Set dateModified
     *
     * @param \DateTime $dateModified
     *
     * @return FpEventsFpEventDelegates1C
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
     * @return FpEventsFpEventDelegates1C
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
     * Set fpEventsFpEventDelegates1fpEventsIda
     *
     * @param string $fpEventsFpEventDelegates1fpEventsIda
     *
     * @return FpEventsFpEventDelegates1C
     */
    public function setFpEventsFpEventDelegates1fpEventsIda($fpEventsFpEventDelegates1fpEventsIda)
    {
        $this->fpEventsFpEventDelegates1fpEventsIda = $fpEventsFpEventDelegates1fpEventsIda;

        return $this;
    }

    /**
     * Get fpEventsFpEventDelegates1fpEventsIda
     *
     * @return string
     */
    public function getFpEventsFpEventDelegates1fpEventsIda()
    {
        return $this->fpEventsFpEventDelegates1fpEventsIda;
    }

    /**
     * Set fpEventsFpEventDelegates1fpEventDelegatesIdb
     *
     * @param string $fpEventsFpEventDelegates1fpEventDelegatesIdb
     *
     * @return FpEventsFpEventDelegates1C
     */
    public function setFpEventsFpEventDelegates1fpEventDelegatesIdb($fpEventsFpEventDelegates1fpEventDelegatesIdb)
    {
        $this->fpEventsFpEventDelegates1fpEventDelegatesIdb = $fpEventsFpEventDelegates1fpEventDelegatesIdb;

        return $this;
    }

    /**
     * Get fpEventsFpEventDelegates1fpEventDelegatesIdb
     *
     * @return string
     */
    public function getFpEventsFpEventDelegates1fpEventDelegatesIdb()
    {
        return $this->fpEventsFpEventDelegates1fpEventDelegatesIdb;
    }
}

