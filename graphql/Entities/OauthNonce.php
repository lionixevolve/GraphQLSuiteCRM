<?php

namespace Entities;

/**
 * OauthNonce
 */
class OauthNonce
{
    /**
     * @var string
     */
    private $conskey;

    /**
     * @var string
     */
    private $nonce;

    /**
     * @var integer
     */
    private $nonceTs;


    /**
     * Set conskey
     *
     * @param string $conskey
     *
     * @return OauthNonce
     */
    public function setConskey($conskey)
    {
        $this->conskey = $conskey;

        return $this;
    }

    /**
     * Get conskey
     *
     * @return string
     */
    public function getConskey()
    {
        return $this->conskey;
    }

    /**
     * Set nonce
     *
     * @param string $nonce
     *
     * @return OauthNonce
     */
    public function setNonce($nonce)
    {
        $this->nonce = $nonce;

        return $this;
    }

    /**
     * Get nonce
     *
     * @return string
     */
    public function getNonce()
    {
        return $this->nonce;
    }

    /**
     * Set nonceTs
     *
     * @param integer $nonceTs
     *
     * @return OauthNonce
     */
    public function setNonceTs($nonceTs)
    {
        $this->nonceTs = $nonceTs;

        return $this;
    }

    /**
     * Get nonceTs
     *
     * @return integer
     */
    public function getNonceTs()
    {
        return $this->nonceTs;
    }
}

