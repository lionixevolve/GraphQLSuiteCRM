<?php

namespace Entities;

/**
 * Lxstate
 */
class Lxstate
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
    private $name;


    /**
     * Set iso2
     *
     * @param string $iso2
     *
     * @return Lxstate
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
     * @return Lxstate
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
     * Set name
     *
     * @param string $name
     *
     * @return Lxstate
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

