<?php

namespace Entities;

/**
 * ProspectListsCstm
 */
class ProspectListsCstm
{
    /**
     * @var string
     */
    private $idC;

    /**
     * @var boolean
     */
    private $autofillC = '0';

    /**
     * @var boolean
     */
    private $autocleanC = '0';

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
     * Set autofillC
     *
     * @param boolean $autofillC
     *
     * @return ProspectListsCstm
     */
    public function setAutofillC($autofillC)
    {
        $this->autofillC = $autofillC;

        return $this;
    }

    /**
     * Get autofillC
     *
     * @return boolean
     */
    public function getAutofillC()
    {
        return $this->autofillC;
    }

    /**
     * Set autocleanC
     *
     * @param boolean $autocleanC
     *
     * @return ProspectListsCstm
     */
    public function setAutocleanC($autocleanC)
    {
        $this->autocleanC = $autocleanC;

        return $this;
    }

    /**
     * Get autocleanC
     *
     * @return boolean
     */
    public function getAutocleanC()
    {
        return $this->autocleanC;
    }

    /**
     * Set lxcodeC
     *
     * @param integer $lxcodeC
     *
     * @return ProspectListsCstm
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

