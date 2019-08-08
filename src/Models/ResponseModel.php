<?php
/*
 * ChargeLogicConnect
 *
 * This file was automatically generated for ChargeLogic Connect by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace ChargeLogicConnectLib\Models;

use JsonSerializable;

/**
 *The Response type is an output type. It must be supplied in the request, and it will be populated
 * and returned in the response.
 */
class ResponseModel implements JsonSerializable
{
    /**
     * The value that represents the outcome of the transaction
     * @maps ResponseCode
     * @var string|null $responseCode public property
     */
    public $responseCode;

    /**
     * The value that represents the outcome of the transaction; passed through from the payment platform
     * @maps HostResponseCode
     * @var string|null $hostResponseCode public property
     */
    public $hostResponseCode;

    /**
     * The human-readable transaction results. This message should not be displayed to the cardholder.
     * @maps Message
     * @var string|null $message public property
     */
    public $message;

    /**
     * The transaction’s approval number
     * @maps ApprovalNumber
     * @var string|null $approvalNumber public property
     */
    public $approvalNumber;

    /**
     * The amount that was approved; in the case of a partial approval, this may be less than the
     * Transaction Amount.
     * @maps ApprovedAmount
     * @var string|null $approvedAmount public property
     */
    public $approvedAmount;

    /**
     * The balance amount for prepaid accounts or gift cards
     * @maps BalanceAmount
     * @var string|null $balanceAmount public property
     */
    public $balanceAmount;

    /**
     * The date on which the transaction was processed in MM/DD/YY format
     * @maps TransactionDate
     * @var string|null $transactionDate public property
     */
    public $transactionDate;

    /**
     * The time at which the transaction was processed in HH:MM:SS XM format
     * @maps TransactionTime
     * @var string|null $transactionTime public property
     */
    public $transactionTime;

    /**
     * The outcome of the transaction; must be one of “Batched”, ”Hold”, “Approved”, “Used”, “Declined”,
     * “Void”, “Duplicate”, “Failed”, “Error”, “Referred”; Read the value of this field to determine how to
     * handle the transaction response in your application. A TransactonStatus of "Approved" means that the
     * transaction was successful.
     * @maps TransactionStatus
     * @var string|null $transactionStatus public property
     */
    public $transactionStatus;

    /**
     * An indicator to determine if an AVS Fraud Protection rule was violated (" ", "Mismatch", "Partial
     * Match", "Unknown")
     * @maps AddressVerificationAlert
     * @var string|null $addressVerificationAlert public property
     */
    public $addressVerificationAlert;

    /**
     * An indicator to determine if a CVV Fraud Protection rule was violated ("", "Mismatch", "Unknown")
     * @maps CardVerificationValueAlert
     * @var string|null $cardVerificationValueAlert public property
     */
    public $cardVerificationValueAlert;

    /**
     * The AccountNumber, masked with “X” characters, except for the last four digits
     * @maps MaskedAccountNumber
     * @var string|null $maskedAccountNumber public property
     */
    public $maskedAccountNumber;

    /**
     * The ChargeLogic Connect-generated Secure Remote Storage token that represents the AccountNumber; can
     * be used for future transactions
     * @maps Token
     * @var string|null $token public property
     */
    public $token;

    /**
     * The transaction Reference Number
     * @maps return_value
     * @var string|null $returnValue public property
     */
    public $returnValue;

    /**
     * False, if an exception was raised. Otherwise, true. A value of true does not mean that the
     * transaction was approved - it only means that an exception was not raised. If Success is true, check
     * the Transaction Status for a value of Approved.
     * @maps Success
     * @var bool $success public property
     */
    public $success;

    /**
     * Exception information
     * @maps ErrorMessage
     * @var string|null $errorMessage public property
     */
    public $errorMessage;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $responseCode               Initialization value for $this->responseCode
     * @param string $hostResponseCode           Initialization value for $this->hostResponseCode
     * @param string $message                    Initialization value for $this->message
     * @param string $approvalNumber             Initialization value for $this->approvalNumber
     * @param string $approvedAmount             Initialization value for $this->approvedAmount
     * @param string $balanceAmount              Initialization value for $this->balanceAmount
     * @param string $transactionDate            Initialization value for $this->transactionDate
     * @param string $transactionTime            Initialization value for $this->transactionTime
     * @param string $transactionStatus          Initialization value for $this->transactionStatus
     * @param string $addressVerificationAlert   Initialization value for $this->addressVerificationAlert
     * @param string $cardVerificationValueAlert Initialization value for $this->cardVerificationValueAlert
     * @param string $maskedAccountNumber        Initialization value for $this->maskedAccountNumber
     * @param string $token                      Initialization value for $this->token
     * @param string $returnValue                Initialization value for $this->returnValue
     * @param bool   $success                    Initialization value for $this->success
     * @param string $errorMessage               Initialization value for $this->errorMessage
     */
    public function __construct()
    {
        if (16 == func_num_args()) {
            $this->responseCode               = func_get_arg(0);
            $this->hostResponseCode           = func_get_arg(1);
            $this->message                    = func_get_arg(2);
            $this->approvalNumber             = func_get_arg(3);
            $this->approvedAmount             = func_get_arg(4);
            $this->balanceAmount              = func_get_arg(5);
            $this->transactionDate            = func_get_arg(6);
            $this->transactionTime            = func_get_arg(7);
            $this->transactionStatus          = func_get_arg(8);
            $this->addressVerificationAlert   = func_get_arg(9);
            $this->cardVerificationValueAlert = func_get_arg(10);
            $this->maskedAccountNumber        = func_get_arg(11);
            $this->token                      = func_get_arg(12);
            $this->returnValue                = func_get_arg(13);
            $this->success                    = func_get_arg(14);
            $this->errorMessage               = func_get_arg(15);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['ResponseCode']               = $this->responseCode;
        $json['HostResponseCode']           = $this->hostResponseCode;
        $json['Message']                    = $this->message;
        $json['ApprovalNumber']             = $this->approvalNumber;
        $json['ApprovedAmount']             = $this->approvedAmount;
        $json['BalanceAmount']              = $this->balanceAmount;
        $json['TransactionDate']            = $this->transactionDate;
        $json['TransactionTime']            = $this->transactionTime;
        $json['TransactionStatus']          = $this->transactionStatus;
        $json['AddressVerificationAlert']   = $this->addressVerificationAlert;
        $json['CardVerificationValueAlert'] = $this->cardVerificationValueAlert;
        $json['MaskedAccountNumber']        = $this->maskedAccountNumber;
        $json['Token']                      = $this->token;
        $json['return_value']               = $this->returnValue;
        $json['Success']                    = $this->success;
        $json['ErrorMessage']               = $this->errorMessage;

        return $json;
    }
}
