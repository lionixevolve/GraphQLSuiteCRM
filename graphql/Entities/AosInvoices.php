<?php

namespace Entities;

/**
 * AosInvoices
 */
class AosInvoices
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
    private $billingAccountId;

    /**
     * @var string
     */
    private $billingContactId;

    /**
     * @var string
     */
    private $billingAddressStreet;

    /**
     * @var string
     */
    private $billingAddressCity;

    /**
     * @var string
     */
    private $billingAddressState;

    /**
     * @var string
     */
    private $billingAddressPostalcode;

    /**
     * @var string
     */
    private $billingAddressCountry;

    /**
     * @var string
     */
    private $shippingAddressStreet;

    /**
     * @var string
     */
    private $shippingAddressCity;

    /**
     * @var string
     */
    private $shippingAddressState;

    /**
     * @var string
     */
    private $shippingAddressPostalcode;

    /**
     * @var string
     */
    private $shippingAddressCountry;

    /**
     * @var string
     */
    private $number;

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
    private $subtotalAmount;

    /**
     * @var string
     */
    private $subtotalAmountUsdollar;

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
    private $taxAmount;

    /**
     * @var string
     */
    private $taxAmountUsdollar;

    /**
     * @var string
     */
    private $shippingAmount;

    /**
     * @var string
     */
    private $shippingAmountUsdollar;

    /**
     * @var string
     */
    private $shippingTax;

    /**
     * @var string
     */
    private $shippingTaxAmt;

    /**
     * @var string
     */
    private $shippingTaxAmtUsdollar;

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
    private $currencyId;

    /**
     * @var string
     */
    private $quoteNumber;

    /**
     * @var \DateTime
     */
    private $quoteDate;

    /**
     * @var \DateTime
     */
    private $invoiceDate;

    /**
     * @var \DateTime
     */
    private $dueDate;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $templateDdownC;

    /**
     * @var string
     */
    private $subtotalTaxAmount;

    /**
     * @var string
     */
    private $subtotalTaxAmountUsdollar;


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
     * @return AosInvoices
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
     * @return AosInvoices
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
     * @return AosInvoices
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
     * @return AosInvoices
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
     * @return AosInvoices
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
     * @return AosInvoices
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
     * @return AosInvoices
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
     * @return AosInvoices
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
     * Set billingAccountId
     *
     * @param string $billingAccountId
     *
     * @return AosInvoices
     */
    public function setBillingAccountId($billingAccountId)
    {
        $this->billingAccountId = $billingAccountId;

        return $this;
    }

    /**
     * Get billingAccountId
     *
     * @return string
     */
    public function getBillingAccountId()
    {
        return $this->billingAccountId;
    }

    /**
     * Set billingContactId
     *
     * @param string $billingContactId
     *
     * @return AosInvoices
     */
    public function setBillingContactId($billingContactId)
    {
        $this->billingContactId = $billingContactId;

        return $this;
    }

    /**
     * Get billingContactId
     *
     * @return string
     */
    public function getBillingContactId()
    {
        return $this->billingContactId;
    }

    /**
     * Set billingAddressStreet
     *
     * @param string $billingAddressStreet
     *
     * @return AosInvoices
     */
    public function setBillingAddressStreet($billingAddressStreet)
    {
        $this->billingAddressStreet = $billingAddressStreet;

        return $this;
    }

    /**
     * Get billingAddressStreet
     *
     * @return string
     */
    public function getBillingAddressStreet()
    {
        return $this->billingAddressStreet;
    }

    /**
     * Set billingAddressCity
     *
     * @param string $billingAddressCity
     *
     * @return AosInvoices
     */
    public function setBillingAddressCity($billingAddressCity)
    {
        $this->billingAddressCity = $billingAddressCity;

        return $this;
    }

    /**
     * Get billingAddressCity
     *
     * @return string
     */
    public function getBillingAddressCity()
    {
        return $this->billingAddressCity;
    }

    /**
     * Set billingAddressState
     *
     * @param string $billingAddressState
     *
     * @return AosInvoices
     */
    public function setBillingAddressState($billingAddressState)
    {
        $this->billingAddressState = $billingAddressState;

        return $this;
    }

    /**
     * Get billingAddressState
     *
     * @return string
     */
    public function getBillingAddressState()
    {
        return $this->billingAddressState;
    }

    /**
     * Set billingAddressPostalcode
     *
     * @param string $billingAddressPostalcode
     *
     * @return AosInvoices
     */
    public function setBillingAddressPostalcode($billingAddressPostalcode)
    {
        $this->billingAddressPostalcode = $billingAddressPostalcode;

        return $this;
    }

    /**
     * Get billingAddressPostalcode
     *
     * @return string
     */
    public function getBillingAddressPostalcode()
    {
        return $this->billingAddressPostalcode;
    }

    /**
     * Set billingAddressCountry
     *
     * @param string $billingAddressCountry
     *
     * @return AosInvoices
     */
    public function setBillingAddressCountry($billingAddressCountry)
    {
        $this->billingAddressCountry = $billingAddressCountry;

        return $this;
    }

    /**
     * Get billingAddressCountry
     *
     * @return string
     */
    public function getBillingAddressCountry()
    {
        return $this->billingAddressCountry;
    }

    /**
     * Set shippingAddressStreet
     *
     * @param string $shippingAddressStreet
     *
     * @return AosInvoices
     */
    public function setShippingAddressStreet($shippingAddressStreet)
    {
        $this->shippingAddressStreet = $shippingAddressStreet;

        return $this;
    }

    /**
     * Get shippingAddressStreet
     *
     * @return string
     */
    public function getShippingAddressStreet()
    {
        return $this->shippingAddressStreet;
    }

    /**
     * Set shippingAddressCity
     *
     * @param string $shippingAddressCity
     *
     * @return AosInvoices
     */
    public function setShippingAddressCity($shippingAddressCity)
    {
        $this->shippingAddressCity = $shippingAddressCity;

        return $this;
    }

    /**
     * Get shippingAddressCity
     *
     * @return string
     */
    public function getShippingAddressCity()
    {
        return $this->shippingAddressCity;
    }

    /**
     * Set shippingAddressState
     *
     * @param string $shippingAddressState
     *
     * @return AosInvoices
     */
    public function setShippingAddressState($shippingAddressState)
    {
        $this->shippingAddressState = $shippingAddressState;

        return $this;
    }

    /**
     * Get shippingAddressState
     *
     * @return string
     */
    public function getShippingAddressState()
    {
        return $this->shippingAddressState;
    }

    /**
     * Set shippingAddressPostalcode
     *
     * @param string $shippingAddressPostalcode
     *
     * @return AosInvoices
     */
    public function setShippingAddressPostalcode($shippingAddressPostalcode)
    {
        $this->shippingAddressPostalcode = $shippingAddressPostalcode;

        return $this;
    }

    /**
     * Get shippingAddressPostalcode
     *
     * @return string
     */
    public function getShippingAddressPostalcode()
    {
        return $this->shippingAddressPostalcode;
    }

    /**
     * Set shippingAddressCountry
     *
     * @param string $shippingAddressCountry
     *
     * @return AosInvoices
     */
    public function setShippingAddressCountry($shippingAddressCountry)
    {
        $this->shippingAddressCountry = $shippingAddressCountry;

        return $this;
    }

    /**
     * Get shippingAddressCountry
     *
     * @return string
     */
    public function getShippingAddressCountry()
    {
        return $this->shippingAddressCountry;
    }

    /**
     * Set number
     *
     * @param string $number
     *
     * @return AosInvoices
     */
    public function setNumber($number)
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get number
     *
     * @return string
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Set totalAmt
     *
     * @param string $totalAmt
     *
     * @return AosInvoices
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
     * @return AosInvoices
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
     * Set subtotalAmount
     *
     * @param string $subtotalAmount
     *
     * @return AosInvoices
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
     * @return AosInvoices
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
     * Set discountAmount
     *
     * @param string $discountAmount
     *
     * @return AosInvoices
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
     * @return AosInvoices
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
     * Set taxAmount
     *
     * @param string $taxAmount
     *
     * @return AosInvoices
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
     * @return AosInvoices
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
     * Set shippingAmount
     *
     * @param string $shippingAmount
     *
     * @return AosInvoices
     */
    public function setShippingAmount($shippingAmount)
    {
        $this->shippingAmount = $shippingAmount;

        return $this;
    }

    /**
     * Get shippingAmount
     *
     * @return string
     */
    public function getShippingAmount()
    {
        return $this->shippingAmount;
    }

    /**
     * Set shippingAmountUsdollar
     *
     * @param string $shippingAmountUsdollar
     *
     * @return AosInvoices
     */
    public function setShippingAmountUsdollar($shippingAmountUsdollar)
    {
        $this->shippingAmountUsdollar = $shippingAmountUsdollar;

        return $this;
    }

    /**
     * Get shippingAmountUsdollar
     *
     * @return string
     */
    public function getShippingAmountUsdollar()
    {
        return $this->shippingAmountUsdollar;
    }

    /**
     * Set shippingTax
     *
     * @param string $shippingTax
     *
     * @return AosInvoices
     */
    public function setShippingTax($shippingTax)
    {
        $this->shippingTax = $shippingTax;

        return $this;
    }

    /**
     * Get shippingTax
     *
     * @return string
     */
    public function getShippingTax()
    {
        return $this->shippingTax;
    }

    /**
     * Set shippingTaxAmt
     *
     * @param string $shippingTaxAmt
     *
     * @return AosInvoices
     */
    public function setShippingTaxAmt($shippingTaxAmt)
    {
        $this->shippingTaxAmt = $shippingTaxAmt;

        return $this;
    }

    /**
     * Get shippingTaxAmt
     *
     * @return string
     */
    public function getShippingTaxAmt()
    {
        return $this->shippingTaxAmt;
    }

    /**
     * Set shippingTaxAmtUsdollar
     *
     * @param string $shippingTaxAmtUsdollar
     *
     * @return AosInvoices
     */
    public function setShippingTaxAmtUsdollar($shippingTaxAmtUsdollar)
    {
        $this->shippingTaxAmtUsdollar = $shippingTaxAmtUsdollar;

        return $this;
    }

    /**
     * Get shippingTaxAmtUsdollar
     *
     * @return string
     */
    public function getShippingTaxAmtUsdollar()
    {
        return $this->shippingTaxAmtUsdollar;
    }

    /**
     * Set totalAmount
     *
     * @param string $totalAmount
     *
     * @return AosInvoices
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
     * @return AosInvoices
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
     * Set currencyId
     *
     * @param string $currencyId
     *
     * @return AosInvoices
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
     * Set quoteNumber
     *
     * @param string $quoteNumber
     *
     * @return AosInvoices
     */
    public function setQuoteNumber($quoteNumber)
    {
        $this->quoteNumber = $quoteNumber;

        return $this;
    }

    /**
     * Get quoteNumber
     *
     * @return string
     */
    public function getQuoteNumber()
    {
        return $this->quoteNumber;
    }

    /**
     * Set quoteDate
     *
     * @param \DateTime $quoteDate
     *
     * @return AosInvoices
     */
    public function setQuoteDate($quoteDate)
    {
        $this->quoteDate = $quoteDate;

        return $this;
    }

    /**
     * Get quoteDate
     *
     * @return \DateTime
     */
    public function getQuoteDate()
    {
        return $this->quoteDate;
    }

    /**
     * Set invoiceDate
     *
     * @param \DateTime $invoiceDate
     *
     * @return AosInvoices
     */
    public function setInvoiceDate($invoiceDate)
    {
        $this->invoiceDate = $invoiceDate;

        return $this;
    }

    /**
     * Get invoiceDate
     *
     * @return \DateTime
     */
    public function getInvoiceDate()
    {
        return $this->invoiceDate;
    }

    /**
     * Set dueDate
     *
     * @param \DateTime $dueDate
     *
     * @return AosInvoices
     */
    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;

        return $this;
    }

    /**
     * Get dueDate
     *
     * @return \DateTime
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * Set status
     *
     * @param string $status
     *
     * @return AosInvoices
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set templateDdownC
     *
     * @param string $templateDdownC
     *
     * @return AosInvoices
     */
    public function setTemplateDdownC($templateDdownC)
    {
        $this->templateDdownC = $templateDdownC;

        return $this;
    }

    /**
     * Get templateDdownC
     *
     * @return string
     */
    public function getTemplateDdownC()
    {
        return $this->templateDdownC;
    }

    /**
     * Set subtotalTaxAmount
     *
     * @param string $subtotalTaxAmount
     *
     * @return AosInvoices
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
     * @return AosInvoices
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
}

