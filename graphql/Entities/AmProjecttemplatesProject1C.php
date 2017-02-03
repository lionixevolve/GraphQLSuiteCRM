<?php

namespace Entities;

/**
 * AmProjecttemplatesProject1C
 */
class AmProjecttemplatesProject1C
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
    private $amProjecttemplatesProject1amProjecttemplatesIda;

    /**
     * @var string
     */
    private $amProjecttemplatesProject1projectIdb;


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
     * @return AmProjecttemplatesProject1C
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
     * @return AmProjecttemplatesProject1C
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
     * Set amProjecttemplatesProject1amProjecttemplatesIda
     *
     * @param string $amProjecttemplatesProject1amProjecttemplatesIda
     *
     * @return AmProjecttemplatesProject1C
     */
    public function setAmProjecttemplatesProject1amProjecttemplatesIda($amProjecttemplatesProject1amProjecttemplatesIda)
    {
        $this->amProjecttemplatesProject1amProjecttemplatesIda = $amProjecttemplatesProject1amProjecttemplatesIda;

        return $this;
    }

    /**
     * Get amProjecttemplatesProject1amProjecttemplatesIda
     *
     * @return string
     */
    public function getAmProjecttemplatesProject1amProjecttemplatesIda()
    {
        return $this->amProjecttemplatesProject1amProjecttemplatesIda;
    }

    /**
     * Set amProjecttemplatesProject1projectIdb
     *
     * @param string $amProjecttemplatesProject1projectIdb
     *
     * @return AmProjecttemplatesProject1C
     */
    public function setAmProjecttemplatesProject1projectIdb($amProjecttemplatesProject1projectIdb)
    {
        $this->amProjecttemplatesProject1projectIdb = $amProjecttemplatesProject1projectIdb;

        return $this;
    }

    /**
     * Get amProjecttemplatesProject1projectIdb
     *
     * @return string
     */
    public function getAmProjecttemplatesProject1projectIdb()
    {
        return $this->amProjecttemplatesProject1projectIdb;
    }
}

