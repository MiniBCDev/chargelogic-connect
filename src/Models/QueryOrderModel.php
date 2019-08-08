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
class QueryOrderModel implements JsonSerializable
{
    /**
     * The ChargeLogic Connect credentials
     * @required
     * @var \ChargeLogicConnectLib\Models\Credential $credential public property
     */
    public $credential;

    /**
     * The Hosted Payment ID of the order to query
     * @required
     * @var string $hostedPaymentID public property
     */
    public $hostedPaymentID;

    /**
     * An Order object
     * @var \ChargeLogicConnectLib\Models\EFTOrders $orders public property
     */
    public $orders;

    /**
     * Constructor to set initial or default values of member properties
     * @param Credential $credential      Initialization value for $this->credential
     * @param string     $hostedPaymentID Initialization value for $this->hostedPaymentID
     * @param EFTOrders  $orders          Initialization value for $this->orders
     */
    public function __construct()
    {
        if (3 == func_num_args()) {
            $this->credential      = func_get_arg(0);
            $this->hostedPaymentID = func_get_arg(1);
            $this->orders          = func_get_arg(2);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['credential']      = $this->credential;
        $json['hostedPaymentID'] = $this->hostedPaymentID;
        $json['orders']          = $this->orders;

        return $json;
    }
}
