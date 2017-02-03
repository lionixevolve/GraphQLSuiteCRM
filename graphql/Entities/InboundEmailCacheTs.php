<?php

namespace Entities;

/**
 * InboundEmailCacheTs
 */
class InboundEmailCacheTs
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var integer
     */
    private $ieTimestamp;


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
     * Set ieTimestamp
     *
     * @param integer $ieTimestamp
     *
     * @return InboundEmailCacheTs
     */
    public function setIeTimestamp($ieTimestamp)
    {
        $this->ieTimestamp = $ieTimestamp;

        return $this;
    }

    /**
     * Get ieTimestamp
     *
     * @return integer
     */
    public function getIeTimestamp()
    {
        return $this->ieTimestamp;
    }
}

