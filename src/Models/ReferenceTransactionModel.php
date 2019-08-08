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
class ReferenceTransactionModel implements JsonSerializable
{
    /**
     * The ChargeLogic Connect credentials
     * @required
     * @var \ChargeLogicConnectLib\Models\Credential $credential public property
     */
    public $credential;

    /**
     * The original transaction information
     * @required
     * @var \ChargeLogicConnectLib\Models\ReferenceTransaction $referenceTransaction public property
     */
    public $referenceTransaction;

    /**
     * Constructor to set initial or default values of member properties
     * @param Credential           $credential           Initialization value for $this->credential
     * @param ReferenceTransaction $referenceTransaction Initialization value for $this->referenceTransaction
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->credential           = func_get_arg(0);
            $this->referenceTransaction = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['credential']           = $this->credential;
        $json['referenceTransaction'] = $this->referenceTransaction;

        return $json;
    }
}
