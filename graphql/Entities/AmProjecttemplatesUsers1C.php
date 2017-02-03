<?php

namespace Entities;

/**
 * AmProjecttemplatesUsers1C
 */
class AmProjecttemplatesUsers1C
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
    private $amProjecttemplatesIda;

    /**
     * @var string
     */
    private $usersIdb;


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
     * @return AmProjecttemplatesUsers1C
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
     * @return AmProjecttemplatesUsers1C
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
     * Set amProjecttemplatesIda
     *
     * @param string $amProjecttemplatesIda
     *
     * @return AmProjecttemplatesUsers1C
     */
    public function setAmProjecttemplatesIda($amProjecttemplatesIda)
    {
        $this->amProjecttemplatesIda = $amProjecttemplatesIda;

        return $this;
    }

    /**
     * Get amProjecttemplatesIda
     *
     * @return string
     */
    public function getAmProjecttemplatesIda()
    {
        return $this->amProjecttemplatesIda;
    }

    /**
     * Set usersIdb
     *
     * @param string $usersIdb
     *
     * @return AmProjecttemplatesUsers1C
     */
    public function setUsersIdb($usersIdb)
    {
        $this->usersIdb = $usersIdb;

        return $this;
    }

    /**
     * Get usersIdb
     *
     * @return string
     */
    public function getUsersIdb()
    {
        return $this->usersIdb;
    }
}

