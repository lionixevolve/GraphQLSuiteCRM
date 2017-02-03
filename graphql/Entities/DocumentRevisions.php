<?php

namespace Entities;

/**
 * DocumentRevisions
 */
class DocumentRevisions
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $changeLog;

    /**
     * @var string
     */
    private $documentId;

    /**
     * @var string
     */
    private $docId;

    /**
     * @var string
     */
    private $docType;

    /**
     * @var string
     */
    private $docUrl;

    /**
     * @var \DateTime
     */
    private $dateEntered;

    /**
     * @var string
     */
    private $createdBy;

    /**
     * @var string
     */
    private $filename;

    /**
     * @var string
     */
    private $fileExt;

    /**
     * @var string
     */
    private $fileMimeType;

    /**
     * @var string
     */
    private $revision;

    /**
     * @var boolean
     */
    private $deleted = '0';

    /**
     * @var \DateTime
     */
    private $dateModified;


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
     * Set changeLog
     *
     * @param string $changeLog
     *
     * @return DocumentRevisions
     */
    public function setChangeLog($changeLog)
    {
        $this->changeLog = $changeLog;

        return $this;
    }

    /**
     * Get changeLog
     *
     * @return string
     */
    public function getChangeLog()
    {
        return $this->changeLog;
    }

    /**
     * Set documentId
     *
     * @param string $documentId
     *
     * @return DocumentRevisions
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
     * Set docId
     *
     * @param string $docId
     *
     * @return DocumentRevisions
     */
    public function setDocId($docId)
    {
        $this->docId = $docId;

        return $this;
    }

    /**
     * Get docId
     *
     * @return string
     */
    public function getDocId()
    {
        return $this->docId;
    }

    /**
     * Set docType
     *
     * @param string $docType
     *
     * @return DocumentRevisions
     */
    public function setDocType($docType)
    {
        $this->docType = $docType;

        return $this;
    }

    /**
     * Get docType
     *
     * @return string
     */
    public function getDocType()
    {
        return $this->docType;
    }

    /**
     * Set docUrl
     *
     * @param string $docUrl
     *
     * @return DocumentRevisions
     */
    public function setDocUrl($docUrl)
    {
        $this->docUrl = $docUrl;

        return $this;
    }

    /**
     * Get docUrl
     *
     * @return string
     */
    public function getDocUrl()
    {
        return $this->docUrl;
    }

    /**
     * Set dateEntered
     *
     * @param \DateTime $dateEntered
     *
     * @return DocumentRevisions
     */
    public function setDateEntered($dateEntered)
    {
        $this->dateEntered = $dateEntered;

        return $this;
    }

    /**
     * Get dateEntered
     *
     * @return \DateTime
     */
    public function getDateEntered()
    {
        return $this->dateEntered;
    }

    /**
     * Set createdBy
     *
     * @param string $createdBy
     *
     * @return DocumentRevisions
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;

        return $this;
    }

    /**
     * Get createdBy
     *
     * @return string
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Set filename
     *
     * @param string $filename
     *
     * @return DocumentRevisions
     */
    public function setFilename($filename)
    {
        $this->filename = $filename;

        return $this;
    }

    /**
     * Get filename
     *
     * @return string
     */
    public function getFilename()
    {
        return $this->filename;
    }

    /**
     * Set fileExt
     *
     * @param string $fileExt
     *
     * @return DocumentRevisions
     */
    public function setFileExt($fileExt)
    {
        $this->fileExt = $fileExt;

        return $this;
    }

    /**
     * Get fileExt
     *
     * @return string
     */
    public function getFileExt()
    {
        return $this->fileExt;
    }

    /**
     * Set fileMimeType
     *
     * @param string $fileMimeType
     *
     * @return DocumentRevisions
     */
    public function setFileMimeType($fileMimeType)
    {
        $this->fileMimeType = $fileMimeType;

        return $this;
    }

    /**
     * Get fileMimeType
     *
     * @return string
     */
    public function getFileMimeType()
    {
        return $this->fileMimeType;
    }

    /**
     * Set revision
     *
     * @param string $revision
     *
     * @return DocumentRevisions
     */
    public function setRevision($revision)
    {
        $this->revision = $revision;

        return $this;
    }

    /**
     * Get revision
     *
     * @return string
     */
    public function getRevision()
    {
        return $this->revision;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return DocumentRevisions
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
     * Set dateModified
     *
     * @param \DateTime $dateModified
     *
     * @return DocumentRevisions
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
}

