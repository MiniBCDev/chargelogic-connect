<?php
/*
 * ChargeLogicConnect
 *
 * This file was automatically generated for ChargeLogic Connect by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace ChargeLogicConnectLib\Models;

use JsonSerializable;

/**
 *The Credential object allows you to pass your ChargeLogic Connect credentials to the server. It is
 * required in every request. The StoreNo and APIKey passed in the Credential object must match the
 * request's HTTP Basic Authentication Username and Password.
 */
class Credential implements JsonSerializable
{
    /**
     * The merchant’s ChargeLogic Connect-assigned account identifier; must match the HTTP Basic
     * Authentication username
     * @required
     * @maps StoreNo
     * @var string $storeNo public property
     */
    public $storeNo;

    /**
     * The merchant’s ChargeLogic Connect-assigned account password
     * @required
     * @maps APIKey
     * @var string $aPIKey public property
     */
    public $aPIKey;

    /**
     * The external application’s ChargeLogic Connect-assigned identifier
     * @required
     * @maps ApplicationNo
     * @var string $applicationNo public property
     */
    public $applicationNo;

    /**
     * The external application’s version number. This value can be supplied in a format of your choice,
     * but it should change each time you update your ChargeLogic Connect integration.
     * @required
     * @maps ApplicationVersion
     * @var string $applicationVersion public property
     */
    public $applicationVersion;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $storeNo            Initialization value for $this->storeNo
     * @param string $aPIKey             Initialization value for $this->aPIKey
     * @param string $applicationNo      Initialization value for $this->applicationNo
     * @param string $applicationVersion Initialization value for $this->applicationVersion
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->storeNo            = func_get_arg(0);
            $this->aPIKey             = func_get_arg(1);
            $this->applicationNo      = func_get_arg(2);
            $this->applicationVersion = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['StoreNo']            = $this->storeNo;
        $json['APIKey']             = $this->aPIKey;
        $json['ApplicationNo']      = $this->applicationNo;
        $json['ApplicationVersion'] = $this->applicationVersion;

        return $json;
    }
}
