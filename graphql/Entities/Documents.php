<?php

namespace Entities;

/**
 * Documents
 */
class Documents
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var \DateTime
     */
    private $dateEntered;

    /**
     * @var \DateTime
     */
    private $dateModified;

    /**
     * @var string
     */
    private $modifiedUserId;

    /**
     * @var string
     */
    private $createdBy;

    /**
     * @var string
     */
    private $description;

    /**
     * @var boolean
     */
    private $deleted = '0';

    /**
     * @var string
     */
    private $assignedUserId;

    /**
     * @var string
     */
    private $documentName;

    /**
     * @var string
     */
    private $docId;

    /**
     * @var string
     */
    private $docType = 'Sugar';

    /**
     * @var string
     */
    private $docUrl;

    /**
     * @var \DateTime
     */
    private $activeDate;

    /**
     * @var \DateTime
     */
    private $expDate;

    /**
     * @var string
     */
    private $categoryId;

    /**
     * @var string
     */
    private $subcategoryId;

    /**
     * @var string
     */
    private $statusId;

    /**
     * @var string
     */
    private $documentRevisionId;

    /**
     * @var string
     */
    private $relatedDocId;

    /**
     * @var string
     */
    private $relatedDocRevId;

    /**
     * @var boolean
     */
    private $isTemplate = '0';

    /**
     * @var string
     */
    private $templateType;


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
     * Set dateEntered
     *
     * @param \DateTime $dateEntered
     *
     * @return Documents
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
     * Set dateModified
     *
     * @param \DateTime $dateModified
     *
     * @return Documents
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
     * Set modifiedUserId
     *
     * @param string $modifiedUserId
     *
     * @return Documents
     */
    public function setModifiedUserId($modifiedUserId)
    {
        $this->modifiedUserId = $modifiedUserId;

        return $this;
    }

    /**
     * Get modifiedUserId
     *
     * @return string
     */
    public function getModifiedUserId()
    {
        return $this->modifiedUserId;
    }

    /**
     * Set createdBy
     *
     * @param string $createdBy
     *
     * @return Documents
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
     * Set description
     *
     * @param string $description
     *
     * @return Documents
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return Documents
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
     * Set assignedUserId
     *
     * @param string $assignedUserId
     *
     * @return Documents
     */
    public function setAssignedUserId($assignedUserId)
    {
        $this->assignedUserId = $assignedUserId;

        return $this;
    }

    /**
     * Get assignedUserId
     *
     * @return string
     */
    public function getAssignedUserId()
    {
        return $this->assignedUserId;
    }

    /**
     * Set documentName
     *
     * @param string $documentName
     *
     * @return Documents
     */
    public function setDocumentName($documentName)
    {
        $this->documentName = $documentName;

        return $this;
    }

    /**
     * Get documentName
     *
     * @return string
     */
    public function getDocumentName()
    {
        return $this->documentName;
    }

    /**
     * Set docId
     *
     * @param string $docId
     *
     * @return Documents
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
     * @return Documents
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
     * @return Documents
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
     * Set activeDate
     *
     * @param \DateTime $activeDate
     *
     * @return Documents
     */
    public function setActiveDate($activeDate)
    {
        $this->activeDate = $activeDate;

        return $this;
    }

    /**
     * Get activeDate
     *
     * @return \DateTime
     */
    public function getActiveDate()
    {
        return $this->activeDate;
    }

    /**
     * Set expDate
     *
     * @param \DateTime $expDate
     *
     * @return Documents
     */
    public function setExpDate($expDate)
    {
        $this->expDate = $expDate;

        return $this;
    }

    /**
     * Get expDate
     *
     * @return \DateTime
     */
    public function getExpDate()
    {
        return $this->expDate;
    }

    /**
     * Set categoryId
     *
     * @param string $categoryId
     *
     * @return Documents
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;

        return $this;
    }

    /**
     * Get categoryId
     *
     * @return string
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set subcategoryId
     *
     * @param string $subcategoryId
     *
     * @return Documents
     */
    public function setSubcategoryId($subcategoryId)
    {
        $this->subcategoryId = $subcategoryId;

        return $this;
    }

    /**
     * Get subcategoryId
     *
     * @return string
     */
    public function getSubcategoryId()
    {
        return $this->subcategoryId;
    }

    /**
     * Set statusId
     *
     * @param string $statusId
     *
     * @return Documents
     */
    public function setStatusId($statusId)
    {
        $this->statusId = $statusId;

        return $this;
    }

    /**
     * Get statusId
     *
     * @return string
     */
    public function getStatusId()
    {
        return $this->statusId;
    }

    /**
     * Set documentRevisionId
     *
     * @param string $documentRevisionId
     *
     * @return Documents
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
     * Set relatedDocId
     *
     * @param string $relatedDocId
     *
     * @return Documents
     */
    public function setRelatedDocId($relatedDocId)
    {
        $this->relatedDocId = $relatedDocId;

        return $this;
    }

    /**
     * Get relatedDocId
     *
     * @return string
     */
    public function getRelatedDocId()
    {
        return $this->relatedDocId;
    }

    /**
     * Set relatedDocRevId
     *
     * @param string $relatedDocRevId
     *
     * @return Documents
     */
    public function setRelatedDocRevId($relatedDocRevId)
    {
        $this->relatedDocRevId = $relatedDocRevId;

        return $this;
    }

    /**
     * Get relatedDocRevId
     *
     * @return string
     */
    public function getRelatedDocRevId()
    {
        return $this->relatedDocRevId;
    }

    /**
     * Set isTemplate
     *
     * @param boolean $isTemplate
     *
     * @return Documents
     */
    public function setIsTemplate($isTemplate)
    {
        $this->isTemplate = $isTemplate;

        return $this;
    }

    /**
     * Get isTemplate
     *
     * @return boolean
     */
    public function getIsTemplate()
    {
        return $this->isTemplate;
    }

    /**
     * Set templateType
     *
     * @param string $templateType
     *
     * @return Documents
     */
    public function setTemplateType($templateType)
    {
        $this->templateType = $templateType;

        return $this;
    }

    /**
     * Get templateType
     *
     * @return string
     */
    public function getTemplateType()
    {
        return $this->templateType;
    }
}

