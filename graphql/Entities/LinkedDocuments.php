<?php

namespace Entities;

/**
 * LinkedDocuments
 */
class LinkedDocuments
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $parentId;

    /**
     * @var string
     */
    private $parentType;

    /**
     * @var string
     */
    private $documentId;

    /**
     * @var string
     */
    private $documentRevisionId;

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
     * Set parentId
     *
     * @param string $parentId
     *
     * @return LinkedDocuments
     */
    public function setParentId($parentId)
    {
        $this->parentId = $parentId;

        return $this;
    }

    /**
     * Get parentId
     *
     * @return string
     */
    public function getParentId()
    {
        return $this->parentId;
    }

    /**
     * Set parentType
     *
     * @param string $parentType
     *
     * @return LinkedDocuments
     */
    public function setParentType($parentType)
    {
        $this->parentType = $parentType;

        return $this;
    }

    /**
     * Get parentType
     *
     * @return string
     */
    public function getParentType()
    {
        return $this->parentType;
    }

    /**
     * Set documentId
     *
     * @param string $documentId
     *
     * @return LinkedDocuments
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
     * Set documentRevisionId
     *
     * @param string $documentRevisionId
     *
     * @return LinkedDocuments
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

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     *
     * @return LinkedDocuments
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
     * @return LinkedDocuments
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

