<?php

namespace Entities;

/**
 * AccountsCstm
 */
class AccountsCstm
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
     * @var string
     */
    private $exactuscodeC;

    /**
     * @var string
     */
    private $activoC;

    /**
     * @var string
     */
    private $contribuyenteC;

    /**
     * @var string
     */
    private $nombrecontactoC;

    /**
     * @var string
     */
    private $cargoC;

    /**
     * @var string
     */
    private $limitecreditoC;

    /**
     * @var string
     */
    private $diascreditoC;

    /**
     * @var string
     */
    private $descuentoC;

    /**
     * @var string
     */
    private $cobradorC;

    /**
     * @var string
     */
    private $exoneracionC;

    /**
     * @var string
     */
    private $tipocontratoC;

    /**
     * @var string
     */
    private $direccionC;

    /**
     * @var string
     */
    private $direccionembarque1C;

    /**
     * @var string
     */
    private $direccionembarque2C;

    /**
     * @var string
     */
    private $direccionembarque3C;

    /**
     * @var string
     */
    private $divisionC;

    /**
     * @var string
     */
    private $paisC;

    /**
     * @var string
     */
    private $zonaC;

    /**
     * @var string
     */
    private $ubicacionC;

    /**
     * @var string
     */
    private $skypeC;

    /**
     * @var string
     */
    private $migratedfromC;

    /**
     * @var string
     */
    private $aliasC;

    /**
     * @var string
     */
    private $saldoC;

    /**
     * @var string
     */
    private $saldolocalC;

    /**
     * @var string
     */
    private $saldodolarC;

    /**
     * @var \DateTime
     */
    private $fechaultmovC;

    /**
     * @var integer
     */
    private $condicionpagoC;

    /**
     * @var string
     */
    private $exentoimpuestosC;

    /**
     * @var integer
     */
    private $exencionimp1C;

    /**
     * @var string
     */
    private $claseabcC;

    /**
     * @var string
     */
    private $requireocC;

    /**
     * @var string
     */
    private $serviciosdelcontratistaC;

    /**
     * @var string
     */
    private $accountIdC;

    /**
     * @var \DateTime
     */
    private $lxafechaultimaventaC;

    /**
     * @var \DateTime
     */
    private $lxafechaultimocontactoC;

    /**
     * @var \DateTime
     */
    private $lxafechaultimacotizacionC;

    /**
     * @var string
     */
    private $lxabalancecxc30C;

    /**
     * @var string
     */
    private $lxabalancecxc60C;

    /**
     * @var string
     */
    private $lxabalancecxc90C;

    /**
     * @var string
     */
    private $lxa12mavgsalesC;

    /**
     * @var string
     */
    private $currencyId;

    /**
     * @var string
     */
    private $lxaqtyquotesvinvoiceslast12mC;

    /**
     * @var string
     */
    private $lxaamtquotesvinvoiceslast12mC;

    /**
     * @var string
     */
    private $vendedorvtigerC;

    /**
     * @var string
     */
    private $userIdC;

    /**
     * @var string
     */
    private $userId1C;

    /**
     * @var string
     */
    private $preferredcarrierC;

    /**
     * @var string
     */
    private $areainfluenciapaisC;

    /**
     * @var string
     */
    private $areainfluenciacantonC;

    /**
     * @var string
     */
    private $areainfluenciadistritoC;

    /**
     * @var string
     */
    private $areainfluenciaprovinciaC;

    /**
     * @var boolean
     */
    private $tecnicoamigodebeiruteC = '0';

    /**
     * @var string
     */
    private $lxoldphonesC;

    /**
     * @var string
     */
    private $categoriaclientevtigerC;

    /**
     * @var string
     */
    private $categoriaclienteC;

    /**
     * @var string
     */
    private $tipoentregaC = 'Directa';

    /**
     * @var string
     */
    private $zonainfluenciatecnicoC;

    /**
     * @var string
     */
    private $areainfluenciatecnicoC;

    /**
     * @var boolean
     */
    private $tecnicospropiosC = '0';

    /**
     * @var string
     */
    private $direccionentregaC;

    /**
     * @var string
     */
    private $rutavtigerC;

    /**
     * @var string
     */
    private $rutaC;

    /**
     * @var integer
     */
    private $secuenciaC;

    /**
     * @var string
     */
    private $lxamontoultimaventaC;

    /**
     * @var string
     */
    private $contactIdC;


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
     * @return AccountsCstm
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
     * @return AccountsCstm
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
     * @return AccountsCstm
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
     * @return AccountsCstm
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
     * @return AccountsCstm
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
     * Set exactuscodeC
     *
     * @param string $exactuscodeC
     *
     * @return AccountsCstm
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
     * Set activoC
     *
     * @param string $activoC
     *
     * @return AccountsCstm
     */
    public function setActivoC($activoC)
    {
        $this->activoC = $activoC;

        return $this;
    }

    /**
     * Get activoC
     *
     * @return string
     */
    public function getActivoC()
    {
        return $this->activoC;
    }

    /**
     * Set contribuyenteC
     *
     * @param string $contribuyenteC
     *
     * @return AccountsCstm
     */
    public function setContribuyenteC($contribuyenteC)
    {
        $this->contribuyenteC = $contribuyenteC;

        return $this;
    }

    /**
     * Get contribuyenteC
     *
     * @return string
     */
    public function getContribuyenteC()
    {
        return $this->contribuyenteC;
    }

    /**
     * Set nombrecontactoC
     *
     * @param string $nombrecontactoC
     *
     * @return AccountsCstm
     */
    public function setNombrecontactoC($nombrecontactoC)
    {
        $this->nombrecontactoC = $nombrecontactoC;

        return $this;
    }

    /**
     * Get nombrecontactoC
     *
     * @return string
     */
    public function getNombrecontactoC()
    {
        return $this->nombrecontactoC;
    }

    /**
     * Set cargoC
     *
     * @param string $cargoC
     *
     * @return AccountsCstm
     */
    public function setCargoC($cargoC)
    {
        $this->cargoC = $cargoC;

        return $this;
    }

    /**
     * Get cargoC
     *
     * @return string
     */
    public function getCargoC()
    {
        return $this->cargoC;
    }

    /**
     * Set limitecreditoC
     *
     * @param string $limitecreditoC
     *
     * @return AccountsCstm
     */
    public function setLimitecreditoC($limitecreditoC)
    {
        $this->limitecreditoC = $limitecreditoC;

        return $this;
    }

    /**
     * Get limitecreditoC
     *
     * @return string
     */
    public function getLimitecreditoC()
    {
        return $this->limitecreditoC;
    }

    /**
     * Set diascreditoC
     *
     * @param string $diascreditoC
     *
     * @return AccountsCstm
     */
    public function setDiascreditoC($diascreditoC)
    {
        $this->diascreditoC = $diascreditoC;

        return $this;
    }

    /**
     * Get diascreditoC
     *
     * @return string
     */
    public function getDiascreditoC()
    {
        return $this->diascreditoC;
    }

    /**
     * Set descuentoC
     *
     * @param string $descuentoC
     *
     * @return AccountsCstm
     */
    public function setDescuentoC($descuentoC)
    {
        $this->descuentoC = $descuentoC;

        return $this;
    }

    /**
     * Get descuentoC
     *
     * @return string
     */
    public function getDescuentoC()
    {
        return $this->descuentoC;
    }

    /**
     * Set cobradorC
     *
     * @param string $cobradorC
     *
     * @return AccountsCstm
     */
    public function setCobradorC($cobradorC)
    {
        $this->cobradorC = $cobradorC;

        return $this;
    }

    /**
     * Get cobradorC
     *
     * @return string
     */
    public function getCobradorC()
    {
        return $this->cobradorC;
    }

    /**
     * Set exoneracionC
     *
     * @param string $exoneracionC
     *
     * @return AccountsCstm
     */
    public function setExoneracionC($exoneracionC)
    {
        $this->exoneracionC = $exoneracionC;

        return $this;
    }

    /**
     * Get exoneracionC
     *
     * @return string
     */
    public function getExoneracionC()
    {
        return $this->exoneracionC;
    }

    /**
     * Set tipocontratoC
     *
     * @param string $tipocontratoC
     *
     * @return AccountsCstm
     */
    public function setTipocontratoC($tipocontratoC)
    {
        $this->tipocontratoC = $tipocontratoC;

        return $this;
    }

    /**
     * Get tipocontratoC
     *
     * @return string
     */
    public function getTipocontratoC()
    {
        return $this->tipocontratoC;
    }

    /**
     * Set direccionC
     *
     * @param string $direccionC
     *
     * @return AccountsCstm
     */
    public function setDireccionC($direccionC)
    {
        $this->direccionC = $direccionC;

        return $this;
    }

    /**
     * Get direccionC
     *
     * @return string
     */
    public function getDireccionC()
    {
        return $this->direccionC;
    }

    /**
     * Set direccionembarque1C
     *
     * @param string $direccionembarque1C
     *
     * @return AccountsCstm
     */
    public function setDireccionembarque1C($direccionembarque1C)
    {
        $this->direccionembarque1C = $direccionembarque1C;

        return $this;
    }

    /**
     * Get direccionembarque1C
     *
     * @return string
     */
    public function getDireccionembarque1C()
    {
        return $this->direccionembarque1C;
    }

    /**
     * Set direccionembarque2C
     *
     * @param string $direccionembarque2C
     *
     * @return AccountsCstm
     */
    public function setDireccionembarque2C($direccionembarque2C)
    {
        $this->direccionembarque2C = $direccionembarque2C;

        return $this;
    }

    /**
     * Get direccionembarque2C
     *
     * @return string
     */
    public function getDireccionembarque2C()
    {
        return $this->direccionembarque2C;
    }

    /**
     * Set direccionembarque3C
     *
     * @param string $direccionembarque3C
     *
     * @return AccountsCstm
     */
    public function setDireccionembarque3C($direccionembarque3C)
    {
        $this->direccionembarque3C = $direccionembarque3C;

        return $this;
    }

    /**
     * Get direccionembarque3C
     *
     * @return string
     */
    public function getDireccionembarque3C()
    {
        return $this->direccionembarque3C;
    }

    /**
     * Set divisionC
     *
     * @param string $divisionC
     *
     * @return AccountsCstm
     */
    public function setDivisionC($divisionC)
    {
        $this->divisionC = $divisionC;

        return $this;
    }

    /**
     * Get divisionC
     *
     * @return string
     */
    public function getDivisionC()
    {
        return $this->divisionC;
    }

    /**
     * Set paisC
     *
     * @param string $paisC
     *
     * @return AccountsCstm
     */
    public function setPaisC($paisC)
    {
        $this->paisC = $paisC;

        return $this;
    }

    /**
     * Get paisC
     *
     * @return string
     */
    public function getPaisC()
    {
        return $this->paisC;
    }

    /**
     * Set zonaC
     *
     * @param string $zonaC
     *
     * @return AccountsCstm
     */
    public function setZonaC($zonaC)
    {
        $this->zonaC = $zonaC;

        return $this;
    }

    /**
     * Get zonaC
     *
     * @return string
     */
    public function getZonaC()
    {
        return $this->zonaC;
    }

    /**
     * Set ubicacionC
     *
     * @param string $ubicacionC
     *
     * @return AccountsCstm
     */
    public function setUbicacionC($ubicacionC)
    {
        $this->ubicacionC = $ubicacionC;

        return $this;
    }

    /**
     * Get ubicacionC
     *
     * @return string
     */
    public function getUbicacionC()
    {
        return $this->ubicacionC;
    }

    /**
     * Set skypeC
     *
     * @param string $skypeC
     *
     * @return AccountsCstm
     */
    public function setSkypeC($skypeC)
    {
        $this->skypeC = $skypeC;

        return $this;
    }

    /**
     * Get skypeC
     *
     * @return string
     */
    public function getSkypeC()
    {
        return $this->skypeC;
    }

    /**
     * Set migratedfromC
     *
     * @param string $migratedfromC
     *
     * @return AccountsCstm
     */
    public function setMigratedfromC($migratedfromC)
    {
        $this->migratedfromC = $migratedfromC;

        return $this;
    }

    /**
     * Get migratedfromC
     *
     * @return string
     */
    public function getMigratedfromC()
    {
        return $this->migratedfromC;
    }

    /**
     * Set aliasC
     *
     * @param string $aliasC
     *
     * @return AccountsCstm
     */
    public function setAliasC($aliasC)
    {
        $this->aliasC = $aliasC;

        return $this;
    }

    /**
     * Get aliasC
     *
     * @return string
     */
    public function getAliasC()
    {
        return $this->aliasC;
    }

    /**
     * Set saldoC
     *
     * @param string $saldoC
     *
     * @return AccountsCstm
     */
    public function setSaldoC($saldoC)
    {
        $this->saldoC = $saldoC;

        return $this;
    }

    /**
     * Get saldoC
     *
     * @return string
     */
    public function getSaldoC()
    {
        return $this->saldoC;
    }

    /**
     * Set saldolocalC
     *
     * @param string $saldolocalC
     *
     * @return AccountsCstm
     */
    public function setSaldolocalC($saldolocalC)
    {
        $this->saldolocalC = $saldolocalC;

        return $this;
    }

    /**
     * Get saldolocalC
     *
     * @return string
     */
    public function getSaldolocalC()
    {
        return $this->saldolocalC;
    }

    /**
     * Set saldodolarC
     *
     * @param string $saldodolarC
     *
     * @return AccountsCstm
     */
    public function setSaldodolarC($saldodolarC)
    {
        $this->saldodolarC = $saldodolarC;

        return $this;
    }

    /**
     * Get saldodolarC
     *
     * @return string
     */
    public function getSaldodolarC()
    {
        return $this->saldodolarC;
    }

    /**
     * Set fechaultmovC
     *
     * @param \DateTime $fechaultmovC
     *
     * @return AccountsCstm
     */
    public function setFechaultmovC($fechaultmovC)
    {
        $this->fechaultmovC = $fechaultmovC;

        return $this;
    }

    /**
     * Get fechaultmovC
     *
     * @return \DateTime
     */
    public function getFechaultmovC()
    {
        return $this->fechaultmovC;
    }

    /**
     * Set condicionpagoC
     *
     * @param integer $condicionpagoC
     *
     * @return AccountsCstm
     */
    public function setCondicionpagoC($condicionpagoC)
    {
        $this->condicionpagoC = $condicionpagoC;

        return $this;
    }

    /**
     * Get condicionpagoC
     *
     * @return integer
     */
    public function getCondicionpagoC()
    {
        return $this->condicionpagoC;
    }

    /**
     * Set exentoimpuestosC
     *
     * @param string $exentoimpuestosC
     *
     * @return AccountsCstm
     */
    public function setExentoimpuestosC($exentoimpuestosC)
    {
        $this->exentoimpuestosC = $exentoimpuestosC;

        return $this;
    }

    /**
     * Get exentoimpuestosC
     *
     * @return string
     */
    public function getExentoimpuestosC()
    {
        return $this->exentoimpuestosC;
    }

    /**
     * Set exencionimp1C
     *
     * @param integer $exencionimp1C
     *
     * @return AccountsCstm
     */
    public function setExencionimp1C($exencionimp1C)
    {
        $this->exencionimp1C = $exencionimp1C;

        return $this;
    }

    /**
     * Get exencionimp1C
     *
     * @return integer
     */
    public function getExencionimp1C()
    {
        return $this->exencionimp1C;
    }

    /**
     * Set claseabcC
     *
     * @param string $claseabcC
     *
     * @return AccountsCstm
     */
    public function setClaseabcC($claseabcC)
    {
        $this->claseabcC = $claseabcC;

        return $this;
    }

    /**
     * Get claseabcC
     *
     * @return string
     */
    public function getClaseabcC()
    {
        return $this->claseabcC;
    }

    /**
     * Set requireocC
     *
     * @param string $requireocC
     *
     * @return AccountsCstm
     */
    public function setRequireocC($requireocC)
    {
        $this->requireocC = $requireocC;

        return $this;
    }

    /**
     * Get requireocC
     *
     * @return string
     */
    public function getRequireocC()
    {
        return $this->requireocC;
    }

    /**
     * Set serviciosdelcontratistaC
     *
     * @param string $serviciosdelcontratistaC
     *
     * @return AccountsCstm
     */
    public function setServiciosdelcontratistaC($serviciosdelcontratistaC)
    {
        $this->serviciosdelcontratistaC = $serviciosdelcontratistaC;

        return $this;
    }

    /**
     * Get serviciosdelcontratistaC
     *
     * @return string
     */
    public function getServiciosdelcontratistaC()
    {
        return $this->serviciosdelcontratistaC;
    }

    /**
     * Set accountIdC
     *
     * @param string $accountIdC
     *
     * @return AccountsCstm
     */
    public function setAccountIdC($accountIdC)
    {
        $this->accountIdC = $accountIdC;

        return $this;
    }

    /**
     * Get accountIdC
     *
     * @return string
     */
    public function getAccountIdC()
    {
        return $this->accountIdC;
    }

    /**
     * Set lxafechaultimaventaC
     *
     * @param \DateTime $lxafechaultimaventaC
     *
     * @return AccountsCstm
     */
    public function setLxafechaultimaventaC($lxafechaultimaventaC)
    {
        $this->lxafechaultimaventaC = $lxafechaultimaventaC;

        return $this;
    }

    /**
     * Get lxafechaultimaventaC
     *
     * @return \DateTime
     */
    public function getLxafechaultimaventaC()
    {
        return $this->lxafechaultimaventaC;
    }

    /**
     * Set lxafechaultimocontactoC
     *
     * @param \DateTime $lxafechaultimocontactoC
     *
     * @return AccountsCstm
     */
    public function setLxafechaultimocontactoC($lxafechaultimocontactoC)
    {
        $this->lxafechaultimocontactoC = $lxafechaultimocontactoC;

        return $this;
    }

    /**
     * Get lxafechaultimocontactoC
     *
     * @return \DateTime
     */
    public function getLxafechaultimocontactoC()
    {
        return $this->lxafechaultimocontactoC;
    }

    /**
     * Set lxafechaultimacotizacionC
     *
     * @param \DateTime $lxafechaultimacotizacionC
     *
     * @return AccountsCstm
     */
    public function setLxafechaultimacotizacionC($lxafechaultimacotizacionC)
    {
        $this->lxafechaultimacotizacionC = $lxafechaultimacotizacionC;

        return $this;
    }

    /**
     * Get lxafechaultimacotizacionC
     *
     * @return \DateTime
     */
    public function getLxafechaultimacotizacionC()
    {
        return $this->lxafechaultimacotizacionC;
    }

    /**
     * Set lxabalancecxc30C
     *
     * @param string $lxabalancecxc30C
     *
     * @return AccountsCstm
     */
    public function setLxabalancecxc30C($lxabalancecxc30C)
    {
        $this->lxabalancecxc30C = $lxabalancecxc30C;

        return $this;
    }

    /**
     * Get lxabalancecxc30C
     *
     * @return string
     */
    public function getLxabalancecxc30C()
    {
        return $this->lxabalancecxc30C;
    }

    /**
     * Set lxabalancecxc60C
     *
     * @param string $lxabalancecxc60C
     *
     * @return AccountsCstm
     */
    public function setLxabalancecxc60C($lxabalancecxc60C)
    {
        $this->lxabalancecxc60C = $lxabalancecxc60C;

        return $this;
    }

    /**
     * Get lxabalancecxc60C
     *
     * @return string
     */
    public function getLxabalancecxc60C()
    {
        return $this->lxabalancecxc60C;
    }

    /**
     * Set lxabalancecxc90C
     *
     * @param string $lxabalancecxc90C
     *
     * @return AccountsCstm
     */
    public function setLxabalancecxc90C($lxabalancecxc90C)
    {
        $this->lxabalancecxc90C = $lxabalancecxc90C;

        return $this;
    }

    /**
     * Get lxabalancecxc90C
     *
     * @return string
     */
    public function getLxabalancecxc90C()
    {
        return $this->lxabalancecxc90C;
    }

    /**
     * Set lxa12mavgsalesC
     *
     * @param string $lxa12mavgsalesC
     *
     * @return AccountsCstm
     */
    public function setLxa12mavgsalesC($lxa12mavgsalesC)
    {
        $this->lxa12mavgsalesC = $lxa12mavgsalesC;

        return $this;
    }

    /**
     * Get lxa12mavgsalesC
     *
     * @return string
     */
    public function getLxa12mavgsalesC()
    {
        return $this->lxa12mavgsalesC;
    }

    /**
     * Set currencyId
     *
     * @param string $currencyId
     *
     * @return AccountsCstm
     */
    public function setCurrencyId($currencyId)
    {
        $this->currencyId = $currencyId;

        return $this;
    }

    /**
     * Get currencyId
     *
     * @return string
     */
    public function getCurrencyId()
    {
        return $this->currencyId;
    }

    /**
     * Set lxaqtyquotesvinvoiceslast12mC
     *
     * @param string $lxaqtyquotesvinvoiceslast12mC
     *
     * @return AccountsCstm
     */
    public function setLxaqtyquotesvinvoiceslast12mC($lxaqtyquotesvinvoiceslast12mC)
    {
        $this->lxaqtyquotesvinvoiceslast12mC = $lxaqtyquotesvinvoiceslast12mC;

        return $this;
    }

    /**
     * Get lxaqtyquotesvinvoiceslast12mC
     *
     * @return string
     */
    public function getLxaqtyquotesvinvoiceslast12mC()
    {
        return $this->lxaqtyquotesvinvoiceslast12mC;
    }

    /**
     * Set lxaamtquotesvinvoiceslast12mC
     *
     * @param string $lxaamtquotesvinvoiceslast12mC
     *
     * @return AccountsCstm
     */
    public function setLxaamtquotesvinvoiceslast12mC($lxaamtquotesvinvoiceslast12mC)
    {
        $this->lxaamtquotesvinvoiceslast12mC = $lxaamtquotesvinvoiceslast12mC;

        return $this;
    }

    /**
     * Get lxaamtquotesvinvoiceslast12mC
     *
     * @return string
     */
    public function getLxaamtquotesvinvoiceslast12mC()
    {
        return $this->lxaamtquotesvinvoiceslast12mC;
    }

    /**
     * Set vendedorvtigerC
     *
     * @param string $vendedorvtigerC
     *
     * @return AccountsCstm
     */
    public function setVendedorvtigerC($vendedorvtigerC)
    {
        $this->vendedorvtigerC = $vendedorvtigerC;

        return $this;
    }

    /**
     * Get vendedorvtigerC
     *
     * @return string
     */
    public function getVendedorvtigerC()
    {
        return $this->vendedorvtigerC;
    }

    /**
     * Set userIdC
     *
     * @param string $userIdC
     *
     * @return AccountsCstm
     */
    public function setUserIdC($userIdC)
    {
        $this->userIdC = $userIdC;

        return $this;
    }

    /**
     * Get userIdC
     *
     * @return string
     */
    public function getUserIdC()
    {
        return $this->userIdC;
    }

    /**
     * Set userId1C
     *
     * @param string $userId1C
     *
     * @return AccountsCstm
     */
    public function setUserId1C($userId1C)
    {
        $this->userId1C = $userId1C;

        return $this;
    }

    /**
     * Get userId1C
     *
     * @return string
     */
    public function getUserId1C()
    {
        return $this->userId1C;
    }

    /**
     * Set preferredcarrierC
     *
     * @param string $preferredcarrierC
     *
     * @return AccountsCstm
     */
    public function setPreferredcarrierC($preferredcarrierC)
    {
        $this->preferredcarrierC = $preferredcarrierC;

        return $this;
    }

    /**
     * Get preferredcarrierC
     *
     * @return string
     */
    public function getPreferredcarrierC()
    {
        return $this->preferredcarrierC;
    }

    /**
     * Set areainfluenciapaisC
     *
     * @param string $areainfluenciapaisC
     *
     * @return AccountsCstm
     */
    public function setAreainfluenciapaisC($areainfluenciapaisC)
    {
        $this->areainfluenciapaisC = $areainfluenciapaisC;

        return $this;
    }

    /**
     * Get areainfluenciapaisC
     *
     * @return string
     */
    public function getAreainfluenciapaisC()
    {
        return $this->areainfluenciapaisC;
    }

    /**
     * Set areainfluenciacantonC
     *
     * @param string $areainfluenciacantonC
     *
     * @return AccountsCstm
     */
    public function setAreainfluenciacantonC($areainfluenciacantonC)
    {
        $this->areainfluenciacantonC = $areainfluenciacantonC;

        return $this;
    }

    /**
     * Get areainfluenciacantonC
     *
     * @return string
     */
    public function getAreainfluenciacantonC()
    {
        return $this->areainfluenciacantonC;
    }

    /**
     * Set areainfluenciadistritoC
     *
     * @param string $areainfluenciadistritoC
     *
     * @return AccountsCstm
     */
    public function setAreainfluenciadistritoC($areainfluenciadistritoC)
    {
        $this->areainfluenciadistritoC = $areainfluenciadistritoC;

        return $this;
    }

    /**
     * Get areainfluenciadistritoC
     *
     * @return string
     */
    public function getAreainfluenciadistritoC()
    {
        return $this->areainfluenciadistritoC;
    }

    /**
     * Set areainfluenciaprovinciaC
     *
     * @param string $areainfluenciaprovinciaC
     *
     * @return AccountsCstm
     */
    public function setAreainfluenciaprovinciaC($areainfluenciaprovinciaC)
    {
        $this->areainfluenciaprovinciaC = $areainfluenciaprovinciaC;

        return $this;
    }

    /**
     * Get areainfluenciaprovinciaC
     *
     * @return string
     */
    public function getAreainfluenciaprovinciaC()
    {
        return $this->areainfluenciaprovinciaC;
    }

    /**
     * Set tecnicoamigodebeiruteC
     *
     * @param boolean $tecnicoamigodebeiruteC
     *
     * @return AccountsCstm
     */
    public function setTecnicoamigodebeiruteC($tecnicoamigodebeiruteC)
    {
        $this->tecnicoamigodebeiruteC = $tecnicoamigodebeiruteC;

        return $this;
    }

    /**
     * Get tecnicoamigodebeiruteC
     *
     * @return boolean
     */
    public function getTecnicoamigodebeiruteC()
    {
        return $this->tecnicoamigodebeiruteC;
    }

    /**
     * Set lxoldphonesC
     *
     * @param string $lxoldphonesC
     *
     * @return AccountsCstm
     */
    public function setLxoldphonesC($lxoldphonesC)
    {
        $this->lxoldphonesC = $lxoldphonesC;

        return $this;
    }

    /**
     * Get lxoldphonesC
     *
     * @return string
     */
    public function getLxoldphonesC()
    {
        return $this->lxoldphonesC;
    }

    /**
     * Set categoriaclientevtigerC
     *
     * @param string $categoriaclientevtigerC
     *
     * @return AccountsCstm
     */
    public function setCategoriaclientevtigerC($categoriaclientevtigerC)
    {
        $this->categoriaclientevtigerC = $categoriaclientevtigerC;

        return $this;
    }

    /**
     * Get categoriaclientevtigerC
     *
     * @return string
     */
    public function getCategoriaclientevtigerC()
    {
        return $this->categoriaclientevtigerC;
    }

    /**
     * Set categoriaclienteC
     *
     * @param string $categoriaclienteC
     *
     * @return AccountsCstm
     */
    public function setCategoriaclienteC($categoriaclienteC)
    {
        $this->categoriaclienteC = $categoriaclienteC;

        return $this;
    }

    /**
     * Get categoriaclienteC
     *
     * @return string
     */
    public function getCategoriaclienteC()
    {
        return $this->categoriaclienteC;
    }

    /**
     * Set tipoentregaC
     *
     * @param string $tipoentregaC
     *
     * @return AccountsCstm
     */
    public function setTipoentregaC($tipoentregaC)
    {
        $this->tipoentregaC = $tipoentregaC;

        return $this;
    }

    /**
     * Get tipoentregaC
     *
     * @return string
     */
    public function getTipoentregaC()
    {
        return $this->tipoentregaC;
    }

    /**
     * Set zonainfluenciatecnicoC
     *
     * @param string $zonainfluenciatecnicoC
     *
     * @return AccountsCstm
     */
    public function setZonainfluenciatecnicoC($zonainfluenciatecnicoC)
    {
        $this->zonainfluenciatecnicoC = $zonainfluenciatecnicoC;

        return $this;
    }

    /**
     * Get zonainfluenciatecnicoC
     *
     * @return string
     */
    public function getZonainfluenciatecnicoC()
    {
        return $this->zonainfluenciatecnicoC;
    }

    /**
     * Set areainfluenciatecnicoC
     *
     * @param string $areainfluenciatecnicoC
     *
     * @return AccountsCstm
     */
    public function setAreainfluenciatecnicoC($areainfluenciatecnicoC)
    {
        $this->areainfluenciatecnicoC = $areainfluenciatecnicoC;

        return $this;
    }

    /**
     * Get areainfluenciatecnicoC
     *
     * @return string
     */
    public function getAreainfluenciatecnicoC()
    {
        return $this->areainfluenciatecnicoC;
    }

    /**
     * Set tecnicospropiosC
     *
     * @param boolean $tecnicospropiosC
     *
     * @return AccountsCstm
     */
    public function setTecnicospropiosC($tecnicospropiosC)
    {
        $this->tecnicospropiosC = $tecnicospropiosC;

        return $this;
    }

    /**
     * Get tecnicospropiosC
     *
     * @return boolean
     */
    public function getTecnicospropiosC()
    {
        return $this->tecnicospropiosC;
    }

    /**
     * Set direccionentregaC
     *
     * @param string $direccionentregaC
     *
     * @return AccountsCstm
     */
    public function setDireccionentregaC($direccionentregaC)
    {
        $this->direccionentregaC = $direccionentregaC;

        return $this;
    }

    /**
     * Get direccionentregaC
     *
     * @return string
     */
    public function getDireccionentregaC()
    {
        return $this->direccionentregaC;
    }

    /**
     * Set rutavtigerC
     *
     * @param string $rutavtigerC
     *
     * @return AccountsCstm
     */
    public function setRutavtigerC($rutavtigerC)
    {
        $this->rutavtigerC = $rutavtigerC;

        return $this;
    }

    /**
     * Get rutavtigerC
     *
     * @return string
     */
    public function getRutavtigerC()
    {
        return $this->rutavtigerC;
    }

    /**
     * Set rutaC
     *
     * @param string $rutaC
     *
     * @return AccountsCstm
     */
    public function setRutaC($rutaC)
    {
        $this->rutaC = $rutaC;

        return $this;
    }

    /**
     * Get rutaC
     *
     * @return string
     */
    public function getRutaC()
    {
        return $this->rutaC;
    }

    /**
     * Set secuenciaC
     *
     * @param integer $secuenciaC
     *
     * @return AccountsCstm
     */
    public function setSecuenciaC($secuenciaC)
    {
        $this->secuenciaC = $secuenciaC;

        return $this;
    }

    /**
     * Get secuenciaC
     *
     * @return integer
     */
    public function getSecuenciaC()
    {
        return $this->secuenciaC;
    }

    /**
     * Set lxamontoultimaventaC
     *
     * @param string $lxamontoultimaventaC
     *
     * @return AccountsCstm
     */
    public function setLxamontoultimaventaC($lxamontoultimaventaC)
    {
        $this->lxamontoultimaventaC = $lxamontoultimaventaC;

        return $this;
    }

    /**
     * Get lxamontoultimaventaC
     *
     * @return string
     */
    public function getLxamontoultimaventaC()
    {
        return $this->lxamontoultimaventaC;
    }

    /**
     * Set contactIdC
     *
     * @param string $contactIdC
     *
     * @return AccountsCstm
     */
    public function setContactIdC($contactIdC)
    {
        $this->contactIdC = $contactIdC;

        return $this;
    }

    /**
     * Get contactIdC
     *
     * @return string
     */
    public function getContactIdC()
    {
        return $this->contactIdC;
    }
}

