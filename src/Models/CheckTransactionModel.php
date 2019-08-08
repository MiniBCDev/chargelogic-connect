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
class CheckTransactionModel implements JsonSerializable
{
    /**
     * The ChargeLogic Connect credentials
     * @required
     * @var \ChargeLogicConnectLib\Models\Credential $credential public property
     */
    public $credential;

    /**
     * Information about the checking or savings account
     * @required
     * @var \ChargeLogicConnectLib\Models\DemandDepositAccount $demandDepositAccount public property
     */
    public $demandDepositAccount;

    /**
     * Information about the transaction
     * @required
     * @var \ChargeLogicConnectLib\Models\Transaction $transaction public property
     */
    public $transaction;

    /**
     * Information about the check writer
     * @required
     * @var \ChargeLogicConnectLib\Models\Identification $identification public property
     */
    public $identification;

    /**
     * The check writer's billing address
     * @required
     * @var \ChargeLogicConnectLib\Models\Address $billingAddress public property
     */
    public $billingAddress;

    /**
     * Constructor to set initial or default values of member properties
     * @param Credential           $credential           Initialization value for $this->credential
     * @param DemandDepositAccount $demandDepositAccount Initialization value for $this->demandDepositAccount
     * @param Transaction          $transaction          Initialization value for $this->transaction
     * @param Identification       $identification       Initialization value for $this->identification
     * @param Address              $billingAddress       Initialization value for $this->billingAddress
     */
    public function __construct()
    {
        if (5 == func_num_args()) {
            $this->credential           = func_get_arg(0);
            $this->demandDepositAccount = func_get_arg(1);
            $this->transaction          = func_get_arg(2);
            $this->identification       = func_get_arg(3);
            $this->billingAddress       = func_get_arg(4);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['credential']           = $this->credential;
        $json['demandDepositAccount'] = $this->demandDepositAccount;
        $json['transaction']          = $this->transaction;
        $json['identification']       = $this->identification;
        $json['billingAddress']       = $this->billingAddress;

        return $json;
    }
}
