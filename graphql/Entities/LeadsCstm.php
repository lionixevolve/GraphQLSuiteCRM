<?php

namespace Entities;

/**
 * LeadsCstm
 */
class LeadsCstm
{
    /**
     * @var string
     */
    private $idC;

    /**
     * @var float
     */
    private $jjwgMapsLngC = '0.00000000';

    /**
     * @var float
     */
    private $jjwgMapsLatC = '0.00000000';

    /**
     * @var string
     */
    private $jjwgMapsGeocodeStatusC;

    /**
     * @var string
     */
    private $jjwgMapsAddressC;

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
     * Set jjwgMapsLngC
     *
     * @param float $jjwgMapsLngC
     *
     * @return LeadsCstm
     */
    public function setJjwgMapsLngC($jjwgMapsLngC)
    {
        $this->jjwgMapsLngC = $jjwgMapsLngC;

        return $this;
    }

    /**
     * Get jjwgMapsLngC
     *
     * @return float
     */
    public function getJjwgMapsLngC()
    {
        return $this->jjwgMapsLngC;
    }

    /**
     * Set jjwgMapsLatC
     *
     * @param float $jjwgMapsLatC
     *
     * @return LeadsCstm
     */
    public function setJjwgMapsLatC($jjwgMapsLatC)
    {
        $this->jjwgMapsLatC = $jjwgMapsLatC;

        return $this;
    }

    /**
     * Get jjwgMapsLatC
     *
     * @return float
     */
    public function getJjwgMapsLatC()
    {
        return $this->jjwgMapsLatC;
    }

    /**
     * Set jjwgMapsGeocodeStatusC
     *
     * @param string $jjwgMapsGeocodeStatusC
     *
     * @return LeadsCstm
     */
    public function setJjwgMapsGeocodeStatusC($jjwgMapsGeocodeStatusC)
    {
        $this->jjwgMapsGeocodeStatusC = $jjwgMapsGeocodeStatusC;

        return $this;
    }

    /**
     * Get jjwgMapsGeocodeStatusC
     *
     * @return string
     */
    public function getJjwgMapsGeocodeStatusC()
    {
        return $this->jjwgMapsGeocodeStatusC;
    }

    /**
     * Set jjwgMapsAddressC
     *
     * @param string $jjwgMapsAddressC
     *
     * @return LeadsCstm
     */
    public function setJjwgMapsAddressC($jjwgMapsAddressC)
    {
        $this->jjwgMapsAddressC = $jjwgMapsAddressC;

        return $this;
    }

    /**
     * Get jjwgMapsAddressC
     *
     * @return string
     */
    public function getJjwgMapsAddressC()
    {
        return $this->jjwgMapsAddressC;
    }

    /**
     * Set lxcodeC
     *
     * @param integer $lxcodeC
     *
     * @return LeadsCstm
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

