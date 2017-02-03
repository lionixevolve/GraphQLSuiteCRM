<?php

namespace Entities;

/**
 * OpportunitiesAosInvoices1C
 */
class OpportunitiesAosInvoices1C
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
    private $opportunitiesAosInvoices1opportunitiesIda;

    /**
     * @var string
     */
    private $opportunitiesAosInvoices1aosInvoicesIdb;


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
     * @return OpportunitiesAosInvoices1C
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
     * @return OpportunitiesAosInvoices1C
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
     * Set opportunitiesAosInvoices1opportunitiesIda
     *
     * @param string $opportunitiesAosInvoices1opportunitiesIda
     *
     * @return OpportunitiesAosInvoices1C
     */
    public function setOpportunitiesAosInvoices1opportunitiesIda($opportunitiesAosInvoices1opportunitiesIda)
    {
        $this->opportunitiesAosInvoices1opportunitiesIda = $opportunitiesAosInvoices1opportunitiesIda;

        return $this;
    }

    /**
     * Get opportunitiesAosInvoices1opportunitiesIda
     *
     * @return string
     */
    public function getOpportunitiesAosInvoices1opportunitiesIda()
    {
        return $this->opportunitiesAosInvoices1opportunitiesIda;
    }

    /**
     * Set opportunitiesAosInvoices1aosInvoicesIdb
     *
     * @param string $opportunitiesAosInvoices1aosInvoicesIdb
     *
     * @return OpportunitiesAosInvoices1C
     */
    public function setOpportunitiesAosInvoices1aosInvoicesIdb($opportunitiesAosInvoices1aosInvoicesIdb)
    {
        $this->opportunitiesAosInvoices1aosInvoicesIdb = $opportunitiesAosInvoices1aosInvoicesIdb;

        return $this;
    }

    /**
     * Get opportunitiesAosInvoices1aosInvoicesIdb
     *
     * @return string
     */
    public function getOpportunitiesAosInvoices1aosInvoicesIdb()
    {
        return $this->opportunitiesAosInvoices1aosInvoicesIdb;
    }
}

