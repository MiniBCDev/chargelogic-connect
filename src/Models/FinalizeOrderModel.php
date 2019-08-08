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
class FinalizeOrderModel implements JsonSerializable
{
    /**
     * The ChargeLogic Connect credentials
     * @required
     * @var \ChargeLogicConnectLib\Models\Credential $credential public property
     */
    public $credential;

    /**
     * The Hosted Payment ID to finalize
     * @required
     * @var string $hostedPaymentID public property
     */
    public $hostedPaymentID;

    /**
     * Constructor to set initial or default values of member properties
     * @param Credential $credential      Initialization value for $this->credential
     * @param string     $hostedPaymentID Initialization value for $this->hostedPaymentID
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->credential      = func_get_arg(0);
            $this->hostedPaymentID = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['credential']      = $this->credential;
        $json['hostedPaymentID'] = $this->hostedPaymentID;

        return $json;
    }
}
