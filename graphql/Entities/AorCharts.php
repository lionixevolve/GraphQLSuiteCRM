<?php

namespace Entities;

/**
 * AorCharts
 */
class AorCharts
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
     * @var string
     */
    private $type;

    /**
     * @var integer
     */
    private $xField;

    /**
     * @var integer
     */
    private $yField;


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
     * @return AorCharts
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
     * @return AorCharts
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
     * @return AorCharts
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
     * @return AorCharts
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
     * @return AorCharts
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
     * @return AorCharts
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
     * @return AorCharts
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
     * @return AorCharts
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
     * Set type
     *
     * @param string $type
     *
     * @return AorCharts
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set xField
     *
     * @param integer $xField
     *
     * @return AorCharts
     */
    public function setXField($xField)
    {
        $this->xField = $xField;

        return $this;
    }

    /**
     * Get xField
     *
     * @return integer
     */
    public function getXField()
    {
        return $this->xField;
    }

    /**
     * Set yField
     *
     * @param integer $yField
     *
     * @return AorCharts
     */
    public function setYField($yField)
    {
        $this->yField = $yField;

        return $this;
    }

    /**
     * Get yField
     *
     * @return integer
     */
    public function getYField()
    {
        return $this->yField;
    }
}

