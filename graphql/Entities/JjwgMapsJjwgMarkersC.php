<?php

namespace Entities;

/**
 * JjwgMapsJjwgMarkersC
 */
class JjwgMapsJjwgMarkersC
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
    private $jjwgMapsB229wgMapsIda;

    /**
     * @var string
     */
    private $jjwgMaps2e31markersIdb;


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
     * @return JjwgMapsJjwgMarkersC
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
     * @return JjwgMapsJjwgMarkersC
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
     * Set jjwgMapsB229wgMapsIda
     *
     * @param string $jjwgMapsB229wgMapsIda
     *
     * @return JjwgMapsJjwgMarkersC
     */
    public function setJjwgMapsB229wgMapsIda($jjwgMapsB229wgMapsIda)
    {
        $this->jjwgMapsB229wgMapsIda = $jjwgMapsB229wgMapsIda;

        return $this;
    }

    /**
     * Get jjwgMapsB229wgMapsIda
     *
     * @return string
     */
    public function getJjwgMapsB229wgMapsIda()
    {
        return $this->jjwgMapsB229wgMapsIda;
    }

    /**
     * Set jjwgMaps2e31markersIdb
     *
     * @param string $jjwgMaps2e31markersIdb
     *
     * @return JjwgMapsJjwgMarkersC
     */
    public function setJjwgMaps2e31markersIdb($jjwgMaps2e31markersIdb)
    {
        $this->jjwgMaps2e31markersIdb = $jjwgMaps2e31markersIdb;

        return $this;
    }

    /**
     * Get jjwgMaps2e31markersIdb
     *
     * @return string
     */
    public function getJjwgMaps2e31markersIdb()
    {
        return $this->jjwgMaps2e31markersIdb;
    }
}

