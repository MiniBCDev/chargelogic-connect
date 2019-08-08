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
class QueryOrdersResultModel implements JsonSerializable
{
    /**
     * An array of Orders
     * @var \ChargeLogicConnectLib\Models\EFTOrders $orders public property
     */
    public $orders;

    /**
     * Constructor to set initial or default values of member properties
     * @param EFTOrders $orders Initialization value for $this->orders
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->orders = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['orders'] = $this->orders;

        return $json;
    }
}
