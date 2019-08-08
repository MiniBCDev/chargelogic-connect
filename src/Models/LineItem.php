<?php
/*
 * ChargeLogicConnect
 *
 * This file was automatically generated for ChargeLogic Connect by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace ChargeLogicConnectLib\Models;

use JsonSerializable;

/**
 *A LineItem object represents a line from an order.
 */
class LineItem implements JsonSerializable
{
    /**
     * The Item No. from the ERP system. The maximum length is 20.
     * @required
     * @maps ProductCode
     * @var string $productCode public property
     */
    public $productCode;

    /**
     * The type of LineItem ("Item", "Resource", "G/L Account", etc.). A blank value means Item.
     * @required
     * @maps Category
     * @var string $category public property
     */
    public $category;

    /**
     * The item’s description. The maximum length is 50.
     * @required
     * @maps Description
     * @var string $description public property
     */
    public $description;

    /**
     * The line quantity
     * @required
     * @maps Quantity
     * @var string $quantity public property
     */
    public $quantity;

    /**
     * The standard unit of measure code
     * @required
     * @maps UnitOfMeasure
     * @var string $unitOfMeasure public property
     */
    public $unitOfMeasure;

    /**
     * The item’s unit price in the Currency Code of the transaction.
     * @required
     * @maps UnitPrice
     * @var string $unitPrice public property
     */
    public $unitPrice;

    /**
     * The tax amount of the line (note that this value can be used for credit card Level 2 data, but it
     * will not be passed to the Order in the ERP system).
     * @required
     * @maps LineTaxAmount
     * @var string $lineTaxAmount public property
     */
    public $lineTaxAmount;

    /**
     * The discount amount applied to the line
     * @required
     * @maps LineDiscountAmount
     * @var string $lineDiscountAmount public property
     */
    public $lineDiscountAmount;

    /**
     * The total line amount, including tax, after any discounts
     * @required
     * @maps LineAmount
     * @var string $lineAmount public property
     */
    public $lineAmount;

    /**
     * An array of class ExtraDataField to be passed to the ERP system for populating Sales Line custom
     * fields
     * @maps ExtraData
     * @var \ChargeLogicConnectLib\Models\ExtraData[]|null $extraData public property
     */
    public $extraData;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $productCode        Initialization value for $this->productCode
     * @param string $category           Initialization value for $this->category
     * @param string $description        Initialization value for $this->description
     * @param string $quantity           Initialization value for $this->quantity
     * @param string $unitOfMeasure      Initialization value for $this->unitOfMeasure
     * @param string $unitPrice          Initialization value for $this->unitPrice
     * @param string $lineTaxAmount      Initialization value for $this->lineTaxAmount
     * @param string $lineDiscountAmount Initialization value for $this->lineDiscountAmount
     * @param string $lineAmount         Initialization value for $this->lineAmount
     * @param array  $extraData          Initialization value for $this->extraData
     */
    public function __construct()
    {
        switch (func_num_args()) {
            case 10:
                $this->productCode        = func_get_arg(0);
                $this->category           = func_get_arg(1);
                $this->description        = func_get_arg(2);
                $this->quantity           = func_get_arg(3);
                $this->unitOfMeasure      = func_get_arg(4);
                $this->unitPrice          = func_get_arg(5);
                $this->lineTaxAmount      = func_get_arg(6);
                $this->lineDiscountAmount = func_get_arg(7);
                $this->lineAmount         = func_get_arg(8);
                $this->extraData          = func_get_arg(9);
                break;

            default:
                $this->unitOfMeasure = 'PCE';
                break;
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['ProductCode']        = $this->productCode;
        $json['Category']           = $this->category;
        $json['Description']        = $this->description;
        $json['Quantity']           = $this->quantity;
        $json['UnitOfMeasure']      = $this->unitOfMeasure;
        $json['UnitPrice']          = $this->unitPrice;
        $json['LineTaxAmount']      = $this->lineTaxAmount;
        $json['LineDiscountAmount'] = $this->lineDiscountAmount;
        $json['LineAmount']         = $this->lineAmount;
        $json['ExtraData']          = $this->extraData;

        return $json;
    }
}
