<?php

namespace Entities;

/**
 * AosQuotesCstm
 */
class AosQuotesCstm
{
    /**
     * @var string
     */
    private $idC;

    /**
     * @var string
     */
    private $tipoentregaC = 'Directo';

    /**
     * @var string
     */
    private $direccionentregaC;

    /**
     * @var string
     */
    private $rutaC;

    /**
     * @var integer
     */
    private $secuenciaC;


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
     * Set tipoentregaC
     *
     * @param string $tipoentregaC
     *
     * @return AosQuotesCstm
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
     * Set direccionentregaC
     *
     * @param string $direccionentregaC
     *
     * @return AosQuotesCstm
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
     * Set rutaC
     *
     * @param string $rutaC
     *
     * @return AosQuotesCstm
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
     * @return AosQuotesCstm
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
}

