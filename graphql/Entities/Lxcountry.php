<?php

namespace Entities;

/**
 * Lxcountry
 */
class Lxcountry
{
    /**
     * @var string
     */
    private $iso2 = '';

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $iso3;

    /**
     * @var string
     */
    private $iana;

    /**
     * @var string
     */
    private $unvehicle;

    /**
     * @var string
     */
    private $ioc;

    /**
     * @var string
     */
    private $uniso;

    /**
     * @var integer
     */
    private $itu;


    /**
     * Get iso2
     *
     * @return string
     */
    public function getIso2()
    {
        return $this->iso2;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Lxcountry
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
     * Set iso3
     *
     * @param string $iso3
     *
     * @return Lxcountry
     */
    public function setIso3($iso3)
    {
        $this->iso3 = $iso3;

        return $this;
    }

    /**
     * Get iso3
     *
     * @return string
     */
    public function getIso3()
    {
        return $this->iso3;
    }

    /**
     * Set iana
     *
     * @param string $iana
     *
     * @return Lxcountry
     */
    public function setIana($iana)
    {
        $this->iana = $iana;

        return $this;
    }

    /**
     * Get iana
     *
     * @return string
     */
    public function getIana()
    {
        return $this->iana;
    }

    /**
     * Set unvehicle
     *
     * @param string $unvehicle
     *
     * @return Lxcountry
     */
    public function setUnvehicle($unvehicle)
    {
        $this->unvehicle = $unvehicle;

        return $this;
    }

    /**
     * Get unvehicle
     *
     * @return string
     */
    public function getUnvehicle()
    {
        return $this->unvehicle;
    }

    /**
     * Set ioc
     *
     * @param string $ioc
     *
     * @return Lxcountry
     */
    public function setIoc($ioc)
    {
        $this->ioc = $ioc;

        return $this;
    }

    /**
     * Get ioc
     *
     * @return string
     */
    public function getIoc()
    {
        return $this->ioc;
    }

    /**
     * Set uniso
     *
     * @param string $uniso
     *
     * @return Lxcountry
     */
    public function setUniso($uniso)
    {
        $this->uniso = $uniso;

        return $this;
    }

    /**
     * Get uniso
     *
     * @return string
     */
    public function getUniso()
    {
        return $this->uniso;
    }

    /**
     * Set itu
     *
     * @param integer $itu
     *
     * @return Lxcountry
     */
    public function setItu($itu)
    {
        $this->itu = $itu;

        return $this;
    }

    /**
     * Get itu
     *
     * @return integer
     */
    public function getItu()
    {
        return $this->itu;
    }
}

