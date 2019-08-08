<?php
/*
 * ChargeLogicConnect
 *
 * This file was automatically generated for ChargeLogic Connect by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace ChargeLogicConnectLib\Models;

use JsonSerializable;

/**
 *The Card object represents a payment card. When supplied, you must populate either the
 * AccountNumber or the Token field.
 */
class Card implements JsonSerializable
{
    /**
     * The cardholder’s name as it appears on the card.
     * @maps CardholderName
     * @var string|null $cardholderName public property
     */
    public $cardholderName;

    /**
     * The credit card number. This field is required if a nether a Token nor Track2Data is supplied. The
     * maximum length is 19.
     * @maps AccountNumber
     * @var string|null $accountNumber public property
     */
    public $accountNumber;

    /**
     * The two-digit expiration month. This field is required if Track2Data is not specified. The maximum
     * length is 2.
     * @maps ExpirationMonth
     * @var string|null $expirationMonth public property
     */
    public $expirationMonth;

    /**
     * The two-digit expiration year. This field is required if Track2Data is not specified. The maximum
     * length is 2.
     * @maps ExpirationYear
     * @var string|null $expirationYear public property
     */
    public $expirationYear;

    /**
     * All data from Track 2 on the card’s magnetic stripe. This field is required if neither AccountNumber
     * nor Token is specified. The maximum length is 40.
     * @maps Track2Data
     * @var string|null $track2Data public property
     */
    public $track2Data;

    /**
     * The ChargeLogic Connect-generated Secure Remote Storage token representing the AccountNumber. This
     * field is required if neither AccountNumber nor Track2Data is specified. The maximum length is 50.
     * @maps Token
     * @var string|null $token public property
     */
    public $token;

    /**
     * The CVV/CVV2/CID from the credit card. For American Express, this is a 4-digit value. For all other
     * card types, it is a 3-digit value. The maximum length is 4.
     * @maps CardVerificationValue
     * @var string|null $cardVerificationValue public property
     */
    public $cardVerificationValue;

    /**
     * When set to True, this card will be marked as Default when imported by ChargeLogic Payments
     * @maps SetAsDefault
     * @var string|null $setAsDefault public property
     */
    public $setAsDefault;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $cardholderName        Initialization value for $this->cardholderName
     * @param string $accountNumber         Initialization value for $this->accountNumber
     * @param string $expirationMonth       Initialization value for $this->expirationMonth
     * @param string $expirationYear        Initialization value for $this->expirationYear
     * @param string $track2Data            Initialization value for $this->track2Data
     * @param string $token                 Initialization value for $this->token
     * @param string $cardVerificationValue Initialization value for $this->cardVerificationValue
     * @param string $setAsDefault          Initialization value for $this->setAsDefault
     */
    public function __construct()
    {
        if (8 == func_num_args()) {
            $this->cardholderName        = func_get_arg(0);
            $this->accountNumber         = func_get_arg(1);
            $this->expirationMonth       = func_get_arg(2);
            $this->expirationYear        = func_get_arg(3);
            $this->track2Data            = func_get_arg(4);
            $this->token                 = func_get_arg(5);
            $this->cardVerificationValue = func_get_arg(6);
            $this->setAsDefault          = func_get_arg(7);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['CardholderName']        = $this->cardholderName;
        $json['AccountNumber']         = $this->accountNumber;
        $json['ExpirationMonth']       = $this->expirationMonth;
        $json['ExpirationYear']        = $this->expirationYear;
        $json['Track2Data']            = $this->track2Data;
        $json['Token']                 = $this->token;
        $json['CardVerificationValue'] = $this->cardVerificationValue;
        $json['SetAsDefault']          = $this->setAsDefault;

        return $json;
    }
}
