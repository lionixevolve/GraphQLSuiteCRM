<?php

namespace Entities;

/**
 * AosContracts
 */
class AosContracts
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
    private $referenceCode;

    /**
     * @var \DateTime
     */
    private $startDate;

    /**
     * @var \DateTime
     */
    private $endDate;

    /**
     * @var string
     */
    private $totalContractValue;

    /**
     * @var string
     */
    private $totalContractValueUsdollar;

    /**
     * @var string
     */
    private $currencyId;

    /**
     * @var string
     */
    private $status = 'Not Started';

    /**
     * @var \DateTime
     */
    private $customerSignedDate;

    /**
     * @var \DateTime
     */
    private $companySignedDate;

    /**
     * @var \DateTime
     */
    private $renewalReminderDate;

    /**
     * @var string
     */
    private $contractType = 'Type';

    /**
     * @var string
     */
    private $contractAccountId;

    /**
     * @var string
     */
    private $opportunityId;

    /**
     * @var string
     */
    private $contactId;

    /**
     * @var string
     */
    private $callId;

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
     * @return AosContracts
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
     * @return AosContracts
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
     * @return AosContracts
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
     * @return AosContracts
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
     * @return AosContracts
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
     * @return AosContracts
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
     * @return AosContracts
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
     * @return AosContracts
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
     * Set referenceCode
     *
     * @param string $referenceCode
     *
     * @return AosContracts
     */
    public function setReferenceCode($referenceCode)
    {
        $this->referenceCode = $referenceCode;

        return $this;
    }

    /**
     * Get referenceCode
     *
     * @return string
     */
    public function getReferenceCode()
    {
        return $this->referenceCode;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     *
     * @return AosContracts
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     *
     * @return AosContracts
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set totalContractValue
     *
     * @param string $totalContractValue
     *
     * @return AosContracts
     */
    public function setTotalContractValue($totalContractValue)
    {
        $this->totalContractValue = $totalContractValue;

        return $this;
    }

    /**
     * Get totalContractValue
     *
     * @return string
     */
    public function getTotalContractValue()
    {
        return $this->totalContractValue;
    }

    /**
     * Set totalContractValueUsdollar
     *
     * @param string $totalContractValueUsdollar
     *
     * @return AosContracts
     */
    public function setTotalContractValueUsdollar($totalContractValueUsdollar)
    {
        $this->totalContractValueUsdollar = $totalContractValueUsdollar;

        return $this;
    }

    /**
     * Get totalContractValueUsdollar
     *
     * @return string
     */
    public function getTotalContractValueUsdollar()
    {
        return $this->totalContractValueUsdollar;
    }

    /**
     * Set currencyId
     *
     * @param string $currencyId
     *
     * @return AosContracts
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
     * Set status
     *
     * @param string $status
     *
     * @return AosContracts
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
     * Set customerSignedDate
     *
     * @param \DateTime $customerSignedDate
     *
     * @return AosContracts
     */
    public function setCustomerSignedDate($customerSignedDate)
    {
        $this->customerSignedDate = $customerSignedDate;

        return $this;
    }

    /**
     * Get customerSignedDate
     *
     * @return \DateTime
     */
    public function getCustomerSignedDate()
    {
        return $this->customerSignedDate;
    }

    /**
     * Set companySignedDate
     *
     * @param \DateTime $companySignedDate
     *
     * @return AosContracts
     */
    public function setCompanySignedDate($companySignedDate)
    {
        $this->companySignedDate = $companySignedDate;

        return $this;
    }

    /**
     * Get companySignedDate
     *
     * @return \DateTime
     */
    public function getCompanySignedDate()
    {
        return $this->companySignedDate;
    }

    /**
     * Set renewalReminderDate
     *
     * @param \DateTime $renewalReminderDate
     *
     * @return AosContracts
     */
    public function setRenewalReminderDate($renewalReminderDate)
    {
        $this->renewalReminderDate = $renewalReminderDate;

        return $this;
    }

    /**
     * Get renewalReminderDate
     *
     * @return \DateTime
     */
    public function getRenewalReminderDate()
    {
        return $this->renewalReminderDate;
    }

    /**
     * Set contractType
     *
     * @param string $contractType
     *
     * @return AosContracts
     */
    public function setContractType($contractType)
    {
        $this->contractType = $contractType;

        return $this;
    }

    /**
     * Get contractType
     *
     * @return string
     */
    public function getContractType()
    {
        return $this->contractType;
    }

    /**
     * Set contractAccountId
     *
     * @param string $contractAccountId
     *
     * @return AosContracts
     */
    public function setContractAccountId($contractAccountId)
    {
        $this->contractAccountId = $contractAccountId;

        return $this;
    }

    /**
     * Get contractAccountId
     *
     * @return string
     */
    public function getContractAccountId()
    {
        return $this->contractAccountId;
    }

    /**
     * Set opportunityId
     *
     * @param string $opportunityId
     *
     * @return AosContracts
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
     * Set contactId
     *
     * @param string $contactId
     *
     * @return AosContracts
     */
    public function setContactId($contactId)
    {
        $this->contactId = $contactId;

        return $this;
    }

    /**
     * Get contactId
     *
     * @return string
     */
    public function getContactId()
    {
        return $this->contactId;
    }

    /**
     * Set callId
     *
     * @param string $callId
     *
     * @return AosContracts
     */
    public function setCallId($callId)
    {
        $this->callId = $callId;

        return $this;
    }

    /**
     * Get callId
     *
     * @return string
     */
    public function getCallId()
    {
        return $this->callId;
    }

    /**
     * Set totalAmt
     *
     * @param string $totalAmt
     *
     * @return AosContracts
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
     * @return AosContracts
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
     * @return AosContracts
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
     * @return AosContracts
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
     * @return AosContracts
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
     * @return AosContracts
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
     * @return AosContracts
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
     * @return AosContracts
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
     * @return AosContracts
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
     * @return AosContracts
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
     * @return AosContracts
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
     * @return AosContracts
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
     * @return AosContracts
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
     * @return AosContracts
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
     * @return AosContracts
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
}

