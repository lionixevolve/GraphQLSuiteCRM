<?php

namespace Entities;

/**
 * FpEventLocationsFpEvents1C
 */
class FpEventLocationsFpEvents1C
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
    private $fpEventLocationsFpEvents1fpEventLocationsIda;

    /**
     * @var string
     */
    private $fpEventLocationsFpEvents1fpEventsIdb;


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
     * @return FpEventLocationsFpEvents1C
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
     * @return FpEventLocationsFpEvents1C
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
     * Set fpEventLocationsFpEvents1fpEventLocationsIda
     *
     * @param string $fpEventLocationsFpEvents1fpEventLocationsIda
     *
     * @return FpEventLocationsFpEvents1C
     */
    public function setFpEventLocationsFpEvents1fpEventLocationsIda($fpEventLocationsFpEvents1fpEventLocationsIda)
    {
        $this->fpEventLocationsFpEvents1fpEventLocationsIda = $fpEventLocationsFpEvents1fpEventLocationsIda;

        return $this;
    }

    /**
     * Get fpEventLocationsFpEvents1fpEventLocationsIda
     *
     * @return string
     */
    public function getFpEventLocationsFpEvents1fpEventLocationsIda()
    {
        return $this->fpEventLocationsFpEvents1fpEventLocationsIda;
    }

    /**
     * Set fpEventLocationsFpEvents1fpEventsIdb
     *
     * @param string $fpEventLocationsFpEvents1fpEventsIdb
     *
     * @return FpEventLocationsFpEvents1C
     */
    public function setFpEventLocationsFpEvents1fpEventsIdb($fpEventLocationsFpEvents1fpEventsIdb)
    {
        $this->fpEventLocationsFpEvents1fpEventsIdb = $fpEventLocationsFpEvents1fpEventsIdb;

        return $this;
    }

    /**
     * Get fpEventLocationsFpEvents1fpEventsIdb
     *
     * @return string
     */
    public function getFpEventLocationsFpEvents1fpEventsIdb()
    {
        return $this->fpEventLocationsFpEvents1fpEventsIdb;
    }
}

