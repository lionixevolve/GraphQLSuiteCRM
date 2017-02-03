<?php

namespace Entities;

/**
 * DocumentsOpportunities
 */
class DocumentsOpportunities
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
    private $documentId;

    /**
     * @var string
     */
    private $opportunityId;


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
     * @return DocumentsOpportunities
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
     * @return DocumentsOpportunities
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
     * Set documentId
     *
     * @param string $documentId
     *
     * @return DocumentsOpportunities
     */
    public function setDocumentId($documentId)
    {
        $this->documentId = $documentId;

        return $this;
    }

    /**
     * Get documentId
     *
     * @return string
     */
    public function getDocumentId()
    {
        return $this->documentId;
    }

    /**
     * Set opportunityId
     *
     * @param string $opportunityId
     *
     * @return DocumentsOpportunities
     */
    public function setOpportunityId($opportunityId)
    {
        $this->opportunityId = $opportunityId;

        return $this;
    }

    /**
     * Get opportunityId
     *
     * @return string
     */
    public function getOpportunityId()
    {
        return $this->opportunityId;
    }
}

