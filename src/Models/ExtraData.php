<?php
/*
 * ChargeLogicConnect
 *
 * This file was automatically generated for ChargeLogic Connect by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace ChargeLogicConnectLib\Models;

use JsonSerializable;

/**
 *An ExtraData object allows you to pass additional custom fields to the ERP system using Name/Value
 * pairs. Setups in the ERP system must be configured to match the ExtraData Name so that the import
 * process can assign the Value to the correct field.
 */
class ExtraData implements JsonSerializable
{
    /**
     * The custom field name. The maximum length is 20.
     * @required
     * @maps Name
     * @var string $name public property
     */
    public $name;

    /**
     * The custom field value. The maximum length is 250.
     * @required
     * @maps Value
     * @var string $value public property
     */
    public $value;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $name  Initialization value for $this->name
     * @param string $value Initialization value for $this->value
     */
    public function __construct()
    {
        if (2 == func_num_args()) {
            $this->name  = func_get_arg(0);
            $this->value = func_get_arg(1);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['Name']  = $this->name;
        $json['Value'] = $this->value;

        return $json;
    }
}
