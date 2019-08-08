<?php
/*
 * ChargeLogicConnect
 *
 * This file was automatically generated for ChargeLogic Connect by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace ChargeLogicConnectLib\Models;

use JsonSerializable;

/**
 *The Transaction object allows you to specify transaction-specific properties like the Amount and
 * the External Reference Number.
 */
class Transaction implements JsonSerializable
{
    /**
     * The transaction amount. For AddressVerify transactions, this value must be 0. For all other
     * transactions, this value must be positive.
     * @required
     * @maps Amount
     * @var string $amount public property
     */
    public $amount;

    /**
     * A reference number representing the merchant’s application order number. This value will be used by
     * ChargeLogic Payments to retrieve the transaction later, so this value must be unique per order. You
     * can supply the same ExternalReferenceNumber for transactions that are part of the same order and
     * should be retrieved together. The maximum length is 20.
     * @required
     * @maps ExternalReferenceNumber
     * @var string $externalReferenceNumber public property
     */
    public $externalReferenceNumber;

    /**
     * The 3-character alphabetic ISO currency code
     * @required
     * @maps Currency
     * @var string $currency public property
     */
    public $currency;

    /**
     * The portion of Amount that represents freight charges
     * @maps FreightAmount
     * @var string|null $freightAmount public property
     */
    public $freightAmount;

    /**
     * The portion of Amount that represents tax
     * @maps TaxAmount
     * @var string|null $taxAmount public property
     */
    public $taxAmount;

    /**
     * The customer’s purchase order number. The maximum length is 20.
     * @maps PurchaseOrderNumber
     * @var string|null $purchaseOrderNumber public property
     */
    public $purchaseOrderNumber;

    /**
     * The customer’s purchase order date in MM/DD/YYYY format.
     * @maps PurchaseOrderDate
     * @var string|null $purchaseOrderDate public property
     */
    public $purchaseOrderDate;

    /**
     * A unique value representing this transaction
     * @required
     * @maps ConfirmationID
     * @var string $confirmationID public property
     */
    public $confirmationID;

    /**
     * Array of class LineItem representing the order details
     * @maps LineItem
     * @var \ChargeLogicConnectLib\Models\LineItem[]|null $lineItem public property
     */
    public $lineItem;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $amount                  Initialization value for $this->amount
     * @param string $externalReferenceNumber Initialization value for $this->externalReferenceNumber
     * @param string $currency                Initialization value for $this->currency
     * @param string $freightAmount           Initialization value for $this->freightAmount
     * @param string $taxAmount               Initialization value for $this->taxAmount
     * @param string $purchaseOrderNumber     Initialization value for $this->purchaseOrderNumber
     * @param string $purchaseOrderDate       Initialization value for $this->purchaseOrderDate
     * @param string $confirmationID          Initialization value for $this->confirmationID
     * @param array  $lineItem                Initialization value for $this->lineItem
     */
    public function __construct()
    {
        switch (func_num_args()) {
            case 9:
                $this->amount                  = func_get_arg(0);
                $this->externalReferenceNumber = func_get_arg(1);
                $this->currency                = func_get_arg(2);
                $this->freightAmount           = func_get_arg(3);
                $this->taxAmount               = func_get_arg(4);
                $this->purchaseOrderNumber     = func_get_arg(5);
                $this->purchaseOrderDate       = func_get_arg(6);
                $this->confirmationID          = func_get_arg(7);
                $this->lineItem                = func_get_arg(8);
                break;

            default:
                $this->currency = 'USD';
                break;
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['Amount']                  = $this->amount;
        $json['ExternalReferenceNumber'] = $this->externalReferenceNumber;
        $json['Currency']                = $this->currency;
        $json['FreightAmount']           = $this->freightAmount;
        $json['TaxAmount']               = $this->taxAmount;
        $json['PurchaseOrderNumber']     = $this->purchaseOrderNumber;
        $json['PurchaseOrderDate']       = $this->purchaseOrderDate;
        $json['ConfirmationID']          = $this->confirmationID;
        $json['LineItem']                = $this->lineItem;

        return $json;
    }
}
