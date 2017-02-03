<?php

namespace Entities;

/**
 * UpgradeHistory
 */
class UpgradeHistory
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $filename;

    /**
     * @var string
     */
    private $md5sum;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $version;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $idName;

    /**
     * @var string
     */
    private $manifest;

    /**
     * @var \DateTime
     */
    private $dateEntered;

    /**
     * @var boolean
     */
    private $enabled = '1';


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
     * Set filename
     *
     * @param string $filename
     *
     * @return UpgradeHistory
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set md5sum
     *
     * @param string $md5sum
     *
     * @return UpgradeHistory
     */
    public function setMd5sum($md5sum)
    {
        $this->md5sum = $md5sum;

        return $this;
    }

    /**
     * Get md5sum
     *
     * @return string
     */
    public function getMd5sum()
    {
        return $this->md5sum;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return UpgradeHistory
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return UpgradeHistory
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
     * Set version
     *
     * @param string $version
     *
     * @return UpgradeHistory
     */
    public function setVersion($version)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * Get version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return UpgradeHistory
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
     * Set description
     *
     * @param string $description
     *
     * @return UpgradeHistory
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
     * Set idName
     *
     * @param string $idName
     *
     * @return UpgradeHistory
     */
    public function setIdName($idName)
    {
        $this->idName = $idName;

        return $this;
    }

    /**
     * Get idName
     *
     * @return string
     */
    public function getIdName()
    {
        return $this->idName;
    }

    /**
     * Set manifest
     *
     * @param string $manifest
     *
     * @return UpgradeHistory
     */
    public function setManifest($manifest)
    {
        $this->manifest = $manifest;

        return $this;
    }

    /**
     * Get manifest
     *
     * @return string
     */
    public function getManifest()
    {
        return $this->manifest;
    }

    /**
     * Set dateEntered
     *
     * @param \DateTime $dateEntered
     *
     * @return UpgradeHistory
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
     * Set enabled
     *
     * @param boolean $enabled
     *
     * @return UpgradeHistory
     */
    public function setEnabled($enabled)
    {
        $this->enabled = $enabled;

        return $this;
    }

    /**
     * Get enabled
     *
     * @return boolean
     */
    public function getEnabled()
    {
        return $this->enabled;
    }
}

