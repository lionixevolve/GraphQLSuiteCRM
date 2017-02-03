<?php

namespace Entities;

/**
 * AosQuotesOsContractsC
 */
class AosQuotesOsContractsC
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
    private $aosQuotese81eQuotesIda;

    /**
     * @var string
     */
    private $aosQuotes4dc0ntractsIdb;


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
     * @return AosQuotesOsContractsC
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
     * @return AosQuotesOsContractsC
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
     * Set aosQuotese81eQuotesIda
     *
     * @param string $aosQuotese81eQuotesIda
     *
     * @return AosQuotesOsContractsC
     */
    public function setAosQuotese81eQuotesIda($aosQuotese81eQuotesIda)
    {
        $this->aosQuotese81eQuotesIda = $aosQuotese81eQuotesIda;

        return $this;
    }

    /**
     * Get aosQuotese81eQuotesIda
     *
     * @return string
     */
    public function getAosQuotese81eQuotesIda()
    {
        return $this->aosQuotese81eQuotesIda;
    }

    /**
     * Set aosQuotes4dc0ntractsIdb
     *
     * @param string $aosQuotes4dc0ntractsIdb
     *
     * @return AosQuotesOsContractsC
     */
    public function setAosQuotes4dc0ntractsIdb($aosQuotes4dc0ntractsIdb)
    {
        $this->aosQuotes4dc0ntractsIdb = $aosQuotes4dc0ntractsIdb;

        return $this;
    }

    /**
     * Get aosQuotes4dc0ntractsIdb
     *
     * @return string
     */
    public function getAosQuotes4dc0ntractsIdb()
    {
        return $this->aosQuotes4dc0ntractsIdb;
    }
}

