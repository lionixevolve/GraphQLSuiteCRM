<?php

namespace Entities;

/**
 * AorConditions
 */
class AorConditions
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
    private $conditionOrder;

    /**
     * @var string
     */
    private $logicOp;

    /**
     * @var string
     */
    private $parenthesis;

    /**
     * @var string
     */
    private $modulePath;

    /**
     * @var string
     */
    private $field;

    /**
     * @var string
     */
    private $operator;

    /**
     * @var string
     */
    private $valueType;

    /**
     * @var string
     */
    private $value;

    /**
     * @var boolean
     */
    private $parameter;


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
     * @return AorConditions
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
     * @return AorConditions
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
     * @return AorConditions
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
     * @return AorConditions
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
     * @return AorConditions
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
     * @return AorConditions
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
     * @return AorConditions
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
     * @return AorConditions
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
     * Set conditionOrder
     *
     * @param integer $conditionOrder
     *
     * @return AorConditions
     */
    public function setConditionOrder($conditionOrder)
    {
        $this->conditionOrder = $conditionOrder;

        return $this;
    }

    /**
     * Get conditionOrder
     *
     * @return integer
     */
    public function getConditionOrder()
    {
        return $this->conditionOrder;
    }

    /**
     * Set logicOp
     *
     * @param string $logicOp
     *
     * @return AorConditions
     */
    public function setLogicOp($logicOp)
    {
        $this->logicOp = $logicOp;

        return $this;
    }

    /**
     * Get logicOp
     *
     * @return string
     */
    public function getLogicOp()
    {
        return $this->logicOp;
    }

    /**
     * Set parenthesis
     *
     * @param string $parenthesis
     *
     * @return AorConditions
     */
    public function setParenthesis($parenthesis)
    {
        $this->parenthesis = $parenthesis;

        return $this;
    }

    /**
     * Get parenthesis
     *
     * @return string
     */
    public function getParenthesis()
    {
        return $this->parenthesis;
    }

    /**
     * Set modulePath
     *
     * @param string $modulePath
     *
     * @return AorConditions
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
     * @return AorConditions
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
     * Set operator
     *
     * @param string $operator
     *
     * @return AorConditions
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;

        return $this;
    }

    /**
     * Get operator
     *
     * @return string
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Set valueType
     *
     * @param string $valueType
     *
     * @return AorConditions
     */
    public function setValueType($valueType)
    {
        $this->valueType = $valueType;

        return $this;
    }

    /**
     * Get valueType
     *
     * @return string
     */
    public function getValueType()
    {
        return $this->valueType;
    }

    /**
     * Set value
     *
     * @param string $value
     *
     * @return AorConditions
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set parameter
     *
     * @param boolean $parameter
     *
     * @return AorConditions
     */
    public function setParameter($parameter)
    {
        $this->parameter = $parameter;

        return $this;
    }

    /**
     * Get parameter
     *
     * @return boolean
     */
    public function getParameter()
    {
        return $this->parameter;
    }
}

