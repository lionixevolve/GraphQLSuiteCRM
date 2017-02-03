<?php

namespace Entities;

/**
 * ProjectUsers1C
 */
class ProjectUsers1C
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
    private $projectUsers1projectIda;

    /**
     * @var string
     */
    private $projectUsers1usersIdb;


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
     * @return ProjectUsers1C
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
     * @return ProjectUsers1C
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
     * Set projectUsers1projectIda
     *
     * @param string $projectUsers1projectIda
     *
     * @return ProjectUsers1C
     */
    public function setProjectUsers1projectIda($projectUsers1projectIda)
    {
        $this->projectUsers1projectIda = $projectUsers1projectIda;

        return $this;
    }

    /**
     * Get projectUsers1projectIda
     *
     * @return string
     */
    public function getProjectUsers1projectIda()
    {
        return $this->projectUsers1projectIda;
    }

    /**
     * Set projectUsers1usersIdb
     *
     * @param string $projectUsers1usersIdb
     *
     * @return ProjectUsers1C
     */
    public function setProjectUsers1usersIdb($projectUsers1usersIdb)
    {
        $this->projectUsers1usersIdb = $projectUsers1usersIdb;

        return $this;
    }

    /**
     * Get projectUsers1usersIdb
     *
     * @return string
     */
    public function getProjectUsers1usersIdb()
    {
        return $this->projectUsers1usersIdb;
    }
}

