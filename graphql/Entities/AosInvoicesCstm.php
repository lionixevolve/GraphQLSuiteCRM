<?php

namespace Entities;

/**
 * AosInvoicesCstm
 */
class AosInvoicesCstm
{
    /**
     * @var string
     */
    private $idC;

    /**
     * @var boolean
     */
    private $syncwithcrmaosinvoicesC = '0';


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
     * Set syncwithcrmaosinvoicesC
     *
     * @param boolean $syncwithcrmaosinvoicesC
     *
     * @return AosInvoicesCstm
     */
    public function setSyncwithcrmaosinvoicesC($syncwithcrmaosinvoicesC)
    {
        $this->syncwithcrmaosinvoicesC = $syncwithcrmaosinvoicesC;

        return $this;
    }

    /**
     * Get syncwithcrmaosinvoicesC
     *
     * @return boolean
     */
    public function getSyncwithcrmaosinvoicesC()
    {
        return $this->syncwithcrmaosinvoicesC;
    }
}

