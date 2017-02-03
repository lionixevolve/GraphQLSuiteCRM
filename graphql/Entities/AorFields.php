<?php

namespace Entities;

/**
 * AorFields
 */
class AorFields
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $name;

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
    private $aorReportId;

    /**
     * @var integer
     */
    private $fieldOrder;

    /**
     * @var string
     */
    private $modulePath;

    /**
     * @var string
     */
    private $field;

    /**
     * @var boolean
     */
    private $display;

    /**
     * @var boolean
     */
    private $link;

    /**
     * @var string
     */
    private $label;

    /**
     * @var string
     */
    private $fieldFunction;

    /**
     * @var string
     */
    private $sortBy;

    /**
     * @var string
     */
    private $format;

    /**
     * @var string
     */
    private $total;

    /**
     * @var string
     */
    private $sortOrder;

    /**
     * @var boolean
     */
    private $groupBy;

    /**
     * @var string
     */
    private $groupOrder;

    /**
     * @var integer
     */
    private $groupDisplay;


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
     * Set name
     *
     * @param string $name
     *
     * @return AorFields
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set dateEntered
     *
     * @param \DateTime $dateEntered
     *
     * @return AorFields
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
     * @return AorFields
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
     * @return AorFields
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
     * @return AorFields
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
     * @return AorFields
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
     * @return AorFields
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
     * Set aorReportId
     *
     * @param string $aorReportId
     *
     * @return AorFields
     */
    public function setAorReportId($aorReportId)
    {
        $this->aorReportId = $aorReportId;

        return $this;
    }

    /**
     * Get aorReportId
     *
     * @return string
     */
    public function getAorReportId()
    {
        return $this->aorReportId;
    }

    /**
     * Set fieldOrder
     *
     * @param integer $fieldOrder
     *
     * @return AorFields
     */
    public function setFieldOrder($fieldOrder)
    {
        $this->fieldOrder = $fieldOrder;

        return $this;
    }

    /**
     * Get fieldOrder
     *
     * @return integer
     */
    public function getFieldOrder()
    {
        return $this->fieldOrder;
    }

    /**
     * Set modulePath
     *
     * @param string $modulePath
     *
     * @return AorFields
     */
    public function setModulePath($modulePath)
    {
        $this->modulePath = $modulePath;

        return $this;
    }

    /**
     * Get modulePath
     *
     * @return string
     */
    public function getModulePath()
    {
        return $this->modulePath;
    }

    /**
     * Set field
     *
     * @param string $field
     *
     * @return AorFields
     */
    public function setField($field)
    {
        $this->field = $field;

        return $this;
    }

    /**
     * Get field
     *
     * @return string
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Set display
     *
     * @param boolean $display
     *
     * @return AorFields
     */
    public function setDisplay($display)
    {
        $this->display = $display;

        return $this;
    }

    /**
     * Get display
     *
     * @return boolean
     */
    public function getDisplay()
    {
        return $this->display;
    }

    /**
     * Set link
     *
     * @param boolean $link
     *
     * @return AorFields
     */
    public function setLink($link)
    {
        $this->link = $link;

        return $this;
    }

    /**
     * Get link
     *
     * @return boolean
     */
    public function getLink()
    {
        return $this->link;
    }

    /**
     * Set label
     *
     * @param string $label
     *
     * @return AorFields
     */
    public function setLabel($label)
    {
        $this->label = $label;

        return $this;
    }

    /**
     * Get label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->label;
    }

    /**
     * Set fieldFunction
     *
     * @param string $fieldFunction
     *
     * @return AorFields
     */
    public function setFieldFunction($fieldFunction)
    {
        $this->fieldFunction = $fieldFunction;

        return $this;
    }

    /**
     * Get fieldFunction
     *
     * @return string
     */
    public function getFieldFunction()
    {
        return $this->fieldFunction;
    }

    /**
     * Set sortBy
     *
     * @param string $sortBy
     *
     * @return AorFields
     */
    public function setSortBy($sortBy)
    {
        $this->sortBy = $sortBy;

        return $this;
    }

    /**
     * Get sortBy
     *
     * @return string
     */
    public function getSortBy()
    {
        return $this->sortBy;
    }

    /**
     * Set format
     *
     * @param string $format
     *
     * @return AorFields
     */
    public function setFormat($format)
    {
        $this->format = $format;

        return $this;
    }

    /**
     * Get format
     *
     * @return string
     */
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * Set total
     *
     * @param string $total
     *
     * @return AorFields
     */
    public function setTotal($total)
    {
        $this->total = $total;

        return $this;
    }

    /**
     * Get total
     *
     * @return string
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Set sortOrder
     *
     * @param string $sortOrder
     *
     * @return AorFields
     */
    public function setSortOrder($sortOrder)
    {
        $this->sortOrder = $sortOrder;

        return $this;
    }

    /**
     * Get sortOrder
     *
     * @return string
     */
    public function getSortOrder()
    {
        return $this->sortOrder;
    }

    /**
     * Set groupBy
     *
     * @param boolean $groupBy
     *
     * @return AorFields
     */
    public function setGroupBy($groupBy)
    {
        $this->groupBy = $groupBy;

        return $this;
    }

    /**
     * Get groupBy
     *
     * @return boolean
     */
    public function getGroupBy()
    {
        return $this->groupBy;
    }

    /**
     * Set groupOrder
     *
     * @param string $groupOrder
     *
     * @return AorFields
     */
    public function setGroupOrder($groupOrder)
    {
        $this->groupOrder = $groupOrder;

        return $this;
    }

    /**
     * Get groupOrder
     *
     * @return string
     */
    public function getGroupOrder()
    {
        return $this->groupOrder;
    }

    /**
     * Set groupDisplay
     *
     * @param integer $groupDisplay
     *
     * @return AorFields
     */
    public function setGroupDisplay($groupDisplay)
    {
        $this->groupDisplay = $groupDisplay;

        return $this;
    }

    /**
     * Get groupDisplay
     *
     * @return integer
     */
    public function getGroupDisplay()
    {
        return $this->groupDisplay;
    }
}

