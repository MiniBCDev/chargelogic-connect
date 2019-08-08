<?php
/*
 * ChargeLogicConnect
 *
 * This file was automatically generated for ChargeLogic Connect by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace ChargeLogicConnectLib\Models;

use JsonSerializable;

/**
 *A Comment object represents a collection or order comment lines.
 */
class Comment implements JsonSerializable
{
    /**
     * Comment lines, each with a maximum length of 80; these comment lines will appear as Sales Order
     * comments
     * @required
     * @maps CommentLine
     * @var string $commentLine public property
     */
    public $commentLine;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $commentLine Initialization value for $this->commentLine
     */
    public function __construct()
    {
        if (1 == func_num_args()) {
            $this->commentLine = func_get_arg(0);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['CommentLine'] = $this->commentLine;

        return $json;
    }
}
