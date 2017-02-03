<?php

namespace Entities;

/**
 * Lxcity
 */
class Lxcity
{
    /**
     * @var string
     */
    private $iso2 = '';

    /**
     * @var string
     */
    private $idstate;

    /**
     * @var string
     */
    private $idcity;

    /**
     * @var string
     */
    private $name;


    /**
     * Set iso2
     *
     * @param string $iso2
     *
     * @return Lxcity
     */
    public function setIso2($iso2)
    {
        $this->iso2 = $iso2;

        return $this;
    }

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
     * Set idstate
     *
     * @param string $idstate
     *
     * @return Lxcity
     */
    public function setIdstate($idstate)
    {
        $this->idstate = $idstate;

        return $this;
    }

    /**
     * Get idstate
     *
     * @return string
     */
    public function getIdstate()
    {
        return $this->idstate;
    }

    /**
     * Set idcity
     *
     * @param string $idcity
     *
     * @return Lxcity
     */
    public function setIdcity($idcity)
    {
        $this->idcity = $idcity;

        return $this;
    }

    /**
     * Get idcity
     *
     * @return string
     */
    public function getIdcity()
    {
        return $this->idcity;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Lxcity
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
}

