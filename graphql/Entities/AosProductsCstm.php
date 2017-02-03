<?php

namespace Entities;

/**
 * AosProductsCstm
 */
class AosProductsCstm
{
    /**
     * @var string
     */
    private $idC;

    /**
     * @var \DateTime
     */
    private $lastsoldunitdateC;

    /**
     * @var integer
     */
    private $productstockforsaleqtyC = '-1';

    /**
     * @var integer
     */
    private $productstockqtyC = '-1';

    /**
     * @var integer
     */
    private $productstockreservedqtyC = '-1';

    /**
     * @var string
     */
    private $warehouseC;

    /**
     * @var string
     */
    private $exactuscodeC;

    /**
     * @var string
     */
    private $clasificaciontextC;

    /**
     * @var string
     */
    private $categoryadiC;

    /**
     * @var string
     */
    private $clasificacionaditextC;

    /**
     * @var string
     */
    private $namefreetextC;

    /**
     * @var string
     */
    private $pkexactusarticuloC;

    /**
     * @var string
     */
    private $pkexactusbodegaC;

    /**
     * @var string
     */
    private $pkexactusnivelprecioC;

    /**
     * @var string
     */
    private $pkexactusmonedaC;

    /**
     * @var string
     */
    private $pkexactusversionC;

    /**
     * @var string
     */
    private $pkexactusversionarticuloC;

    /**
     * @var string
     */
    private $namesearchC;

    /**
     * @var string
     */
    private $exactusarticuloprecioC;

    /**
     * @var boolean
     */
    private $syncwithcrmaosproductsC = '0';


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
     * Set lastsoldunitdateC
     *
     * @param \DateTime $lastsoldunitdateC
     *
     * @return AosProductsCstm
     */
    public function setLastsoldunitdateC($lastsoldunitdateC)
    {
        $this->lastsoldunitdateC = $lastsoldunitdateC;

        return $this;
    }

    /**
     * Get lastsoldunitdateC
     *
     * @return \DateTime
     */
    public function getLastsoldunitdateC()
    {
        return $this->lastsoldunitdateC;
    }

    /**
     * Set productstockforsaleqtyC
     *
     * @param integer $productstockforsaleqtyC
     *
     * @return AosProductsCstm
     */
    public function setProductstockforsaleqtyC($productstockforsaleqtyC)
    {
        $this->productstockforsaleqtyC = $productstockforsaleqtyC;

        return $this;
    }

    /**
     * Get productstockforsaleqtyC
     *
     * @return integer
     */
    public function getProductstockforsaleqtyC()
    {
        return $this->productstockforsaleqtyC;
    }

    /**
     * Set productstockqtyC
     *
     * @param integer $productstockqtyC
     *
     * @return AosProductsCstm
     */
    public function setProductstockqtyC($productstockqtyC)
    {
        $this->productstockqtyC = $productstockqtyC;

        return $this;
    }

    /**
     * Get productstockqtyC
     *
     * @return integer
     */
    public function getProductstockqtyC()
    {
        return $this->productstockqtyC;
    }

    /**
     * Set productstockreservedqtyC
     *
     * @param integer $productstockreservedqtyC
     *
     * @return AosProductsCstm
     */
    public function setProductstockreservedqtyC($productstockreservedqtyC)
    {
        $this->productstockreservedqtyC = $productstockreservedqtyC;

        return $this;
    }

    /**
     * Get productstockreservedqtyC
     *
     * @return integer
     */
    public function getProductstockreservedqtyC()
    {
        return $this->productstockreservedqtyC;
    }

    /**
     * Set warehouseC
     *
     * @param string $warehouseC
     *
     * @return AosProductsCstm
     */
    public function setWarehouseC($warehouseC)
    {
        $this->warehouseC = $warehouseC;

        return $this;
    }

    /**
     * Get warehouseC
     *
     * @return string
     */
    public function getWarehouseC()
    {
        return $this->warehouseC;
    }

    /**
     * Set exactuscodeC
     *
     * @param string $exactuscodeC
     *
     * @return AosProductsCstm
     */
    public function setExactuscodeC($exactuscodeC)
    {
        $this->exactuscodeC = $exactuscodeC;

        return $this;
    }

    /**
     * Get exactuscodeC
     *
     * @return string
     */
    public function getExactuscodeC()
    {
        return $this->exactuscodeC;
    }

    /**
     * Set clasificaciontextC
     *
     * @param string $clasificaciontextC
     *
     * @return AosProductsCstm
     */
    public function setClasificaciontextC($clasificaciontextC)
    {
        $this->clasificaciontextC = $clasificaciontextC;

        return $this;
    }

    /**
     * Get clasificaciontextC
     *
     * @return string
     */
    public function getClasificaciontextC()
    {
        return $this->clasificaciontextC;
    }

    /**
     * Set categoryadiC
     *
     * @param string $categoryadiC
     *
     * @return AosProductsCstm
     */
    public function setCategoryadiC($categoryadiC)
    {
        $this->categoryadiC = $categoryadiC;

        return $this;
    }

    /**
     * Get categoryadiC
     *
     * @return string
     */
    public function getCategoryadiC()
    {
        return $this->categoryadiC;
    }

    /**
     * Set clasificacionaditextC
     *
     * @param string $clasificacionaditextC
     *
     * @return AosProductsCstm
     */
    public function setClasificacionaditextC($clasificacionaditextC)
    {
        $this->clasificacionaditextC = $clasificacionaditextC;

        return $this;
    }

    /**
     * Get clasificacionaditextC
     *
     * @return string
     */
    public function getClasificacionaditextC()
    {
        return $this->clasificacionaditextC;
    }

    /**
     * Set namefreetextC
     *
     * @param string $namefreetextC
     *
     * @return AosProductsCstm
     */
    public function setNamefreetextC($namefreetextC)
    {
        $this->namefreetextC = $namefreetextC;

        return $this;
    }

    /**
     * Get namefreetextC
     *
     * @return string
     */
    public function getNamefreetextC()
    {
        return $this->namefreetextC;
    }

    /**
     * Set pkexactusarticuloC
     *
     * @param string $pkexactusarticuloC
     *
     * @return AosProductsCstm
     */
    public function setPkexactusarticuloC($pkexactusarticuloC)
    {
        $this->pkexactusarticuloC = $pkexactusarticuloC;

        return $this;
    }

    /**
     * Get pkexactusarticuloC
     *
     * @return string
     */
    public function getPkexactusarticuloC()
    {
        return $this->pkexactusarticuloC;
    }

    /**
     * Set pkexactusbodegaC
     *
     * @param string $pkexactusbodegaC
     *
     * @return AosProductsCstm
     */
    public function setPkexactusbodegaC($pkexactusbodegaC)
    {
        $this->pkexactusbodegaC = $pkexactusbodegaC;

        return $this;
    }

    /**
     * Get pkexactusbodegaC
     *
     * @return string
     */
    public function getPkexactusbodegaC()
    {
        return $this->pkexactusbodegaC;
    }

    /**
     * Set pkexactusnivelprecioC
     *
     * @param string $pkexactusnivelprecioC
     *
     * @return AosProductsCstm
     */
    public function setPkexactusnivelprecioC($pkexactusnivelprecioC)
    {
        $this->pkexactusnivelprecioC = $pkexactusnivelprecioC;

        return $this;
    }

    /**
     * Get pkexactusnivelprecioC
     *
     * @return string
     */
    public function getPkexactusnivelprecioC()
    {
        return $this->pkexactusnivelprecioC;
    }

    /**
     * Set pkexactusmonedaC
     *
     * @param string $pkexactusmonedaC
     *
     * @return AosProductsCstm
     */
    public function setPkexactusmonedaC($pkexactusmonedaC)
    {
        $this->pkexactusmonedaC = $pkexactusmonedaC;

        return $this;
    }

    /**
     * Get pkexactusmonedaC
     *
     * @return string
     */
    public function getPkexactusmonedaC()
    {
        return $this->pkexactusmonedaC;
    }

    /**
     * Set pkexactusversionC
     *
     * @param string $pkexactusversionC
     *
     * @return AosProductsCstm
     */
    public function setPkexactusversionC($pkexactusversionC)
    {
        $this->pkexactusversionC = $pkexactusversionC;

        return $this;
    }

    /**
     * Get pkexactusversionC
     *
     * @return string
     */
    public function getPkexactusversionC()
    {
        return $this->pkexactusversionC;
    }

    /**
     * Set pkexactusversionarticuloC
     *
     * @param string $pkexactusversionarticuloC
     *
     * @return AosProductsCstm
     */
    public function setPkexactusversionarticuloC($pkexactusversionarticuloC)
    {
        $this->pkexactusversionarticuloC = $pkexactusversionarticuloC;

        return $this;
    }

    /**
     * Get pkexactusversionarticuloC
     *
     * @return string
     */
    public function getPkexactusversionarticuloC()
    {
        return $this->pkexactusversionarticuloC;
    }

    /**
     * Set namesearchC
     *
     * @param string $namesearchC
     *
     * @return AosProductsCstm
     */
    public function setNamesearchC($namesearchC)
    {
        $this->namesearchC = $namesearchC;

        return $this;
    }

    /**
     * Get namesearchC
     *
     * @return string
     */
    public function getNamesearchC()
    {
        return $this->namesearchC;
    }

    /**
     * Set exactusarticuloprecioC
     *
     * @param string $exactusarticuloprecioC
     *
     * @return AosProductsCstm
     */
    public function setExactusarticuloprecioC($exactusarticuloprecioC)
    {
        $this->exactusarticuloprecioC = $exactusarticuloprecioC;

        return $this;
    }

    /**
     * Get exactusarticuloprecioC
     *
     * @return string
     */
    public function getExactusarticuloprecioC()
    {
        return $this->exactusarticuloprecioC;
    }

    /**
     * Set syncwithcrmaosproductsC
     *
     * @param boolean $syncwithcrmaosproductsC
     *
     * @return AosProductsCstm
     */
    public function setSyncwithcrmaosproductsC($syncwithcrmaosproductsC)
    {
        $this->syncwithcrmaosproductsC = $syncwithcrmaosproductsC;

        return $this;
    }

    /**
     * Get syncwithcrmaosproductsC
     *
     * @return boolean
     */
    public function getSyncwithcrmaosproductsC()
    {
        return $this->syncwithcrmaosproductsC;
    }
}

