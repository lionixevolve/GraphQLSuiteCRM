<?php

namespace Entities;

/**
 * AosContractsDocuments
 */
class AosContractsDocuments
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
    private $aosContractsId;

    /**
     * @var string
     */
    private $documentsId;

    /**
     * @var string
     */
    private $documentRevisionId;


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
     * @return AosContractsDocuments
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
     * @return AosContractsDocuments
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
     * Set aosContractsId
     *
     * @param string $aosContractsId
     *
     * @return AosContractsDocuments
     */
    public function setAosContractsId($aosContractsId)
    {
        $this->aosContractsId = $aosContractsId;

        return $this;
    }

    /**
     * Get aosContractsId
     *
     * @return string
     */
    public function getAosContractsId()
    {
        return $this->aosContractsId;
    }

    /**
     * Set documentsId
     *
     * @param string $documentsId
     *
     * @return AosContractsDocuments
     */
    public function setDocumentsId($documentsId)
    {
        $this->documentsId = $documentsId;

        return $this;
    }

    /**
     * Get documentsId
     *
     * @return string
     */
    public function getDocumentsId()
    {
        return $this->documentsId;
    }

    /**
     * Set documentRevisionId
     *
     * @param string $documentRevisionId
     *
     * @return AosContractsDocuments
     */
    public function setDocumentRevisionId($documentRevisionId)
    {
        $this->documentRevisionId = $documentRevisionId;

        return $this;
    }

    /**
     * Get documentRevisionId
     *
     * @return string
     */
    public function getDocumentRevisionId()
    {
        return $this->documentRevisionId;
    }
}

