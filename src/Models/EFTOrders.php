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
class EFTOrders implements JsonSerializable
{
    /**
     * The number of orders in the response
     * @required
     * @maps OrderCount
     * @var array $orderCount public property
     */
    public $orderCount;

    /**
     * The array of orders
     * @maps Order
     * @var \ChargeLogicConnectLib\Models\Order[]|null $order public property
     */
    public $order;

    /**
     * Constructor to set initial or default values of member properties
     * @param array $orderCount Initialization value for $this->orderCount
     * @param array $order      Initialization value for $this->order
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->orderCount = func_get_arg(0);
            $this->order      = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['OrderCount'] = $this->orderCount;
        $json['Order']      = $this->order;

        return $json;
    }
}
