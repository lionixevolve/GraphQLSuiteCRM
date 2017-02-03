<?php

namespace Entities;

/**
 * FieldsMetaData
 */
class FieldsMetaData
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
     * @var string
     */
    private $vname;

    /**
     * @var string
     */
    private $comments;

    /**
     * @var string
     */
    private $help;

    /**
     * @var string
     */
    private $customModule;

    /**
     * @var string
     */
    private $type;

    /**
     * @var integer
     */
    private $len;

    /**
     * @var boolean
     */
    private $required = '0';

    /**
     * @var string
     */
    private $defaultValue;

    /**
     * @var \DateTime
     */
    private $dateModified;

    /**
     * @var boolean
     */
    private $deleted = '0';

    /**
     * @var boolean
     */
    private $audited = '0';

    /**
     * @var boolean
     */
    private $massupdate = '0';

    /**
     * @var integer
     */
    private $duplicateMerge = '0';

    /**
     * @var boolean
     */
    private $reportable = '1';

    /**
     * @var string
     */
    private $importable;

    /**
     * @var string
     */
    private $ext1;

    /**
     * @var string
     */
    private $ext2;

    /**
     * @var string
     */
    private $ext3;

    /**
     * @var string
     */
    private $ext4;


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
     * @return FieldsMetaData
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
     * Set vname
     *
     * @param string $vname
     *
     * @return FieldsMetaData
     */
    public function setVname($vname)
    {
        $this->vname = $vname;

        return $this;
    }

    /**
     * Get vname
     *
     * @return string
     */
    public function getVname()
    {
        return $this->vname;
    }

    /**
     * Set comments
     *
     * @param string $comments
     *
     * @return FieldsMetaData
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Set help
     *
     * @param string $help
     *
     * @return FieldsMetaData
     */
    public function setHelp($help)
    {
        $this->help = $help;

        return $this;
    }

    /**
     * Get help
     *
     * @return string
     */
    public function getHelp()
    {
        return $this->help;
    }

    /**
     * Set customModule
     *
     * @param string $customModule
     *
     * @return FieldsMetaData
     */
    public function setCustomModule($customModule)
    {
        $this->customModule = $customModule;

        return $this;
    }

    /**
     * Get customModule
     *
     * @return string
     */
    public function getCustomModule()
    {
        return $this->customModule;
    }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return FieldsMetaData
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
     * Set len
     *
     * @param integer $len
     *
     * @return FieldsMetaData
     */
    public function setLen($len)
    {
        $this->len = $len;

        return $this;
    }

    /**
     * Get len
     *
     * @return integer
     */
    public function getLen()
    {
        return $this->len;
    }

    /**
     * Set required
     *
     * @param boolean $required
     *
     * @return FieldsMetaData
     */
    public function setRequired($required)
    {
        $this->required = $required;

        return $this;
    }

    /**
     * Get required
     *
     * @return boolean
     */
    public function getRequired()
    {
        return $this->required;
    }

    /**
     * Set defaultValue
     *
     * @param string $defaultValue
     *
     * @return FieldsMetaData
     */
    public function setDefaultValue($defaultValue)
    {
        $this->defaultValue = $defaultValue;

        return $this;
    }

    /**
     * Get defaultValue
     *
     * @return string
     */
    public function getDefaultValue()
    {
        return $this->defaultValue;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     *
     * @return FieldsMetaData
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
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return FieldsMetaData
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
     * Set audited
     *
     * @param boolean $audited
     *
     * @return FieldsMetaData
     */
    public function setAudited($audited)
    {
        $this->audited = $audited;

        return $this;
    }

    /**
     * Get audited
     *
     * @return boolean
     */
    public function getAudited()
    {
        return $this->audited;
    }

    /**
     * Set massupdate
     *
     * @param boolean $massupdate
     *
     * @return FieldsMetaData
     */
    public function setMassupdate($massupdate)
    {
        $this->massupdate = $massupdate;

        return $this;
    }

    /**
     * Get massupdate
     *
     * @return boolean
     */
    public function getMassupdate()
    {
        return $this->massupdate;
    }

    /**
     * Set duplicateMerge
     *
     * @param integer $duplicateMerge
     *
     * @return FieldsMetaData
     */
    public function setDuplicateMerge($duplicateMerge)
    {
        $this->duplicateMerge = $duplicateMerge;

        return $this;
    }

    /**
     * Get duplicateMerge
     *
     * @return integer
     */
    public function getDuplicateMerge()
    {
        return $this->duplicateMerge;
    }

    /**
     * Set reportable
     *
     * @param boolean $reportable
     *
     * @return FieldsMetaData
     */
    public function setReportable($reportable)
    {
        $this->reportable = $reportable;

        return $this;
    }

    /**
     * Get reportable
     *
     * @return boolean
     */
    public function getReportable()
    {
        return $this->reportable;
    }

    /**
     * Set importable
     *
     * @param string $importable
     *
     * @return FieldsMetaData
     */
    public function setImportable($importable)
    {
        $this->importable = $importable;

        return $this;
    }

    /**
     * Get importable
     *
     * @return string
     */
    public function getImportable()
    {
        return $this->importable;
    }

    /**
     * Set ext1
     *
     * @param string $ext1
     *
     * @return FieldsMetaData
     */
    public function setExt1($ext1)
    {
        $this->ext1 = $ext1;

        return $this;
    }

    /**
     * Get ext1
     *
     * @return string
     */
    public function getExt1()
    {
        return $this->ext1;
    }

    /**
     * Set ext2
     *
     * @param string $ext2
     *
     * @return FieldsMetaData
     */
    public function setExt2($ext2)
    {
        $this->ext2 = $ext2;

        return $this;
    }

    /**
     * Get ext2
     *
     * @return string
     */
    public function getExt2()
    {
        return $this->ext2;
    }

    /**
     * Set ext3
     *
     * @param string $ext3
     *
     * @return FieldsMetaData
     */
    public function setExt3($ext3)
    {
        $this->ext3 = $ext3;

        return $this;
    }

    /**
     * Get ext3
     *
     * @return string
     */
    public function getExt3()
    {
        return $this->ext3;
    }

    /**
     * Set ext4
     *
     * @param string $ext4
     *
     * @return FieldsMetaData
     */
    public function setExt4($ext4)
    {
        $this->ext4 = $ext4;

        return $this;
    }

    /**
     * Get ext4
     *
     * @return string
     */
    public function getExt4()
    {
        return $this->ext4;
    }
}

