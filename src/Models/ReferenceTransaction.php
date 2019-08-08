<?php
/*
 * ChargeLogicConnect
 *
 * This file was automatically generated for ChargeLogic Connect by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace ChargeLogicConnectLib\Models;

use JsonSerializable;

/**
 *Reference transaction information
 */
class ReferenceTransaction implements JsonSerializable
{
    /**
     * The Reference Number returned by a transaction request
     * @required
     * @maps OriginalReferenceNumber
     * @var string $originalReferenceNumber public property
     */
    public $originalReferenceNumber;

    /**
     * The amount of the new transaction
     * @required
     * @maps Amount
     * @var string $amount public property
     */
    public $amount;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $originalReferenceNumber Initialization value for $this->originalReferenceNumber
     * @param string $amount                  Initialization value for $this->amount
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->originalReferenceNumber = func_get_arg(0);
            $this->amount                  = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['OriginalReferenceNumber'] = $this->originalReferenceNumber;
        $json['Amount']                  = $this->amount;

        return $json;
    }
}
