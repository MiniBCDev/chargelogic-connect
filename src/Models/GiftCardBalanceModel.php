<?php
/*
 * ChargeLogicConnect
 *
 * This file was automatically generated for ChargeLogic Connect by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace ChargeLogicConnectLib\Models;

use JsonSerializable;

/**
 * @todo Write general description for this model
 */
class GiftCardBalanceModel implements JsonSerializable
{
    /**
     * The ChargeLogic Connect credentials
     * @required
     * @var \ChargeLogicConnectLib\Models\Credential $credential public property
     */
    public $credential;

    /**
     * Information about the credit card
     * @required
     * @var \ChargeLogicConnectLib\Models\Card $card public property
     */
    public $card;

    /**
     * Constructor to set initial or default values of member properties
     * @param Credential $credential Initialization value for $this->credential
     * @param Card       $card       Initialization value for $this->card
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->credential = func_get_arg(0);
            $this->card       = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['credential'] = $this->credential;
        $json['card']       = $this->card;

        return $json;
    }
}
