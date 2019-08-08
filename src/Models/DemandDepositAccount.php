<?php
/*
 * ChargeLogicConnect
 *
 * This file was automatically generated for ChargeLogic Connect by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace ChargeLogicConnectLib\Models;

use JsonSerializable;

/**
 *A DemandDepositAccount object describes a checking or savings bank account to be used for ACH
 * payments.
 */
class DemandDepositAccount implements JsonSerializable
{
    /**
     * The ABA routing number for US accounts or XXXXXYYY for Canadian accounts, where XXXXX is the Branch
     * Number and YYY is the Institution Number
     * @required
     * @maps RoutingNumber
     * @var string $routingNumber public property
     */
    public $routingNumber;

    /**
     * The demand deposit account number. The maximum length is 19.
     * @required
     * @maps AccountNumber
     * @var string $accountNumber public property
     */
    public $accountNumber;

    /**
     * The check type; must be one of “ ”, “Personal”, or “Business”
     * @required
     * @maps CheckType
     * @var string $checkType public property
     */
    public $checkType;

    /**
     * The demand deposit account type; must be one of “ ”, “Checking”, or “Savings”
     * @required
     * @maps AccountType
     * @var string $accountType public property
     */
    public $accountType;

    /**
     * The ChargeLogic Connect-generated Secure Remote Storage token representing the AccountNumber
     * @maps Token
     * @var string|null $token public property
     */
    public $token;

    /**
     * The check number. The maximum length is 15.
     * @maps CheckNumber
     * @var string|null $checkNumber public property
     */
    public $checkNumber;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $routingNumber Initialization value for $this->routingNumber
     * @param string $accountNumber Initialization value for $this->accountNumber
     * @param string $checkType     Initialization value for $this->checkType
     * @param string $accountType   Initialization value for $this->accountType
     * @param string $token         Initialization value for $this->token
     * @param string $checkNumber   Initialization value for $this->checkNumber
     */
    public function __construct()
    {
        if (6 == func_num_args()) {
            $this->routingNumber = func_get_arg(0);
            $this->accountNumber = func_get_arg(1);
            $this->checkType     = func_get_arg(2);
            $this->accountType   = func_get_arg(3);
            $this->token         = func_get_arg(4);
            $this->checkNumber   = func_get_arg(5);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['RoutingNumber'] = $this->routingNumber;
        $json['AccountNumber'] = $this->accountNumber;
        $json['CheckType']     = $this->checkType;
        $json['AccountType']   = $this->accountType;
        $json['Token']         = $this->token;
        $json['CheckNumber']   = $this->checkNumber;

        return $json;
    }
}
