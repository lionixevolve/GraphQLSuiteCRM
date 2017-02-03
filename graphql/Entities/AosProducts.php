<?php

namespace Entities;

/**
 * AosProducts
 */
class AosProducts
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
    private $maincode = 'XXXX';

    /**
     * @var string
     */
    private $partNumber;

    /**
     * @var string
     */
    private $category;

    /**
     * @var string
     */
    private $type = 'Good';

    /**
     * @var string
     */
    private $cost;

    /**
     * @var string
     */
    private $costUsdollar;

    /**
     * @var string
     */
    private $currencyId;

    /**
     * @var string
     */
    private $price;

    /**
     * @var string
     */
    private $priceUsdollar;

    /**
     * @var string
     */
    private $url;

    /**
     * @var string
     */
    private $contactId;

    /**
     * @var string
     */
    private $productImage;

    /**
     * @var string
     */
    private $aosProductCategoryId;


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
     * @return AosProducts
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
     * @return AosProducts
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
     * @return AosProducts
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
     * @return AosProducts
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
     * @return AosProducts
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
     * @return AosProducts
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
     * @return AosProducts
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
     * @return AosProducts
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
     * Set maincode
     *
     * @param string $maincode
     *
     * @return AosProducts
     */
    public function setMaincode($maincode)
    {
        $this->maincode = $maincode;

        return $this;
    }

    /**
     * Get maincode
     *
     * @return string
     */
    public function getMaincode()
    {
        return $this->maincode;
    }

    /**
     * Set partNumber
     *
     * @param string $partNumber
     *
     * @return AosProducts
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
     * Set category
     *
     * @param string $category
     *
     * @return AosProducts
     */
    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return AosProducts
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
     * Set cost
     *
     * @param string $cost
     *
     * @return AosProducts
     */
    public function setCost($cost)
    {
        $this->cost = $cost;

        return $this;
    }

    /**
     * Get cost
     *
     * @return string
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * Set costUsdollar
     *
     * @param string $costUsdollar
     *
     * @return AosProducts
     */
    public function setCostUsdollar($costUsdollar)
    {
        $this->costUsdollar = $costUsdollar;

        return $this;
    }

    /**
     * Get costUsdollar
     *
     * @return string
     */
    public function getCostUsdollar()
    {
        return $this->costUsdollar;
    }

    /**
     * Set currencyId
     *
     * @param string $currencyId
     *
     * @return AosProducts
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
     * Set price
     *
     * @param string $price
     *
     * @return AosProducts
     */
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

    /**
     * Get price
     *
     * @return string
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set priceUsdollar
     *
     * @param string $priceUsdollar
     *
     * @return AosProducts
     */
    public function setPriceUsdollar($priceUsdollar)
    {
        $this->priceUsdollar = $priceUsdollar;

        return $this;
    }

    /**
     * Get priceUsdollar
     *
     * @return string
     */
    public function getPriceUsdollar()
    {
        return $this->priceUsdollar;
    }

    /**
     * Set url
     *
     * @param string $url
     *
     * @return AosProducts
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set contactId
     *
     * @param string $contactId
     *
     * @return AosProducts
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
     * Set productImage
     *
     * @param string $productImage
     *
     * @return AosProducts
     */
    public function setProductImage($productImage)
    {
        $this->productImage = $productImage;

        return $this;
    }

    /**
     * Get productImage
     *
     * @return string
     */
    public function getProductImage()
    {
        return $this->productImage;
    }

    /**
     * Set aosProductCategoryId
     *
     * @param string $aosProductCategoryId
     *
     * @return AosProducts
     */
    public function setAosProductCategoryId($aosProductCategoryId)
    {
        $this->aosProductCategoryId = $aosProductCategoryId;

        return $this;
    }

    /**
     * Get aosProductCategoryId
     *
     * @return string
     */
    public function getAosProductCategoryId()
    {
        return $this->aosProductCategoryId;
    }
}

