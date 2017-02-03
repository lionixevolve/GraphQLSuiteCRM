<?php

namespace Entities;

/**
 * CampaignsCstm
 */
class CampaignsCstm
{
    /**
     * @var string
     */
    private $idC;

    /**
     * @var boolean
     */
    private $emailmanerC = '0';

    /**
     * @var boolean
     */
    private $clearcamplogdailyC = '0';

    /**
     * @var integer
     */
    private $lxcodeC;


    /**
     * Get idC
     *
     * @return string
     */
    public function getIdC()
    {
        return $this->idC;
    }

    /**
     * Set emailmanerC
     *
     * @param boolean $emailmanerC
     *
     * @return CampaignsCstm
     */
    public function setEmailmanerC($emailmanerC)
    {
        $this->emailmanerC = $emailmanerC;

        return $this;
    }

    /**
     * Get emailmanerC
     *
     * @return boolean
     */
    public function getEmailmanerC()
    {
        return $this->emailmanerC;
    }

    /**
     * Set clearcamplogdailyC
     *
     * @param boolean $clearcamplogdailyC
     *
     * @return CampaignsCstm
     */
    public function setClearcamplogdailyC($clearcamplogdailyC)
    {
        $this->clearcamplogdailyC = $clearcamplogdailyC;

        return $this;
    }

    /**
     * Get clearcamplogdailyC
     *
     * @return boolean
     */
    public function getClearcamplogdailyC()
    {
        return $this->clearcamplogdailyC;
    }

    /**
     * Set lxcodeC
     *
     * @param integer $lxcodeC
     *
     * @return CampaignsCstm
     */
    public function setLxcodeC($lxcodeC)
    {
        $this->lxcodeC = $lxcodeC;

        return $this;
    }

    /**
     * Get lxcodeC
     *
     * @return integer
     */
    public function getLxcodeC()
    {
        return $this->lxcodeC;
    }
}

