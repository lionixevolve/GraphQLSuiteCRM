<?php

namespace Entities;

/**
 * AosQuotes
 */
class AosQuotes
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
    private $approvalIssue;

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
     * @var \DateTime
     */
    private $expiration;

    /**
     * @var string
     */
    private $number;

    /**
     * @var string
     */
    private $opportunityId;

    /**
     * @var string
     */
    private $templateDdownC;

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
    private $stage = 'Draft';

    /**
     * @var string
     */
    private $term;

    /**
     * @var string
     */
    private $termsC;

    /**
     * @var string
     */
    private $approvalStatus;

    /**
     * @var string
     */
    private $invoiceStatus = 'Not Invoiced';

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
     * @return AosQuotes
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
     * @return AosQuotes
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
     * @return AosQuotes
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
     * @return AosQuotes
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
     * @return AosQuotes
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
     * @return AosQuotes
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
     * @return AosQuotes
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
     * @return AosQuotes
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
     * Set approvalIssue
     *
     * @param string $approvalIssue
     *
     * @return AosQuotes
     */
    public function setApprovalIssue($approvalIssue)
    {
        $this->approvalIssue = $approvalIssue;

        return $this;
    }

    /**
     * Get approvalIssue
     *
     * @return string
     */
    public function getApprovalIssue()
    {
        return $this->approvalIssue;
    }

    /**
     * Set billingAccountId
     *
     * @param string $billingAccountId
     *
     * @return AosQuotes
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
     * @return AosQuotes
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
     * @return AosQuotes
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
     * @return AosQuotes
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
     * @return AosQuotes
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
     * @return AosQuotes
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
     * @return AosQuotes
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
     * @return AosQuotes
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
     * @return AosQuotes
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
     * @return AosQuotes
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
     * @return AosQuotes
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
     * @return AosQuotes
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
     * Set expiration
     *
     * @param \DateTime $expiration
     *
     * @return AosQuotes
     */
    public function setExpiration($expiration)
    {
        $this->expiration = $expiration;

        return $this;
    }

    /**
     * Get expiration
     *
     * @return \DateTime
     */
    public function getExpiration()
    {
        return $this->expiration;
    }

    /**
     * Set number
     *
     * @param string $number
     *
     * @return AosQuotes
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
     * Set opportunityId
     *
     * @param string $opportunityId
     *
     * @return AosQuotes
     */
    public function setOpportunityId($opportunityId)
    {
        $this->opportunityId = $opportunityId;

        return $this;
    }

    /**
     * Get opportunityId
     *
     * @return string
     */
    public function getOpportunityId()
    {
        return $this->opportunityId;
    }

    /**
     * Set templateDdownC
     *
     * @param string $templateDdownC
     *
     * @return AosQuotes
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
     * Set totalAmt
     *
     * @param string $totalAmt
     *
     * @return AosQuotes
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
     * @return AosQuotes
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
     * @return AosQuotes
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
     * @return AosQuotes
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
     * @return AosQuotes
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
     * @return AosQuotes
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
     * @return AosQuotes
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
     * @return AosQuotes
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
     * @return AosQuotes
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
     * @return AosQuotes
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
     * @return AosQuotes
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
     * @return AosQuotes
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
     * @return AosQuotes
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
     * @return AosQuotes
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
     * @return AosQuotes
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
     * @return AosQuotes
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
     * Set stage
     *
     * @param string $stage
     *
     * @return AosQuotes
     */
    public function setStage($stage)
    {
        $this->stage = $stage;

        return $this;
    }

    /**
     * Get stage
     *
     * @return string
     */
    public function getStage()
    {
        return $this->stage;
    }

    /**
     * Set term
     *
     * @param string $term
     *
     * @return AosQuotes
     */
    public function setTerm($term)
    {
        $this->term = $term;

        return $this;
    }

    /**
     * Get term
     *
     * @return string
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * Set termsC
     *
     * @param string $termsC
     *
     * @return AosQuotes
     */
    public function setTermsC($termsC)
    {
        $this->termsC = $termsC;

        return $this;
    }

    /**
     * Get termsC
     *
     * @return string
     */
    public function getTermsC()
    {
        return $this->termsC;
    }

    /**
     * Set approvalStatus
     *
     * @param string $approvalStatus
     *
     * @return AosQuotes
     */
    public function setApprovalStatus($approvalStatus)
    {
        $this->approvalStatus = $approvalStatus;

        return $this;
    }

    /**
     * Get approvalStatus
     *
     * @return string
     */
    public function getApprovalStatus()
    {
        return $this->approvalStatus;
    }

    /**
     * Set invoiceStatus
     *
     * @param string $invoiceStatus
     *
     * @return AosQuotes
     */
    public function setInvoiceStatus($invoiceStatus)
    {
        $this->invoiceStatus = $invoiceStatus;

        return $this;
    }

    /**
     * Get invoiceStatus
     *
     * @return string
     */
    public function getInvoiceStatus()
    {
        return $this->invoiceStatus;
    }

    /**
     * Set subtotalTaxAmount
     *
     * @param string $subtotalTaxAmount
     *
     * @return AosQuotes
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
     * @return AosQuotes
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

