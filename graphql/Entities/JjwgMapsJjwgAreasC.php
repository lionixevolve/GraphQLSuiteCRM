<?php

namespace Entities;

/**
 * JjwgMapsJjwgAreasC
 */
class JjwgMapsJjwgAreasC
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
    private $jjwgMaps5304wgMapsIda;

    /**
     * @var string
     */
    private $jjwgMaps41f2gAreasIdb;


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
     * @return JjwgMapsJjwgAreasC
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
     * @return JjwgMapsJjwgAreasC
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
     * Set jjwgMaps5304wgMapsIda
     *
     * @param string $jjwgMaps5304wgMapsIda
     *
     * @return JjwgMapsJjwgAreasC
     */
    public function setJjwgMaps5304wgMapsIda($jjwgMaps5304wgMapsIda)
    {
        $this->jjwgMaps5304wgMapsIda = $jjwgMaps5304wgMapsIda;

        return $this;
    }

    /**
     * Get jjwgMaps5304wgMapsIda
     *
     * @return string
     */
    public function getJjwgMaps5304wgMapsIda()
    {
        return $this->jjwgMaps5304wgMapsIda;
    }

    /**
     * Set jjwgMaps41f2gAreasIdb
     *
     * @param string $jjwgMaps41f2gAreasIdb
     *
     * @return JjwgMapsJjwgAreasC
     */
    public function setJjwgMaps41f2gAreasIdb($jjwgMaps41f2gAreasIdb)
    {
        $this->jjwgMaps41f2gAreasIdb = $jjwgMaps41f2gAreasIdb;

        return $this;
    }

    /**
     * Get jjwgMaps41f2gAreasIdb
     *
     * @return string
     */
    public function getJjwgMaps41f2gAreasIdb()
    {
        return $this->jjwgMaps41f2gAreasIdb;
    }
}

