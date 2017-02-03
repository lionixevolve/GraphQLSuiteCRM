<?php

namespace Entities;

/**
 * FoldersSubscriptions
 */
class FoldersSubscriptions
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
    private $assignedUserId;


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
     * @return FoldersSubscriptions
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
     * Set assignedUserId
     *
     * @param string $assignedUserId
     *
     * @return FoldersSubscriptions
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
}

