<?php

namespace Entities;

/**
 * CasesCstm
 */
class CasesCstm
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
    private $elapsedtimeinminsC = '0';

    /**
     * @var integer
     */
    private $lxcodeC;

    /**
     * @var string
     */
    private $areaC;


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
     * @return CasesCstm
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
     * @return CasesCstm
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
     * @return CasesCstm
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
     * @return CasesCstm
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
     * Set elapsedtimeinminsC
     *
     * @param integer $elapsedtimeinminsC
     *
     * @return CasesCstm
     */
    public function setElapsedtimeinminsC($elapsedtimeinminsC)
    {
        $this->elapsedtimeinminsC = $elapsedtimeinminsC;

        return $this;
    }

    /**
     * Get elapsedtimeinminsC
     *
     * @return integer
     */
    public function getElapsedtimeinminsC()
    {
        return $this->elapsedtimeinminsC;
    }

    /**
     * Set lxcodeC
     *
     * @param integer $lxcodeC
     *
     * @return CasesCstm
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

    /**
     * Set areaC
     *
     * @param string $areaC
     *
     * @return CasesCstm
     */
    public function setAreaC($areaC)
    {
        $this->areaC = $areaC;

        return $this;
    }

    /**
     * Get areaC
     *
     * @return string
     */
    public function getAreaC()
    {
        return $this->areaC;
    }
}

