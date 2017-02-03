<?php

namespace Entities;

/**
 * AccountsCases
 */
class AccountsCases
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $accountId;

    /**
     * @var string
     */
    private $caseId;

    /**
     * @var \DateTime
     */
    private $dateModified;

    /**
     * @var boolean
     */
    private $deleted = '0';


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
     * Set accountId
     *
     * @param string $accountId
     *
     * @return AccountsCases
     */
    public function setAccountId($accountId)
    {
        $this->accountId = $accountId;

        return $this;
    }

    /**
     * Get accountId
     *
     * @return string
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * Set caseId
     *
     * @param string $caseId
     *
     * @return AccountsCases
     */
    public function setCaseId($caseId)
    {
        $this->caseId = $caseId;

        return $this;
    }

    /**
     * Get caseId
     *
     * @return string
     */
    public function getCaseId()
    {
        return $this->caseId;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     *
     * @return AccountsCases
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
     * @return AccountsCases
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

