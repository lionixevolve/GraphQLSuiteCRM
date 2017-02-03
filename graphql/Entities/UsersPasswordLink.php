<?php

namespace Entities;

/**
 * UsersPasswordLink
 */
class UsersPasswordLink
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $username;

    /**
     * @var \DateTime
     */
    private $dateGenerated;

    /**
     * @var boolean
     */
    private $deleted;


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
     * Set username
     *
     * @param string $username
     *
     * @return UsersPasswordLink
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set dateGenerated
     *
     * @param \DateTime $dateGenerated
     *
     * @return UsersPasswordLink
     */
    public function setDateGenerated($dateGenerated)
    {
        $this->dateGenerated = $dateGenerated;

        return $this;
    }

    /**
     * Get dateGenerated
     *
     * @return \DateTime
     */
    public function getDateGenerated()
    {
        return $this->dateGenerated;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return UsersPasswordLink
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

