<?php

namespace Entities;

/**
 * FoldersRel
 */
class FoldersRel
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $folderId;

    /**
     * @var string
     */
    private $polymorphicModule;

    /**
     * @var string
     */
    private $polymorphicId;

    /**
     * @var boolean
     */
    private $deleted = '0';


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
     * Set folderId
     *
     * @param string $folderId
     *
     * @return FoldersRel
     */
    public function setFolderId($folderId)
    {
        $this->folderId = $folderId;

        return $this;
    }

    /**
     * Get folderId
     *
     * @return string
     */
    public function getFolderId()
    {
        return $this->folderId;
    }

    /**
     * Set polymorphicModule
     *
     * @param string $polymorphicModule
     *
     * @return FoldersRel
     */
    public function setPolymorphicModule($polymorphicModule)
    {
        $this->polymorphicModule = $polymorphicModule;

        return $this;
    }

    /**
     * Get polymorphicModule
     *
     * @return string
     */
    public function getPolymorphicModule()
    {
        return $this->polymorphicModule;
    }

    /**
     * Set polymorphicId
     *
     * @param string $polymorphicId
     *
     * @return FoldersRel
     */
    public function setPolymorphicId($polymorphicId)
    {
        $this->polymorphicId = $polymorphicId;

        return $this;
    }

    /**
     * Get polymorphicId
     *
     * @return string
     */
    public function getPolymorphicId()
    {
        return $this->polymorphicId;
    }

    /**
     * Set deleted
     *
     * @param boolean $deleted
     *
     * @return FoldersRel
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
}

