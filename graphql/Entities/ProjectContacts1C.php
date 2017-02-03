<?php

namespace Entities;

/**
 * ProjectContacts1C
 */
class ProjectContacts1C
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
    private $projectContacts1projectIda;

    /**
     * @var string
     */
    private $projectContacts1contactsIdb;


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
     * @return ProjectContacts1C
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
     * @return ProjectContacts1C
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
     * Set projectContacts1projectIda
     *
     * @param string $projectContacts1projectIda
     *
     * @return ProjectContacts1C
     */
    public function setProjectContacts1projectIda($projectContacts1projectIda)
    {
        $this->projectContacts1projectIda = $projectContacts1projectIda;

        return $this;
    }

    /**
     * Get projectContacts1projectIda
     *
     * @return string
     */
    public function getProjectContacts1projectIda()
    {
        return $this->projectContacts1projectIda;
    }

    /**
     * Set projectContacts1contactsIdb
     *
     * @param string $projectContacts1contactsIdb
     *
     * @return ProjectContacts1C
     */
    public function setProjectContacts1contactsIdb($projectContacts1contactsIdb)
    {
        $this->projectContacts1contactsIdb = $projectContacts1contactsIdb;

        return $this;
    }

    /**
     * Get projectContacts1contactsIdb
     *
     * @return string
     */
    public function getProjectContacts1contactsIdb()
    {
        return $this->projectContacts1contactsIdb;
    }
}

