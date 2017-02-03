<?php

namespace Entities;

/**
 * AosQuotesProjectC
 */
class AosQuotesProjectC
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
    private $aosQuotes1112QuotesIda;

    /**
     * @var string
     */
    private $aosQuotes7207projectIdb;


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
     * @return AosQuotesProjectC
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
     * @return AosQuotesProjectC
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
     * Set aosQuotes1112QuotesIda
     *
     * @param string $aosQuotes1112QuotesIda
     *
     * @return AosQuotesProjectC
     */
    public function setAosQuotes1112QuotesIda($aosQuotes1112QuotesIda)
    {
        $this->aosQuotes1112QuotesIda = $aosQuotes1112QuotesIda;

        return $this;
    }

    /**
     * Get aosQuotes1112QuotesIda
     *
     * @return string
     */
    public function getAosQuotes1112QuotesIda()
    {
        return $this->aosQuotes1112QuotesIda;
    }

    /**
     * Set aosQuotes7207projectIdb
     *
     * @param string $aosQuotes7207projectIdb
     *
     * @return AosQuotesProjectC
     */
    public function setAosQuotes7207projectIdb($aosQuotes7207projectIdb)
    {
        $this->aosQuotes7207projectIdb = $aosQuotes7207projectIdb;

        return $this;
    }

    /**
     * Get aosQuotes7207projectIdb
     *
     * @return string
     */
    public function getAosQuotes7207projectIdb()
    {
        return $this->aosQuotes7207projectIdb;
    }
}

