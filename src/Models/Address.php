<?php
/*
 * ChargeLogicConnect
 *
 * This file was automatically generated for ChargeLogic Connect by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace ChargeLogicConnectLib\Models;

use JsonSerializable;

/**
 *The Address object describes an address like a billing address or a shipping address.
 */
class Address implements JsonSerializable
{
    /**
     * The addressee. The maximum length is 50.
     * @maps Name
     * @var string|null $name public property
     */
    public $name;

    /**
     * The first line of the street address. The maximum length is 50.
     * @maps StreetAddress
     * @var string|null $streetAddress public property
     */
    public $streetAddress;

    /**
     * The second line of the street address. The maximum length is 50.
     * @maps StreetAddress2
     * @var string|null $streetAddress2 public property
     */
    public $streetAddress2;

    /**
     * The city.  The maximum length is 30.
     * @maps City
     * @var string|null $city public property
     */
    public $city;

    /**
     * The state or province. The maximum length is 30.
     * @maps State
     * @var string|null $state public property
     */
    public $state;

    /**
     * The post code or ZIP code. The maximum length is 30.
     * @maps PostCode
     * @var string|null $postCode public property
     */
    public $postCode;

    /**
     * The 3-character alphabetic ISO country code
     * @maps Country
     * @var string|null $country public property
     */
    public $country;

    /**
     * The phone number associated with the addressee. The maximum length is 30.
     * @maps PhoneNumber
     * @var string|null $phoneNumber public property
     */
    public $phoneNumber;

    /**
     * The email address associated with the addressee. The maximum length is 80.
     * @maps Email
     * @var string|null $email public property
     */
    public $email;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $name           Initialization value for $this->name
     * @param string $streetAddress  Initialization value for $this->streetAddress
     * @param string $streetAddress2 Initialization value for $this->streetAddress2
     * @param string $city           Initialization value for $this->city
     * @param string $state          Initialization value for $this->state
     * @param string $postCode       Initialization value for $this->postCode
     * @param string $country        Initialization value for $this->country
     * @param string $phoneNumber    Initialization value for $this->phoneNumber
     * @param string $email          Initialization value for $this->email
     */
    public function __construct()
    {
        if (9 == func_num_args()) {
            $this->name           = func_get_arg(0);
            $this->streetAddress  = func_get_arg(1);
            $this->streetAddress2 = func_get_arg(2);
            $this->city           = func_get_arg(3);
            $this->state          = func_get_arg(4);
            $this->postCode       = func_get_arg(5);
            $this->country        = func_get_arg(6);
            $this->phoneNumber    = func_get_arg(7);
            $this->email          = func_get_arg(8);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['Name']           = $this->name;
        $json['StreetAddress']  = $this->streetAddress;
        $json['StreetAddress2'] = $this->streetAddress2;
        $json['City']           = $this->city;
        $json['State']          = $this->state;
        $json['PostCode']       = $this->postCode;
        $json['Country']        = $this->country;
        $json['PhoneNumber']    = $this->phoneNumber;
        $json['Email']          = $this->email;

        return $json;
    }
}
