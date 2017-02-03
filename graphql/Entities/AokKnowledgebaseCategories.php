<?php

namespace Entities;

/**
 * AokKnowledgebaseCategories
 */
class AokKnowledgebaseCategories
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
    private $aokKnowledgebaseId;

    /**
     * @var string
     */
    private $aokKnowledgeBaseCategoriesId;


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
     * @return AokKnowledgebaseCategories
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
     * @return AokKnowledgebaseCategories
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
     * Set aokKnowledgebaseId
     *
     * @param string $aokKnowledgebaseId
     *
     * @return AokKnowledgebaseCategories
     */
    public function setAokKnowledgebaseId($aokKnowledgebaseId)
    {
        $this->aokKnowledgebaseId = $aokKnowledgebaseId;

        return $this;
    }

    /**
     * Get aokKnowledgebaseId
     *
     * @return string
     */
    public function getAokKnowledgebaseId()
    {
        return $this->aokKnowledgebaseId;
    }

    /**
     * Set aokKnowledgeBaseCategoriesId
     *
     * @param string $aokKnowledgeBaseCategoriesId
     *
     * @return AokKnowledgebaseCategories
     */
    public function setAokKnowledgeBaseCategoriesId($aokKnowledgeBaseCategoriesId)
    {
        $this->aokKnowledgeBaseCategoriesId = $aokKnowledgeBaseCategoriesId;

        return $this;
    }

    /**
     * Get aokKnowledgeBaseCategoriesId
     *
     * @return string
     */
    public function getAokKnowledgeBaseCategoriesId()
    {
        return $this->aokKnowledgeBaseCategoriesId;
    }
}

