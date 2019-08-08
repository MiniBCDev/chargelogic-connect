<?php
/*
 * ChargeLogicConnect
 *
 * This file was automatically generated for ChargeLogic Connect by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace ChargeLogicConnectLib\Models;

use JsonSerializable;

/**
 *An Identification object describes a customer's identification attributes.
 */
class Identification implements JsonSerializable
{
    /**
     * The customer's birthday
     * @maps BirthDate
     * @var string|null $birthDate public property
     */
    public $birthDate;

    /**
     * The government-issued identification number, such as a driver’s license number. The maximum length
     * is 30.
     * @maps IdentificationNumber
     * @var string|null $identificationNumber public property
     */
    public $identificationNumber;

    /**
     * The state that issued the government-issued identification. The maximum length is 2.
     * @maps IdentificationState
     * @var string|null $identificationState public property
     */
    public $identificationState;

    /**
     * The business’s federal ID number. The maximum length is 30.
     * @maps TaxIDNumber
     * @var string|null $taxIDNumber public property
     */
    public $taxIDNumber;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $birthDate            Initialization value for $this->birthDate
     * @param string $identificationNumber Initialization value for $this->identificationNumber
     * @param string $identificationState  Initialization value for $this->identificationState
     * @param string $taxIDNumber          Initialization value for $this->taxIDNumber
     */
    public function __construct()
    {
        if (4 == func_num_args()) {
            $this->birthDate            = func_get_arg(0);
            $this->identificationNumber = func_get_arg(1);
            $this->identificationState  = func_get_arg(2);
            $this->taxIDNumber          = func_get_arg(3);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['BirthDate']            = $this->birthDate;
        $json['IdentificationNumber'] = $this->identificationNumber;
        $json['IdentificationState']  = $this->identificationState;
        $json['TaxIDNumber']          = $this->taxIDNumber;

        return $json;
    }
}
