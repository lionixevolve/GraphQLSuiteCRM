<?php

namespace Entities;

/**
 * BugsAudit
 */
class BugsAudit
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
     * @var \DateTime
     */
    private $dateCreated;

    /**
     * @var string
     */
    private $createdBy;

    /**
     * @var string
     */
    private $fieldName;

    /**
     * @var string
     */
    private $dataType;

    /**
     * @var string
     */
    private $beforeValueString;

    /**
     * @var string
     */
    private $afterValueString;

    /**
     * @var string
     */
    private $beforeValueText;

    /**
     * @var string
     */
    private $afterValueText;

    /**
     * @var integer
     */
    private $lxcodeC;


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
     * @return BugsAudit
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
     * Set dateCreated
     *
     * @param \DateTime $dateCreated
     *
     * @return BugsAudit
     */
    public function setDateCreated($dateCreated)
    {
        $this->dateCreated = $dateCreated;

        return $this;
    }

    /**
     * Get dateCreated
     *
     * @return \DateTime
     */
    public function getDateCreated()
    {
        return $this->dateCreated;
    }

    /**
     * Set createdBy
     *
     * @param string $createdBy
     *
     * @return BugsAudit
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
     * Set fieldName
     *
     * @param string $fieldName
     *
     * @return BugsAudit
     */
    public function setFieldName($fieldName)
    {
        $this->fieldName = $fieldName;

        return $this;
    }

    /**
     * Get fieldName
     *
     * @return string
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * Set dataType
     *
     * @param string $dataType
     *
     * @return BugsAudit
     */
    public function setDataType($dataType)
    {
        $this->dataType = $dataType;

        return $this;
    }

    /**
     * Get dataType
     *
     * @return string
     */
    public function getDataType()
    {
        return $this->dataType;
    }

    /**
     * Set beforeValueString
     *
     * @param string $beforeValueString
     *
     * @return BugsAudit
     */
    public function setBeforeValueString($beforeValueString)
    {
        $this->beforeValueString = $beforeValueString;

        return $this;
    }

    /**
     * Get beforeValueString
     *
     * @return string
     */
    public function getBeforeValueString()
    {
        return $this->beforeValueString;
    }

    /**
     * Set afterValueString
     *
     * @param string $afterValueString
     *
     * @return BugsAudit
     */
    public function setAfterValueString($afterValueString)
    {
        $this->afterValueString = $afterValueString;

        return $this;
    }

    /**
     * Get afterValueString
     *
     * @return string
     */
    public function getAfterValueString()
    {
        return $this->afterValueString;
    }

    /**
     * Set beforeValueText
     *
     * @param string $beforeValueText
     *
     * @return BugsAudit
     */
    public function setBeforeValueText($beforeValueText)
    {
        $this->beforeValueText = $beforeValueText;

        return $this;
    }

    /**
     * Get beforeValueText
     *
     * @return string
     */
    public function getBeforeValueText()
    {
        return $this->beforeValueText;
    }

    /**
     * Set afterValueText
     *
     * @param string $afterValueText
     *
     * @return BugsAudit
     */
    public function setAfterValueText($afterValueText)
    {
        $this->afterValueText = $afterValueText;

        return $this;
    }

    /**
     * Get afterValueText
     *
     * @return string
     */
    public function getAfterValueText()
    {
        return $this->afterValueText;
    }

    /**
     * Set lxcodeC
     *
     * @param integer $lxcodeC
     *
     * @return BugsAudit
     */
    public function setLxcodeC($lxcodeC)
    {
        $this->lxcodeC = $lxcodeC;

        return $this;
    }

    /**
     * Get lxcodeC
     *
     * @return integer
     */
    public function getLxcodeC()
    {
        return $this->lxcodeC;
    }
}

