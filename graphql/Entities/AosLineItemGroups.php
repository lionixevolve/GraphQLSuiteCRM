<?php

namespace Entities;

/**
 * AosLineItemGroups
 */
class AosLineItemGroups
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
    private $assignedUserId;

    /**
     * @var string
     */
    private $totalAmt;

    /**
     * @var string
     */
    private $totalAmtUsdollar;

    /**
     * @var string
     */
    private $discountAmount;

    /**
     * @var string
     */
    private $discountAmountUsdollar;

    /**
     * @var string
     */
    private $subtotalAmount;

    /**
     * @var string
     */
    private $subtotalAmountUsdollar;

    /**
     * @var string
     */
    private $taxAmount;

    /**
     * @var string
     */
    private $taxAmountUsdollar;

    /**
     * @var string
     */
    private $subtotalTaxAmount;

    /**
     * @var string
     */
    private $subtotalTaxAmountUsdollar;

    /**
     * @var string
     */
    private $totalAmount;

    /**
     * @var string
     */
    private $totalAmountUsdollar;

    /**
     * @var string
     */
    private $parentType;

    /**
     * @var string
     */
    private $parentId;

    /**
     * @var integer
     */
    private $number;

    /**
     * @var string
     */
    private $currencyId;


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
     * @return AosLineItemGroups
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
     * @return AosLineItemGroups
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
     * @return AosLineItemGroups
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
     * @return AosLineItemGroups
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
     * @return AosLineItemGroups
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
     * @return AosLineItemGroups
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
     * @return AosLineItemGroups
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
     * @return AosLineItemGroups
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
     * Set totalAmt
     *
     * @param string $totalAmt
     *
     * @return AosLineItemGroups
     */
    public function setTotalAmt($totalAmt)
    {
        $this->totalAmt = $totalAmt;

        return $this;
    }

    /**
     * Get totalAmt
     *
     * @return string
     */
    public function getTotalAmt()
    {
        return $this->totalAmt;
    }

    /**
     * Set totalAmtUsdollar
     *
     * @param string $totalAmtUsdollar
     *
     * @return AosLineItemGroups
     */
    public function setTotalAmtUsdollar($totalAmtUsdollar)
    {
        $this->totalAmtUsdollar = $totalAmtUsdollar;

        return $this;
    }

    /**
     * Get totalAmtUsdollar
     *
     * @return string
     */
    public function getTotalAmtUsdollar()
    {
        return $this->totalAmtUsdollar;
    }

    /**
     * Set discountAmount
     *
     * @param string $discountAmount
     *
     * @return AosLineItemGroups
     */
    public function setDiscountAmount($discountAmount)
    {
        $this->discountAmount = $discountAmount;

        return $this;
    }

    /**
     * Get discountAmount
     *
     * @return string
     */
    public function getDiscountAmount()
    {
        return $this->discountAmount;
    }

    /**
     * Set discountAmountUsdollar
     *
     * @param string $discountAmountUsdollar
     *
     * @return AosLineItemGroups
     */
    public function setDiscountAmountUsdollar($discountAmountUsdollar)
    {
        $this->discountAmountUsdollar = $discountAmountUsdollar;

        return $this;
    }

    /**
     * Get discountAmountUsdollar
     *
     * @return string
     */
    public function getDiscountAmountUsdollar()
    {
        return $this->discountAmountUsdollar;
    }

    /**
     * Set subtotalAmount
     *
     * @param string $subtotalAmount
     *
     * @return AosLineItemGroups
     */
    public function setSubtotalAmount($subtotalAmount)
    {
        $this->subtotalAmount = $subtotalAmount;

        return $this;
    }

    /**
     * Get subtotalAmount
     *
     * @return string
     */
    public function getSubtotalAmount()
    {
        return $this->subtotalAmount;
    }

    /**
     * Set subtotalAmountUsdollar
     *
     * @param string $subtotalAmountUsdollar
     *
     * @return AosLineItemGroups
     */
    public function setSubtotalAmountUsdollar($subtotalAmountUsdollar)
    {
        $this->subtotalAmountUsdollar = $subtotalAmountUsdollar;

        return $this;
    }

    /**
     * Get subtotalAmountUsdollar
     *
     * @return string
     */
    public function getSubtotalAmountUsdollar()
    {
        return $this->subtotalAmountUsdollar;
    }

    /**
     * Set taxAmount
     *
     * @param string $taxAmount
     *
     * @return AosLineItemGroups
     */
    public function setTaxAmount($taxAmount)
    {
        $this->taxAmount = $taxAmount;

        return $this;
    }

    /**
     * Get taxAmount
     *
     * @return string
     */
    public function getTaxAmount()
    {
        return $this->taxAmount;
    }

    /**
     * Set taxAmountUsdollar
     *
     * @param string $taxAmountUsdollar
     *
     * @return AosLineItemGroups
     */
    public function setTaxAmountUsdollar($taxAmountUsdollar)
    {
        $this->taxAmountUsdollar = $taxAmountUsdollar;

        return $this;
    }

    /**
     * Get taxAmountUsdollar
     *
     * @return string
     */
    public function getTaxAmountUsdollar()
    {
        return $this->taxAmountUsdollar;
    }

    /**
     * Set subtotalTaxAmount
     *
     * @param string $subtotalTaxAmount
     *
     * @return AosLineItemGroups
     */
    public function setSubtotalTaxAmount($subtotalTaxAmount)
    {
        $this->subtotalTaxAmount = $subtotalTaxAmount;

        return $this;
    }

    /**
     * Get subtotalTaxAmount
     *
     * @return string
     */
    public function getSubtotalTaxAmount()
    {
        return $this->subtotalTaxAmount;
    }

    /**
     * Set subtotalTaxAmountUsdollar
     *
     * @param string $subtotalTaxAmountUsdollar
     *
     * @return AosLineItemGroups
     */
    public function setSubtotalTaxAmountUsdollar($subtotalTaxAmountUsdollar)
    {
        $this->subtotalTaxAmountUsdollar = $subtotalTaxAmountUsdollar;

        return $this;
    }

    /**
     * Get subtotalTaxAmountUsdollar
     *
     * @return string
     */
    public function getSubtotalTaxAmountUsdollar()
    {
        return $this->subtotalTaxAmountUsdollar;
    }

    /**
     * Set totalAmount
     *
     * @param string $totalAmount
     *
     * @return AosLineItemGroups
     */
    public function setTotalAmount($totalAmount)
    {
        $this->totalAmount = $totalAmount;

        return $this;
    }

    /**
     * Get totalAmount
     *
     * @return string
     */
    public function getTotalAmount()
    {
        return $this->totalAmount;
    }

    /**
     * Set totalAmountUsdollar
     *
     * @param string $totalAmountUsdollar
     *
     * @return AosLineItemGroups
     */
    public function setTotalAmountUsdollar($totalAmountUsdollar)
    {
        $this->totalAmountUsdollar = $totalAmountUsdollar;

        return $this;
    }

    /**
     * Get totalAmountUsdollar
     *
     * @return string
     */
    public function getTotalAmountUsdollar()
    {
        return $this->totalAmountUsdollar;
    }

    /**
     * Set parentType
     *
     * @param string $parentType
     *
     * @return AosLineItemGroups
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
     * Set parentId
     *
     * @param string $parentId
     *
     * @return AosLineItemGroups
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
     * Set number
     *
     * @param integer $number
     *
     * @return AosLineItemGroups
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return integer
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set currencyId
     *
     * @param string $currencyId
     *
     * @return AosLineItemGroups
     */
    public function setCurrencyId($currencyId)
    {
        $this->currencyId = $currencyId;

        return $this;
    }

    /**
     * Get currencyId
     *
     * @return string
     */
    public function getCurrencyId()
    {
        return $this->currencyId;
    }
}

