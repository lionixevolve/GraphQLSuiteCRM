<?php

namespace Entities;

/**
 * AosQuotesAosInvoicesC
 */
class AosQuotesAosInvoicesC
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
    private $aosQuotes77d9QuotesIda;

    /**
     * @var string
     */
    private $aosQuotes6b83nvoicesIdb;


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
     * @return AosQuotesAosInvoicesC
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
     * @return AosQuotesAosInvoicesC
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
     * Set aosQuotes77d9QuotesIda
     *
     * @param string $aosQuotes77d9QuotesIda
     *
     * @return AosQuotesAosInvoicesC
     */
    public function setAosQuotes77d9QuotesIda($aosQuotes77d9QuotesIda)
    {
        $this->aosQuotes77d9QuotesIda = $aosQuotes77d9QuotesIda;

        return $this;
    }

    /**
     * Get aosQuotes77d9QuotesIda
     *
     * @return string
     */
    public function getAosQuotes77d9QuotesIda()
    {
        return $this->aosQuotes77d9QuotesIda;
    }

    /**
     * Set aosQuotes6b83nvoicesIdb
     *
     * @param string $aosQuotes6b83nvoicesIdb
     *
     * @return AosQuotesAosInvoicesC
     */
    public function setAosQuotes6b83nvoicesIdb($aosQuotes6b83nvoicesIdb)
    {
        $this->aosQuotes6b83nvoicesIdb = $aosQuotes6b83nvoicesIdb;

        return $this;
    }

    /**
     * Get aosQuotes6b83nvoicesIdb
     *
     * @return string
     */
    public function getAosQuotes6b83nvoicesIdb()
    {
        return $this->aosQuotes6b83nvoicesIdb;
    }
}

