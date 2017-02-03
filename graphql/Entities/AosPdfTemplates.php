<?php

namespace Entities;

/**
 * AosPdfTemplates
 */
class AosPdfTemplates
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
     * @var boolean
     */
    private $active = '1';

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $pdfheader;

    /**
     * @var string
     */
    private $pdffooter;

    /**
     * @var integer
     */
    private $marginLeft = '15';

    /**
     * @var integer
     */
    private $marginRight = '15';

    /**
     * @var integer
     */
    private $marginTop = '16';

    /**
     * @var integer
     */
    private $marginBottom = '16';

    /**
     * @var integer
     */
    private $marginHeader = '9';

    /**
     * @var integer
     */
    private $marginFooter = '9';


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
     * @return AosPdfTemplates
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
     * @return AosPdfTemplates
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
     * @return AosPdfTemplates
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
     * @return AosPdfTemplates
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
     * @return AosPdfTemplates
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
     * @return AosPdfTemplates
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
     * @return AosPdfTemplates
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
     * @return AosPdfTemplates
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
     * Set active
     *
     * @param boolean $active
     *
     * @return AosPdfTemplates
     */
    public function setActive($active)
    {
        $this->active = $active;

        return $this;
    }

    /**
     * Get active
     *
     * @return boolean
     */
    public function getActive()
    {
        return $this->active;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return AosPdfTemplates
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
     * Set pdfheader
     *
     * @param string $pdfheader
     *
     * @return AosPdfTemplates
     */
    public function setPdfheader($pdfheader)
    {
        $this->pdfheader = $pdfheader;

        return $this;
    }

    /**
     * Get pdfheader
     *
     * @return string
     */
    public function getPdfheader()
    {
        return $this->pdfheader;
    }

    /**
     * Set pdffooter
     *
     * @param string $pdffooter
     *
     * @return AosPdfTemplates
     */
    public function setPdffooter($pdffooter)
    {
        $this->pdffooter = $pdffooter;

        return $this;
    }

    /**
     * Get pdffooter
     *
     * @return string
     */
    public function getPdffooter()
    {
        return $this->pdffooter;
    }

    /**
     * Set marginLeft
     *
     * @param integer $marginLeft
     *
     * @return AosPdfTemplates
     */
    public function setMarginLeft($marginLeft)
    {
        $this->marginLeft = $marginLeft;

        return $this;
    }

    /**
     * Get marginLeft
     *
     * @return integer
     */
    public function getMarginLeft()
    {
        return $this->marginLeft;
    }

    /**
     * Set marginRight
     *
     * @param integer $marginRight
     *
     * @return AosPdfTemplates
     */
    public function setMarginRight($marginRight)
    {
        $this->marginRight = $marginRight;

        return $this;
    }

    /**
     * Get marginRight
     *
     * @return integer
     */
    public function getMarginRight()
    {
        return $this->marginRight;
    }

    /**
     * Set marginTop
     *
     * @param integer $marginTop
     *
     * @return AosPdfTemplates
     */
    public function setMarginTop($marginTop)
    {
        $this->marginTop = $marginTop;

        return $this;
    }

    /**
     * Get marginTop
     *
     * @return integer
     */
    public function getMarginTop()
    {
        return $this->marginTop;
    }

    /**
     * Set marginBottom
     *
     * @param integer $marginBottom
     *
     * @return AosPdfTemplates
     */
    public function setMarginBottom($marginBottom)
    {
        $this->marginBottom = $marginBottom;

        return $this;
    }

    /**
     * Get marginBottom
     *
     * @return integer
     */
    public function getMarginBottom()
    {
        return $this->marginBottom;
    }

    /**
     * Set marginHeader
     *
     * @param integer $marginHeader
     *
     * @return AosPdfTemplates
     */
    public function setMarginHeader($marginHeader)
    {
        $this->marginHeader = $marginHeader;

        return $this;
    }

    /**
     * Get marginHeader
     *
     * @return integer
     */
    public function getMarginHeader()
    {
        return $this->marginHeader;
    }

    /**
     * Set marginFooter
     *
     * @param integer $marginFooter
     *
     * @return AosPdfTemplates
     */
    public function setMarginFooter($marginFooter)
    {
        $this->marginFooter = $marginFooter;

        return $this;
    }

    /**
     * Get marginFooter
     *
     * @return integer
     */
    public function getMarginFooter()
    {
        return $this->marginFooter;
    }
}

