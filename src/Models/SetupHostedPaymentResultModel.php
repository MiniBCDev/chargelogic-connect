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
class SetupHostedPaymentResultModel implements JsonSerializable
{
    /**
     * The Hosted Payment ID for the Hosted Payment
     * @maps return_value
     * @var string $returnValue public property
     */
    public $returnValue;

    /**
     * False, if an exception was raised. True if no exception was raised.
     * @maps Success
     * @var bool $success public property
     */
    public $success;

    /**
     * Exception information
     * @maps ErrorMessage
     * @var string $errorMessage public property
     */
    public $errorMessage;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $returnValue  Initialization value for $this->returnValue
     * @param bool   $success      Initialization value for $this->success
     * @param string $errorMessage Initialization value for $this->errorMessage
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->returnValue  = func_get_arg(0);
            $this->success      = func_get_arg(1);
            $this->errorMessage = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['return_value'] = $this->returnValue;
        $json['Success']      = $this->success;
        $json['ErrorMessage'] = $this->errorMessage;

        return $json;
    }
}
