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
class SetupHostedCreditCardTransactionModel implements JsonSerializable
{
    /**
     * The ChargeLogic Connect API credentials
     * @required
     * @var \ChargeLogicConnectLib\Models\Credential $credential public property
     */
    public $credential;

    /**
     * Information about the transaction
     * @required
     * @var \ChargeLogicConnectLib\Models\Transaction $transaction public property
     */
    public $transaction;

    /**
     * The customer's billing address
     * @required
     * @var \ChargeLogicConnectLib\Models\Address $billingAddress public property
     */
    public $billingAddress;

    /**
     * The customer's shipping address
     * @required
     * @var \ChargeLogicConnectLib\Models\Address $shippingAddress public property
     */
    public $shippingAddress;

    /**
     * Information about the hosted payment
     * @required
     * @var \ChargeLogicConnectLib\Models\HostedPayment $hostedPayment public property
     */
    public $hostedPayment;

    /**
     * Constructor to set initial or default values of member properties
     * @param Credential    $credential      Initialization value for $this->credential
     * @param Transaction   $transaction     Initialization value for $this->transaction
     * @param Address       $billingAddress  Initialization value for $this->billingAddress
     * @param Address       $shippingAddress Initialization value for $this->shippingAddress
     * @param HostedPayment $hostedPayment   Initialization value for $this->hostedPayment
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->credential      = func_get_arg(0);
            $this->transaction     = func_get_arg(1);
            $this->billingAddress  = func_get_arg(2);
            $this->shippingAddress = func_get_arg(3);
            $this->hostedPayment   = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['credential']      = $this->credential;
        $json['transaction']     = $this->transaction;
        $json['billingAddress']  = $this->billingAddress;
        $json['shippingAddress'] = $this->shippingAddress;
        $json['hostedPayment']   = $this->hostedPayment;

        return $json;
    }
}
