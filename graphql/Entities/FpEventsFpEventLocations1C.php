<?php

namespace Entities;

/**
 * FpEventsFpEventLocations1C
 */
class FpEventsFpEventLocations1C
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
    private $fpEventsFpEventLocations1fpEventsIda;

    /**
     * @var string
     */
    private $fpEventsFpEventLocations1fpEventLocationsIdb;


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
     * @return FpEventsFpEventLocations1C
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
     * @return FpEventsFpEventLocations1C
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
     * Set fpEventsFpEventLocations1fpEventsIda
     *
     * @param string $fpEventsFpEventLocations1fpEventsIda
     *
     * @return FpEventsFpEventLocations1C
     */
    public function setFpEventsFpEventLocations1fpEventsIda($fpEventsFpEventLocations1fpEventsIda)
    {
        $this->fpEventsFpEventLocations1fpEventsIda = $fpEventsFpEventLocations1fpEventsIda;

        return $this;
    }

    /**
     * Get fpEventsFpEventLocations1fpEventsIda
     *
     * @return string
     */
    public function getFpEventsFpEventLocations1fpEventsIda()
    {
        return $this->fpEventsFpEventLocations1fpEventsIda;
    }

    /**
     * Set fpEventsFpEventLocations1fpEventLocationsIdb
     *
     * @param string $fpEventsFpEventLocations1fpEventLocationsIdb
     *
     * @return FpEventsFpEventLocations1C
     */
    public function setFpEventsFpEventLocations1fpEventLocationsIdb($fpEventsFpEventLocations1fpEventLocationsIdb)
    {
        $this->fpEventsFpEventLocations1fpEventLocationsIdb = $fpEventsFpEventLocations1fpEventLocationsIdb;

        return $this;
    }

    /**
     * Get fpEventsFpEventLocations1fpEventLocationsIdb
     *
     * @return string
     */
    public function getFpEventsFpEventLocations1fpEventLocationsIdb()
    {
        return $this->fpEventsFpEventLocations1fpEventLocationsIdb;
    }
}

