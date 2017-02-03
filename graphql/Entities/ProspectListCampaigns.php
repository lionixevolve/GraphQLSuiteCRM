<?php

namespace Entities;

/**
 * ProspectListCampaigns
 */
class ProspectListCampaigns
{
    /**
     * @var string
     */
    private $id;

    /**
     * @var string
     */
    private $prospectListId;

    /**
     * @var string
     */
    private $campaignId;

    /**
     * @var \DateTime
     */
    private $dateModified;

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
     * Set prospectListId
     *
     * @param string $prospectListId
     *
     * @return ProspectListCampaigns
     */
    public function setProspectListId($prospectListId)
    {
        $this->prospectListId = $prospectListId;

        return $this;
    }

    /**
     * Get prospectListId
     *
     * @return string
     */
    public function getProspectListId()
    {
        return $this->prospectListId;
    }

    /**
     * Set campaignId
     *
     * @param string $campaignId
     *
     * @return ProspectListCampaigns
     */
    public function setCampaignId($campaignId)
    {
        $this->campaignId = $campaignId;

        return $this;
    }

    /**
     * Get campaignId
     *
     * @return string
     */
    public function getCampaignId()
    {
        return $this->campaignId;
    }

    /**
     * Set dateModified
     *
     * @param \DateTime $dateModified
     *
     * @return ProspectListCampaigns
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
     * @return ProspectListCampaigns
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

