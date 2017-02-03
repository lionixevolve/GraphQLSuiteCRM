<?php

namespace Entities;

/**
 * AosProductsQuotes
 */
class AosProductsQuotes
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
    private $currencyId;

    /**
     * @var string
     */
    private $partNumber;

    /**
     * @var string
     */
    private $itemDescription;

    /**
     * @var integer
     */
    private $number;

    /**
     * @var string
     */
    private $productQty;

    /**
     * @var string
     */
    private $productCostPrice;

    /**
     * @var string
     */
    private $productCostPriceUsdollar;

    /**
     * @var string
     */
    private $productListPrice;

    /**
     * @var string
     */
    private $productListPriceUsdollar;

    /**
     * @var string
     */
    private $productDiscount;

    /**
     * @var string
     */
    private $productDiscountUsdollar;

    /**
     * @var string
     */
    private $productDiscountAmount;

    /**
     * @var string
     */
    private $productDiscountAmountUsdollar;

    /**
     * @var string
     */
    private $discount = 'Percentage';

    /**
     * @var string
     */
    private $productUnitPrice;

    /**
     * @var string
     */
    private $productUnitPriceUsdollar;

    /**
     * @var string
     */
    private $vatAmt;

    /**
     * @var string
     */
    private $vatAmtUsdollar;

    /**
     * @var string
     */
    private $productTotalPrice;

    /**
     * @var string
     */
    private $productTotalPriceUsdollar;

    /**
     * @var string
     */
    private $vat = '5.0';

    /**
     * @var string
     */
    private $parentType;

    /**
     * @var string
     */
    private $parentId;

    /**
     * @var string
     */
    private $productId;

    /**
     * @var string
     */
    private $groupId;


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
     * @return AosProductsQuotes
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
     * @return AosProductsQuotes
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
     * @return AosProductsQuotes
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
     * @return AosProductsQuotes
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
     * @return AosProductsQuotes
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
     * @return AosProductsQuotes
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
     * @return AosProductsQuotes
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
     * @return AosProductsQuotes
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
     * Set currencyId
     *
     * @param string $currencyId
     *
     * @return AosProductsQuotes
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

    /**
     * Set partNumber
     *
     * @param string $partNumber
     *
     * @return AosProductsQuotes
     */
    public function setPartNumber($partNumber)
    {
        $this->partNumber = $partNumber;

        return $this;
    }

    /**
     * Get partNumber
     *
     * @return string
     */
    public function getPartNumber()
    {
        return $this->partNumber;
    }

    /**
     * Set itemDescription
     *
     * @param string $itemDescription
     *
     * @return AosProductsQuotes
     */
    public function setItemDescription($itemDescription)
    {
        $this->itemDescription = $itemDescription;

        return $this;
    }

    /**
     * Get itemDescription
     *
     * @return string
     */
    public function getItemDescription()
    {
        return $this->itemDescription;
    }

    /**
     * Set number
     *
     * @param integer $number
     *
     * @return AosProductsQuotes
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
     * Set productQty
     *
     * @param string $productQty
     *
     * @return AosProductsQuotes
     */
    public function setProductQty($productQty)
    {
        $this->productQty = $productQty;

        return $this;
    }

    /**
     * Get productQty
     *
     * @return string
     */
    public function getProductQty()
    {
        return $this->productQty;
    }

    /**
     * Set productCostPrice
     *
     * @param string $productCostPrice
     *
     * @return AosProductsQuotes
     */
    public function setProductCostPrice($productCostPrice)
    {
        $this->productCostPrice = $productCostPrice;

        return $this;
    }

    /**
     * Get productCostPrice
     *
     * @return string
     */
    public function getProductCostPrice()
    {
        return $this->productCostPrice;
    }

    /**
     * Set productCostPriceUsdollar
     *
     * @param string $productCostPriceUsdollar
     *
     * @return AosProductsQuotes
     */
    public function setProductCostPriceUsdollar($productCostPriceUsdollar)
    {
        $this->productCostPriceUsdollar = $productCostPriceUsdollar;

        return $this;
    }

    /**
     * Get productCostPriceUsdollar
     *
     * @return string
     */
    public function getProductCostPriceUsdollar()
    {
        return $this->productCostPriceUsdollar;
    }

    /**
     * Set productListPrice
     *
     * @param string $productListPrice
     *
     * @return AosProductsQuotes
     */
    public function setProductListPrice($productListPrice)
    {
        $this->productListPrice = $productListPrice;

        return $this;
    }

    /**
     * Get productListPrice
     *
     * @return string
     */
    public function getProductListPrice()
    {
        return $this->productListPrice;
    }

    /**
     * Set productListPriceUsdollar
     *
     * @param string $productListPriceUsdollar
     *
     * @return AosProductsQuotes
     */
    public function setProductListPriceUsdollar($productListPriceUsdollar)
    {
        $this->productListPriceUsdollar = $productListPriceUsdollar;

        return $this;
    }

    /**
     * Get productListPriceUsdollar
     *
     * @return string
     */
    public function getProductListPriceUsdollar()
    {
        return $this->productListPriceUsdollar;
    }

    /**
     * Set productDiscount
     *
     * @param string $productDiscount
     *
     * @return AosProductsQuotes
     */
    public function setProductDiscount($productDiscount)
    {
        $this->productDiscount = $productDiscount;

        return $this;
    }

    /**
     * Get productDiscount
     *
     * @return string
     */
    public function getProductDiscount()
    {
        return $this->productDiscount;
    }

    /**
     * Set productDiscountUsdollar
     *
     * @param string $productDiscountUsdollar
     *
     * @return AosProductsQuotes
     */
    public function setProductDiscountUsdollar($productDiscountUsdollar)
    {
        $this->productDiscountUsdollar = $productDiscountUsdollar;

        return $this;
    }

    /**
     * Get productDiscountUsdollar
     *
     * @return string
     */
    public function getProductDiscountUsdollar()
    {
        return $this->productDiscountUsdollar;
    }

    /**
     * Set productDiscountAmount
     *
     * @param string $productDiscountAmount
     *
     * @return AosProductsQuotes
     */
    public function setProductDiscountAmount($productDiscountAmount)
    {
        $this->productDiscountAmount = $productDiscountAmount;

        return $this;
    }

    /**
     * Get productDiscountAmount
     *
     * @return string
     */
    public function getProductDiscountAmount()
    {
        return $this->productDiscountAmount;
    }

    /**
     * Set productDiscountAmountUsdollar
     *
     * @param string $productDiscountAmountUsdollar
     *
     * @return AosProductsQuotes
     */
    public function setProductDiscountAmountUsdollar($productDiscountAmountUsdollar)
    {
        $this->productDiscountAmountUsdollar = $productDiscountAmountUsdollar;

        return $this;
    }

    /**
     * Get productDiscountAmountUsdollar
     *
     * @return string
     */
    public function getProductDiscountAmountUsdollar()
    {
        return $this->productDiscountAmountUsdollar;
    }

    /**
     * Set discount
     *
     * @param string $discount
     *
     * @return AosProductsQuotes
     */
    public function setDiscount($discount)
    {
        $this->discount = $discount;

        return $this;
    }

    /**
     * Get discount
     *
     * @return string
     */
    public function getDiscount()
    {
        return $this->discount;
    }

    /**
     * Set productUnitPrice
     *
     * @param string $productUnitPrice
     *
     * @return AosProductsQuotes
     */
    public function setProductUnitPrice($productUnitPrice)
    {
        $this->productUnitPrice = $productUnitPrice;

        return $this;
    }

    /**
     * Get productUnitPrice
     *
     * @return string
     */
    public function getProductUnitPrice()
    {
        return $this->productUnitPrice;
    }

    /**
     * Set productUnitPriceUsdollar
     *
     * @param string $productUnitPriceUsdollar
     *
     * @return AosProductsQuotes
     */
    public function setProductUnitPriceUsdollar($productUnitPriceUsdollar)
    {
        $this->productUnitPriceUsdollar = $productUnitPriceUsdollar;

        return $this;
    }

    /**
     * Get productUnitPriceUsdollar
     *
     * @return string
     */
    public function getProductUnitPriceUsdollar()
    {
        return $this->productUnitPriceUsdollar;
    }

    /**
     * Set vatAmt
     *
     * @param string $vatAmt
     *
     * @return AosProductsQuotes
     */
    public function setVatAmt($vatAmt)
    {
        $this->vatAmt = $vatAmt;

        return $this;
    }

    /**
     * Get vatAmt
     *
     * @return string
     */
    public function getVatAmt()
    {
        return $this->vatAmt;
    }

    /**
     * Set vatAmtUsdollar
     *
     * @param string $vatAmtUsdollar
     *
     * @return AosProductsQuotes
     */
    public function setVatAmtUsdollar($vatAmtUsdollar)
    {
        $this->vatAmtUsdollar = $vatAmtUsdollar;

        return $this;
    }

    /**
     * Get vatAmtUsdollar
     *
     * @return string
     */
    public function getVatAmtUsdollar()
    {
        return $this->vatAmtUsdollar;
    }

    /**
     * Set productTotalPrice
     *
     * @param string $productTotalPrice
     *
     * @return AosProductsQuotes
     */
    public function setProductTotalPrice($productTotalPrice)
    {
        $this->productTotalPrice = $productTotalPrice;

        return $this;
    }

    /**
     * Get productTotalPrice
     *
     * @return string
     */
    public function getProductTotalPrice()
    {
        return $this->productTotalPrice;
    }

    /**
     * Set productTotalPriceUsdollar
     *
     * @param string $productTotalPriceUsdollar
     *
     * @return AosProductsQuotes
     */
    public function setProductTotalPriceUsdollar($productTotalPriceUsdollar)
    {
        $this->productTotalPriceUsdollar = $productTotalPriceUsdollar;

        return $this;
    }

    /**
     * Get productTotalPriceUsdollar
     *
     * @return string
     */
    public function getProductTotalPriceUsdollar()
    {
        return $this->productTotalPriceUsdollar;
    }

    /**
     * Set vat
     *
     * @param string $vat
     *
     * @return AosProductsQuotes
     */
    public function setVat($vat)
    {
        $this->vat = $vat;

        return $this;
    }

    /**
     * Get vat
     *
     * @return string
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * Set parentType
     *
     * @param string $parentType
     *
     * @return AosProductsQuotes
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
     * @return AosProductsQuotes
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
     * Set productId
     *
     * @param string $productId
     *
     * @return AosProductsQuotes
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;

        return $this;
    }

    /**
     * Get productId
     *
     * @return string
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set groupId
     *
     * @param string $groupId
     *
     * @return AosProductsQuotes
     */
    public function setGroupId($groupId)
    {
        $this->groupId = $groupId;

        return $this;
    }

    /**
     * Get groupId
     *
     * @return string
     */
    public function getGroupId()
    {
        return $this->groupId;
    }
}

