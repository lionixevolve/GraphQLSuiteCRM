<?php

namespace Entities;

/**
 * ContactsCstm
 */
class ContactsCstm
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
     * @var string
     */
    private $soundexC;

    /**
     * @var string
     */
    private $cedulaC;

    /**
     * @var integer
     */
    private $lxcodeC;

    /**
     * @var string
     */
    private $migratedfromC;

    /**
     * @var \DateTime
     */
    private $fechaingresoC;

    /**
     * @var string
     */
    private $puestoC;

    /**
     * @var string
     */
    private $paisC;

    /**
     * @var string
     */
    private $estadocivilC;

    /**
     * @var string
     */
    private $dependientesC;

    /**
     * @var string
     */
    private $horarioC;

    /**
     * @var string
     */
    private $numerodeempleadoC;

    /**
     * @var string
     */
    private $grupoC;

    /**
     * @var boolean
     */
    private $whatsappC = '0';

    /**
     * @var string
     */
    private $estadoC;

    /**
     * @var string
     */
    private $sexoC;

    /**
     * @var string
     */
    private $lxoldphonesC;

    /**
     * @var string
     */
    private $lastname2C;

    /**
     * @var boolean
     */
    private $tecnicoindependienteC = '0';

    /**
     * @var boolean
     */
    private $tecnicoenempresaC = '0';

    /**
     * @var string
     */
    private $areainfluenciaprovinciaC;

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
    private $zonaservicioC;

    /**
     * @var string
     */
    private $fullnameC;


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
     * @return ContactsCstm
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
     * @return ContactsCstm
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
     * @return ContactsCstm
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
     * @return ContactsCstm
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
     * Set soundexC
     *
     * @param string $soundexC
     *
     * @return ContactsCstm
     */
    public function setSoundexC($soundexC)
    {
        $this->soundexC = $soundexC;

        return $this;
    }

    /**
     * Get soundexC
     *
     * @return string
     */
    public function getSoundexC()
    {
        return $this->soundexC;
    }

    /**
     * Set cedulaC
     *
     * @param string $cedulaC
     *
     * @return ContactsCstm
     */
    public function setCedulaC($cedulaC)
    {
        $this->cedulaC = $cedulaC;

        return $this;
    }

    /**
     * Get cedulaC
     *
     * @return string
     */
    public function getCedulaC()
    {
        return $this->cedulaC;
    }

    /**
     * Set lxcodeC
     *
     * @param integer $lxcodeC
     *
     * @return ContactsCstm
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
     * Set migratedfromC
     *
     * @param string $migratedfromC
     *
     * @return ContactsCstm
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
     * Set fechaingresoC
     *
     * @param \DateTime $fechaingresoC
     *
     * @return ContactsCstm
     */
    public function setFechaingresoC($fechaingresoC)
    {
        $this->fechaingresoC = $fechaingresoC;

        return $this;
    }

    /**
     * Get fechaingresoC
     *
     * @return \DateTime
     */
    public function getFechaingresoC()
    {
        return $this->fechaingresoC;
    }

    /**
     * Set puestoC
     *
     * @param string $puestoC
     *
     * @return ContactsCstm
     */
    public function setPuestoC($puestoC)
    {
        $this->puestoC = $puestoC;

        return $this;
    }

    /**
     * Get puestoC
     *
     * @return string
     */
    public function getPuestoC()
    {
        return $this->puestoC;
    }

    /**
     * Set paisC
     *
     * @param string $paisC
     *
     * @return ContactsCstm
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
     * Set estadocivilC
     *
     * @param string $estadocivilC
     *
     * @return ContactsCstm
     */
    public function setEstadocivilC($estadocivilC)
    {
        $this->estadocivilC = $estadocivilC;

        return $this;
    }

    /**
     * Get estadocivilC
     *
     * @return string
     */
    public function getEstadocivilC()
    {
        return $this->estadocivilC;
    }

    /**
     * Set dependientesC
     *
     * @param string $dependientesC
     *
     * @return ContactsCstm
     */
    public function setDependientesC($dependientesC)
    {
        $this->dependientesC = $dependientesC;

        return $this;
    }

    /**
     * Get dependientesC
     *
     * @return string
     */
    public function getDependientesC()
    {
        return $this->dependientesC;
    }

    /**
     * Set horarioC
     *
     * @param string $horarioC
     *
     * @return ContactsCstm
     */
    public function setHorarioC($horarioC)
    {
        $this->horarioC = $horarioC;

        return $this;
    }

    /**
     * Get horarioC
     *
     * @return string
     */
    public function getHorarioC()
    {
        return $this->horarioC;
    }

    /**
     * Set numerodeempleadoC
     *
     * @param string $numerodeempleadoC
     *
     * @return ContactsCstm
     */
    public function setNumerodeempleadoC($numerodeempleadoC)
    {
        $this->numerodeempleadoC = $numerodeempleadoC;

        return $this;
    }

    /**
     * Get numerodeempleadoC
     *
     * @return string
     */
    public function getNumerodeempleadoC()
    {
        return $this->numerodeempleadoC;
    }

    /**
     * Set grupoC
     *
     * @param string $grupoC
     *
     * @return ContactsCstm
     */
    public function setGrupoC($grupoC)
    {
        $this->grupoC = $grupoC;

        return $this;
    }

    /**
     * Get grupoC
     *
     * @return string
     */
    public function getGrupoC()
    {
        return $this->grupoC;
    }

    /**
     * Set whatsappC
     *
     * @param boolean $whatsappC
     *
     * @return ContactsCstm
     */
    public function setWhatsappC($whatsappC)
    {
        $this->whatsappC = $whatsappC;

        return $this;
    }

    /**
     * Get whatsappC
     *
     * @return boolean
     */
    public function getWhatsappC()
    {
        return $this->whatsappC;
    }

    /**
     * Set estadoC
     *
     * @param string $estadoC
     *
     * @return ContactsCstm
     */
    public function setEstadoC($estadoC)
    {
        $this->estadoC = $estadoC;

        return $this;
    }

    /**
     * Get estadoC
     *
     * @return string
     */
    public function getEstadoC()
    {
        return $this->estadoC;
    }

    /**
     * Set sexoC
     *
     * @param string $sexoC
     *
     * @return ContactsCstm
     */
    public function setSexoC($sexoC)
    {
        $this->sexoC = $sexoC;

        return $this;
    }

    /**
     * Get sexoC
     *
     * @return string
     */
    public function getSexoC()
    {
        return $this->sexoC;
    }

    /**
     * Set lxoldphonesC
     *
     * @param string $lxoldphonesC
     *
     * @return ContactsCstm
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
     * Set lastname2C
     *
     * @param string $lastname2C
     *
     * @return ContactsCstm
     */
    public function setLastname2C($lastname2C)
    {
        $this->lastname2C = $lastname2C;

        return $this;
    }

    /**
     * Get lastname2C
     *
     * @return string
     */
    public function getLastname2C()
    {
        return $this->lastname2C;
    }

    /**
     * Set tecnicoindependienteC
     *
     * @param boolean $tecnicoindependienteC
     *
     * @return ContactsCstm
     */
    public function setTecnicoindependienteC($tecnicoindependienteC)
    {
        $this->tecnicoindependienteC = $tecnicoindependienteC;

        return $this;
    }

    /**
     * Get tecnicoindependienteC
     *
     * @return boolean
     */
    public function getTecnicoindependienteC()
    {
        return $this->tecnicoindependienteC;
    }

    /**
     * Set tecnicoenempresaC
     *
     * @param boolean $tecnicoenempresaC
     *
     * @return ContactsCstm
     */
    public function setTecnicoenempresaC($tecnicoenempresaC)
    {
        $this->tecnicoenempresaC = $tecnicoenempresaC;

        return $this;
    }

    /**
     * Get tecnicoenempresaC
     *
     * @return boolean
     */
    public function getTecnicoenempresaC()
    {
        return $this->tecnicoenempresaC;
    }

    /**
     * Set areainfluenciaprovinciaC
     *
     * @param string $areainfluenciaprovinciaC
     *
     * @return ContactsCstm
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
     * Set areainfluenciacantonC
     *
     * @param string $areainfluenciacantonC
     *
     * @return ContactsCstm
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
     * @return ContactsCstm
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
     * Set zonaservicioC
     *
     * @param string $zonaservicioC
     *
     * @return ContactsCstm
     */
    public function setZonaservicioC($zonaservicioC)
    {
        $this->zonaservicioC = $zonaservicioC;

        return $this;
    }

    /**
     * Get zonaservicioC
     *
     * @return string
     */
    public function getZonaservicioC()
    {
        return $this->zonaservicioC;
    }

    /**
     * Set fullnameC
     *
     * @param string $fullnameC
     *
     * @return ContactsCstm
     */
    public function setFullnameC($fullnameC)
    {
        $this->fullnameC = $fullnameC;

        return $this;
    }

    /**
     * Get fullnameC
     *
     * @return string
     */
    public function getFullnameC()
    {
        return $this->fullnameC;
    }
}

