<?php
/*
 * ChargeLogicConnect
 *
 * This file was automatically generated for ChargeLogic Connect by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace ChargeLogicConnectLib\Models;

use JsonSerializable;

/**
 *A Shipment object represents a shipment that as been posted in the ERP system.
 */
class Shipment implements JsonSerializable
{
    /**
     * The No. assigned to the shipment
     * @required
     * @maps ShipmentNumber
     * @var string $shipmentNumber public property
     */
    public $shipmentNumber;

    /**
     * The ID of the Hosted Payment
     * @maps HostedPaymentID
     * @var string|null $hostedPaymentID public property
     */
    public $hostedPaymentID;

    /**
     * The posting date of the shipment
     * @maps ShipmentDate
     * @var string|null $shipmentDate public property
     */
    public $shipmentDate;

    /**
     * The Shipping Agent Code
     * @maps ShippingAgent
     * @var string|null $shippingAgent public property
     */
    public $shippingAgent;

    /**
     * The Shipping Agent Service Code
     * @maps ShippingAgentService
     * @var string|null $shippingAgentService public property
     */
    public $shippingAgentService;

    /**
     * The package tracking number
     * @maps TrackingNumber
     * @var string|null $trackingNumber public property
     */
    public $trackingNumber;

    /**
     * Array of class LineItem representing the shipment details
     * @maps LineItem
     * @var \ChargeLogicConnectLib\Models\LineItem[]|null $lineItem public property
     */
    public $lineItem;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $shipmentNumber       Initialization value for $this->shipmentNumber
     * @param string $hostedPaymentID      Initialization value for $this->hostedPaymentID
     * @param string $shipmentDate         Initialization value for $this->shipmentDate
     * @param string $shippingAgent        Initialization value for $this->shippingAgent
     * @param string $shippingAgentService Initialization value for $this->shippingAgentService
     * @param string $trackingNumber       Initialization value for $this->trackingNumber
     * @param array  $lineItem             Initialization value for $this->lineItem
     */
    public function __construct()
    {
        if (7 == func_num_args()) {
            $this->shipmentNumber       = func_get_arg(0);
            $this->hostedPaymentID      = func_get_arg(1);
            $this->shipmentDate         = func_get_arg(2);
            $this->shippingAgent        = func_get_arg(3);
            $this->shippingAgentService = func_get_arg(4);
            $this->trackingNumber       = func_get_arg(5);
            $this->lineItem             = func_get_arg(6);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['ShipmentNumber']       = $this->shipmentNumber;
        $json['HostedPaymentID']      = $this->hostedPaymentID;
        $json['ShipmentDate']         = $this->shipmentDate;
        $json['ShippingAgent']        = $this->shippingAgent;
        $json['ShippingAgentService'] = $this->shippingAgentService;
        $json['TrackingNumber']       = $this->trackingNumber;
        $json['LineItem']             = $this->lineItem;

        return $json;
    }
}
