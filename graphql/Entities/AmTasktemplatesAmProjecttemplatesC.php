<?php

namespace Entities;

/**
 * AmTasktemplatesAmProjecttemplatesC
 */
class AmTasktemplatesAmProjecttemplatesC
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
    private $amTasktemplatesAmProjecttemplatesamProjecttemplatesIda;

    /**
     * @var string
     */
    private $amTasktemplatesAmProjecttemplatesamTasktemplatesIdb;


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
     * @return AmTasktemplatesAmProjecttemplatesC
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
     * @return AmTasktemplatesAmProjecttemplatesC
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
     * Set amTasktemplatesAmProjecttemplatesamProjecttemplatesIda
     *
     * @param string $amTasktemplatesAmProjecttemplatesamProjecttemplatesIda
     *
     * @return AmTasktemplatesAmProjecttemplatesC
     */
    public function setAmTasktemplatesAmProjecttemplatesamProjecttemplatesIda($amTasktemplatesAmProjecttemplatesamProjecttemplatesIda)
    {
        $this->amTasktemplatesAmProjecttemplatesamProjecttemplatesIda = $amTasktemplatesAmProjecttemplatesamProjecttemplatesIda;

        return $this;
    }

    /**
     * Get amTasktemplatesAmProjecttemplatesamProjecttemplatesIda
     *
     * @return string
     */
    public function getAmTasktemplatesAmProjecttemplatesamProjecttemplatesIda()
    {
        return $this->amTasktemplatesAmProjecttemplatesamProjecttemplatesIda;
    }

    /**
     * Set amTasktemplatesAmProjecttemplatesamTasktemplatesIdb
     *
     * @param string $amTasktemplatesAmProjecttemplatesamTasktemplatesIdb
     *
     * @return AmTasktemplatesAmProjecttemplatesC
     */
    public function setAmTasktemplatesAmProjecttemplatesamTasktemplatesIdb($amTasktemplatesAmProjecttemplatesamTasktemplatesIdb)
    {
        $this->amTasktemplatesAmProjecttemplatesamTasktemplatesIdb = $amTasktemplatesAmProjecttemplatesamTasktemplatesIdb;

        return $this;
    }

    /**
     * Get amTasktemplatesAmProjecttemplatesamTasktemplatesIdb
     *
     * @return string
     */
    public function getAmTasktemplatesAmProjecttemplatesamTasktemplatesIdb()
    {
        return $this->amTasktemplatesAmProjecttemplatesamTasktemplatesIdb;
    }
}

