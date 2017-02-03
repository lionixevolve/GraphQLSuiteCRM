<?php

namespace Entities;

/**
 * ProspectListsProspects
 */
class ProspectListsProspects
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $prospectListId;

    /**
     * @var string
     */
    private $relatedId;

    /**
     * @var string
     */
    private $relatedType;

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
     * Set prospectListId
     *
     * @param string $prospectListId
     *
     * @return ProspectListsProspects
     */
    public function setProspectListId($prospectListId)
    {
        $this->prospectListId = $prospectListId;

        return $this;
    }

    /**
     * Get prospectListId
     *
     * @return string
     */
    public function getProspectListId()
    {
        return $this->prospectListId;
    }

    /**
     * Set relatedId
     *
     * @param string $relatedId
     *
     * @return ProspectListsProspects
     */
    public function setRelatedId($relatedId)
    {
        $this->relatedId = $relatedId;

        return $this;
    }

    /**
     * Get relatedId
     *
     * @return string
     */
    public function getRelatedId()
    {
        return $this->relatedId;
    }

    /**
     * Set relatedType
     *
     * @param string $relatedType
     *
     * @return ProspectListsProspects
     */
    public function setRelatedType($relatedType)
    {
        $this->relatedType = $relatedType;

        return $this;
    }

    /**
     * Get relatedType
     *
     * @return string
     */
    public function getRelatedType()
    {
        return $this->relatedType;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     *
     * @return ProspectListsProspects
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
     * @return ProspectListsProspects
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

