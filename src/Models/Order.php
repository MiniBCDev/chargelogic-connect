<?php
/*
 * ChargeLogicConnect
 *
 * This file was automatically generated for ChargeLogic Connect by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace ChargeLogicConnectLib\Models;

use JsonSerializable;

/**
 *An Order object represents an order that was sent to the ChargeLogic Connect server.
 */
class Order implements JsonSerializable
{
    /**
     * The Hosted Payment ID of the Order
     * @required
     * @maps ID
     * @var string $iD public property
     */
    public $iD;

    /**
     * The first line of the billing street address
     * @required
     * @maps BillToAddress
     * @var string $billToAddress public property
     */
    public $billToAddress;

    /**
     * The second line of the billing street address
     * @required
     * @maps BillToAddress2
     * @var string $billToAddress2 public property
     */
    public $billToAddress2;

    /**
     * The billing city
     * @required
     * @maps BillToCity
     * @var string $billToCity public property
     */
    public $billToCity;

    /**
     * The 3-character alphabetic ISO billing country code
     * @required
     * @maps BillToCountry
     * @var string $billToCountry public property
     */
    public $billToCountry;

    /**
     * The billing email address associated with the addressee
     * @required
     * @maps BillToEmail
     * @var string $billToEmail public property
     */
    public $billToEmail;

    /**
     * The billing addressee
     * @required
     * @maps BillToName
     * @var string $billToName public property
     */
    public $billToName;

    /**
     * The billing phone number associated with the addressee
     * @required
     * @maps BillToPhoneNo
     * @var string $billToPhoneNo public property
     */
    public $billToPhoneNo;

    /**
     * The billing post code or ZIP code
     * @required
     * @maps BillToPostCode
     * @var string $billToPostCode public property
     */
    public $billToPostCode;

    /**
     * The billing state or province
     * @required
     * @maps BillToCounty
     * @var string $billToCounty public property
     */
    public $billToCounty;

    /**
     * The first line of the shipping street address
     * @required
     * @maps ShipToAddress
     * @var string $shipToAddress public property
     */
    public $shipToAddress;

    /**
     * The second line of the shipping street address
     * @required
     * @maps ShipToAddress2
     * @var string $shipToAddress2 public property
     */
    public $shipToAddress2;

    /**
     * The shipping city
     * @required
     * @maps ShipToCity
     * @var string $shipToCity public property
     */
    public $shipToCity;

    /**
     * The 3-character alphabetic ISO shipping country code
     * @required
     * @maps ShipToCountry
     * @var string $shipToCountry public property
     */
    public $shipToCountry;

    /**
     * The shipping email address associated with the addressee
     * @required
     * @maps ShipToEmail
     * @var string $shipToEmail public property
     */
    public $shipToEmail;

    /**
     * The shipping addressee
     * @required
     * @maps ShipToName
     * @var string $shipToName public property
     */
    public $shipToName;

    /**
     * The shipping phone number associated with the addressee
     * @required
     * @maps ShipToPhoneNo
     * @var string $shipToPhoneNo public property
     */
    public $shipToPhoneNo;

    /**
     * The shipping post code or ZIP code
     * @required
     * @maps ShipToPostCode
     * @var string $shipToPostCode public property
     */
    public $shipToPostCode;

    /**
     * The shipping state or province
     * @required
     * @maps ShipToCounty
     * @var string $shipToCounty public property
     */
    public $shipToCounty;

    /**
     * The 3-character alphabetic ISO currency code
     * @required
     * @maps Currency
     * @var string $currency public property
     */
    public $currency;

    /**
     * A reference number representing the merchant’s application order number
     * @required
     * @maps ExternalReferenceNumber
     * @var string $externalReferenceNumber public property
     */
    public $externalReferenceNumber;

    /**
     * The date and time the order was created
     * @required
     * @maps CreatedDateTime
     * @var string $createdDateTime public property
     */
    public $createdDateTime;

    /**
     * The three-character alphabetic ISO cardholder language code
     * @required
     * @maps Language
     * @var string $language public property
     */
    public $language;

    /**
     * The customer’s purchase order number
     * @required
     * @maps PurchaseOrderNumber
     * @var string $purchaseOrderNumber public property
     */
    public $purchaseOrderNumber;

    /**
     * The portion of Amount that represents freight charges
     * @required
     * @maps FreightAmount
     * @var string $freightAmount public property
     */
    public $freightAmount;

    /**
     * The Shipping Agent Code
     * @required
     * @maps ShippingAgent
     * @var string $shippingAgent public property
     */
    public $shippingAgent;

    /**
     * The Shipping Agent Service Code
     * @required
     * @maps ShippingAgentService
     * @var string $shippingAgentService public property
     */
    public $shippingAgentService;

    /**
     * An array of class ExtraDataField to be passed to NAV for populating Sales Header fields
     * @maps ExtraDataField
     * @var \ChargeLogicConnectLib\Models\ExtraData[]|null $extraDataField public property
     */
    public $extraDataField;

    /**
     * Array of class LineItem representing the order details
     * @maps LineItem
     * @var \ChargeLogicConnectLib\Models\LineItem[]|null $lineItem public property
     */
    public $lineItem;

    /**
     * An array of comment lines
     * @maps Comment
     * @var \ChargeLogicConnectLib\Models\Comment[]|null $comment public property
     */
    public $comment;

    /**
     * Array of class Shipment representing individual shipments posted from this order
     * @maps Shipment
     * @var \ChargeLogicConnectLib\Models\Shipment[]|null $shipment public property
     */
    public $shipment;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $iD                      Initialization value for $this->iD
     * @param string $billToAddress           Initialization value for $this->billToAddress
     * @param string $billToAddress2          Initialization value for $this->billToAddress2
     * @param string $billToCity              Initialization value for $this->billToCity
     * @param string $billToCountry           Initialization value for $this->billToCountry
     * @param string $billToEmail             Initialization value for $this->billToEmail
     * @param string $billToName              Initialization value for $this->billToName
     * @param string $billToPhoneNo           Initialization value for $this->billToPhoneNo
     * @param string $billToPostCode          Initialization value for $this->billToPostCode
     * @param string $billToCounty            Initialization value for $this->billToCounty
     * @param string $shipToAddress           Initialization value for $this->shipToAddress
     * @param string $shipToAddress2          Initialization value for $this->shipToAddress2
     * @param string $shipToCity              Initialization value for $this->shipToCity
     * @param string $shipToCountry           Initialization value for $this->shipToCountry
     * @param string $shipToEmail             Initialization value for $this->shipToEmail
     * @param string $shipToName              Initialization value for $this->shipToName
     * @param string $shipToPhoneNo           Initialization value for $this->shipToPhoneNo
     * @param string $shipToPostCode          Initialization value for $this->shipToPostCode
     * @param string $shipToCounty            Initialization value for $this->shipToCounty
     * @param string $currency                Initialization value for $this->currency
     * @param string $externalReferenceNumber Initialization value for $this->externalReferenceNumber
     * @param string $createdDateTime         Initialization value for $this->createdDateTime
     * @param string $language                Initialization value for $this->language
     * @param string $purchaseOrderNumber     Initialization value for $this->purchaseOrderNumber
     * @param string $freightAmount           Initialization value for $this->freightAmount
     * @param string $shippingAgent           Initialization value for $this->shippingAgent
     * @param string $shippingAgentService    Initialization value for $this->shippingAgentService
     * @param array  $extraDataField          Initialization value for $this->extraDataField
     * @param array  $lineItem                Initialization value for $this->lineItem
     * @param array  $comment                 Initialization value for $this->comment
     * @param array  $shipment                Initialization value for $this->shipment
     */
    public function __construct()
    {
        if (31 == func_num_args()) {
            $this->iD                      = func_get_arg(0);
            $this->billToAddress           = func_get_arg(1);
            $this->billToAddress2          = func_get_arg(2);
            $this->billToCity              = func_get_arg(3);
            $this->billToCountry           = func_get_arg(4);
            $this->billToEmail             = func_get_arg(5);
            $this->billToName              = func_get_arg(6);
            $this->billToPhoneNo           = func_get_arg(7);
            $this->billToPostCode          = func_get_arg(8);
            $this->billToCounty            = func_get_arg(9);
            $this->shipToAddress           = func_get_arg(10);
            $this->shipToAddress2          = func_get_arg(11);
            $this->shipToCity              = func_get_arg(12);
            $this->shipToCountry           = func_get_arg(13);
            $this->shipToEmail             = func_get_arg(14);
            $this->shipToName              = func_get_arg(15);
            $this->shipToPhoneNo           = func_get_arg(16);
            $this->shipToPostCode          = func_get_arg(17);
            $this->shipToCounty            = func_get_arg(18);
            $this->currency                = func_get_arg(19);
            $this->externalReferenceNumber = func_get_arg(20);
            $this->createdDateTime         = func_get_arg(21);
            $this->language                = func_get_arg(22);
            $this->purchaseOrderNumber     = func_get_arg(23);
            $this->freightAmount           = func_get_arg(24);
            $this->shippingAgent           = func_get_arg(25);
            $this->shippingAgentService    = func_get_arg(26);
            $this->extraDataField          = func_get_arg(27);
            $this->lineItem                = func_get_arg(28);
            $this->comment                 = func_get_arg(29);
            $this->shipment                = func_get_arg(30);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['ID']                      = $this->iD;
        $json['BillToAddress']           = $this->billToAddress;
        $json['BillToAddress2']          = $this->billToAddress2;
        $json['BillToCity']              = $this->billToCity;
        $json['BillToCountry']           = $this->billToCountry;
        $json['BillToEmail']             = $this->billToEmail;
        $json['BillToName']              = $this->billToName;
        $json['BillToPhoneNo']           = $this->billToPhoneNo;
        $json['BillToPostCode']          = $this->billToPostCode;
        $json['BillToCounty']            = $this->billToCounty;
        $json['ShipToAddress']           = $this->shipToAddress;
        $json['ShipToAddress2']          = $this->shipToAddress2;
        $json['ShipToCity']              = $this->shipToCity;
        $json['ShipToCountry']           = $this->shipToCountry;
        $json['ShipToEmail']             = $this->shipToEmail;
        $json['ShipToName']              = $this->shipToName;
        $json['ShipToPhoneNo']           = $this->shipToPhoneNo;
        $json['ShipToPostCode']          = $this->shipToPostCode;
        $json['ShipToCounty']            = $this->shipToCounty;
        $json['Currency']                = $this->currency;
        $json['ExternalReferenceNumber'] = $this->externalReferenceNumber;
        $json['CreatedDateTime']         = $this->createdDateTime;
        $json['Language']                = $this->language;
        $json['PurchaseOrderNumber']     = $this->purchaseOrderNumber;
        $json['FreightAmount']           = $this->freightAmount;
        $json['ShippingAgent']           = $this->shippingAgent;
        $json['ShippingAgentService']    = $this->shippingAgentService;
        $json['ExtraDataField']          = $this->extraDataField;
        $json['LineItem']                = $this->lineItem;
        $json['Comment']                 = $this->comment;
        $json['Shipment']                = $this->shipment;

        return $json;
    }
}
