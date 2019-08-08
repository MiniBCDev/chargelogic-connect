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
class TransactionResultModel implements JsonSerializable
{
    /**
     * Response information for a CreditCardAuthorize transaction
     * @maps CreditCardAuthorizeResult
     * @var \ChargeLogicConnectLib\Models\ResponseModel|null $creditCardAuthorizeResult public property
     */
    public $creditCardAuthorizeResult;

    /**
     * Response information for a CreditCardAddressVerify2 transaction
     * @maps CreditCardAddressVerify2Result
     * @var \ChargeLogicConnectLib\Models\ResponseModel|null $creditCardAddressVerify2Result public property
     */
    public $creditCardAddressVerify2Result;

    /**
     * Response information for a CreditCardAddressVerify transaction
     * @maps CreditCardAddressVerifyResult
     * @var \ChargeLogicConnectLib\Models\ResponseModel|null $creditCardAddressVerifyResult public property
     */
    public $creditCardAddressVerifyResult;

    /**
     * Response information for a GiftCardBalanceIncrease transaction
     * @maps GiftCardBalanceIncreaseResult
     * @var \ChargeLogicConnectLib\Models\ResponseModel|null $giftCardBalanceIncreaseResult public property
     */
    public $giftCardBalanceIncreaseResult;

    /**
     * Response information for a GiftCardBalanceInquiry transaction
     * @maps GiftCardBalanceInquiryResult
     * @var \ChargeLogicConnectLib\Models\ResponseModel|null $giftCardBalanceInquiryResult public property
     */
    public $giftCardBalanceInquiryResult;

    /**
     * Response information for a GiftCardCredit transaction
     * @maps GiftCardCreditResult
     * @var \ChargeLogicConnectLib\Models\ResponseModel|null $giftCardCreditResult public property
     */
    public $giftCardCreditResult;

    /**
     * Response information for a GiftCardDeactivate transaction
     * @maps GiftCardDeactivateResult
     * @var \ChargeLogicConnectLib\Models\ResponseModel|null $giftCardDeactivateResult public property
     */
    public $giftCardDeactivateResult;

    /**
     * Response information for a GiftCardActivate transaction
     * @maps GiftCardActivateResult
     * @var \ChargeLogicConnectLib\Models\ResponseModel|null $giftCardActivateResult public property
     */
    public $giftCardActivateResult;

    /**
     * Response information for a GiftCardAuthorize transaction
     * @maps GiftCardAuthorizeResult
     * @var \ChargeLogicConnectLib\Models\ResponseModel|null $giftCardAuthorizeResult public property
     */
    public $giftCardAuthorizeResult;

    /**
     * Response information for a GiftCardCharge transaction
     * @maps GiftCardChargeResult
     * @var \ChargeLogicConnectLib\Models\ResponseModel|null $giftCardChargeResult public property
     */
    public $giftCardChargeResult;

    /**
     * Response information for a CheckCharge transaction
     * @maps CheckChargeResult
     * @var \ChargeLogicConnectLib\Models\ResponseModel|null $checkChargeResult public property
     */
    public $checkChargeResult;

    /**
     * Response information for a SetupHostedCheckCharge transaction
     * @maps SetupHostedCheckChargeResult
     * @var \ChargeLogicConnectLib\Models\SetupHostedPaymentResultModel|null $setupHostedCheckChargeResult public property
     */
    public $setupHostedCheckChargeResult;

    /**
     * Response information for a SetupHostedCreditCardAuthorize transaction
     * @maps SetupHostedCreditCardAuthorizeResult
     * @var \ChargeLogicConnectLib\Models\SetupHostedPaymentResultModel|null $setupHostedCreditCardAuthorizeResult public property
     */
    public $setupHostedCreditCardAuthorizeResult;

    /**
     * Response information for a SetupHostedOrder transaction
     * @maps SetupHostedOrderResult
     * @var \ChargeLogicConnectLib\Models\SetupHostedPaymentResultModel|null $setupHostedOrderResult public property
     */
    public $setupHostedOrderResult;

    /**
     * Constructor to set initial or default values of member properties
     * @param ResponseModel                 $creditCardAuthorizeResult            Initialization value for $this-
     *                                                                              >creditCardAuthorizeResult
     * @param ResponseModel                 $creditCardAddressVerify2Result       Initialization value for $this-
     *                                                                              >creditCardAddressVerify2Result
     * @param ResponseModel                 $creditCardAddressVerifyResult        Initialization value for $this-
     *                                                                              >creditCardAddressVerifyResult
     * @param ResponseModel                 $giftCardBalanceIncreaseResult        Initialization value for $this-
     *                                                                              >giftCardBalanceIncreaseResult
     * @param ResponseModel                 $giftCardBalanceInquiryResult         Initialization value for $this-
     *                                                                              >giftCardBalanceInquiryResult
     * @param ResponseModel                 $giftCardCreditResult                 Initialization value for $this-
     *                                                                              >giftCardCreditResult
     * @param ResponseModel                 $giftCardDeactivateResult             Initialization value for $this-
     *                                                                              >giftCardDeactivateResult
     * @param ResponseModel                 $giftCardActivateResult               Initialization value for $this-
     *                                                                              >giftCardActivateResult
     * @param ResponseModel                 $giftCardAuthorizeResult              Initialization value for $this-
     *                                                                              >giftCardAuthorizeResult
     * @param ResponseModel                 $giftCardChargeResult                 Initialization value for $this-
     *                                                                              >giftCardChargeResult
     * @param ResponseModel                 $checkChargeResult                    Initialization value for $this-
     *                                                                              >checkChargeResult
     * @param SetupHostedPaymentResultModel $setupHostedCheckChargeResult         Initialization value for $this-
     *                                                                              >setupHostedCheckChargeResult
     * @param SetupHostedPaymentResultModel $setupHostedCreditCardAuthorizeResult Initialization value for $this-
     *                                                                              >setupHostedCreditCardAuthorizeResul
     *                                                                              t
     * @param SetupHostedPaymentResultModel $setupHostedOrderResult               Initialization value for $this-
     *                                                                              >setupHostedOrderResult
     */
    public function __construct()
    {
        if (14 == func_num_args()) {
            $this->creditCardAuthorizeResult            = func_get_arg(0);
            $this->creditCardAddressVerify2Result       = func_get_arg(1);
            $this->creditCardAddressVerifyResult        = func_get_arg(2);
            $this->giftCardBalanceIncreaseResult        = func_get_arg(3);
            $this->giftCardBalanceInquiryResult         = func_get_arg(4);
            $this->giftCardCreditResult                 = func_get_arg(5);
            $this->giftCardDeactivateResult             = func_get_arg(6);
            $this->giftCardActivateResult               = func_get_arg(7);
            $this->giftCardAuthorizeResult              = func_get_arg(8);
            $this->giftCardChargeResult                 = func_get_arg(9);
            $this->checkChargeResult                    = func_get_arg(10);
            $this->setupHostedCheckChargeResult         = func_get_arg(11);
            $this->setupHostedCreditCardAuthorizeResult = func_get_arg(12);
            $this->setupHostedOrderResult               = func_get_arg(13);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['CreditCardAuthorizeResult']            = $this->creditCardAuthorizeResult;
        $json['CreditCardAddressVerify2Result']       = $this->creditCardAddressVerify2Result;
        $json['CreditCardAddressVerifyResult']        = $this->creditCardAddressVerifyResult;
        $json['GiftCardBalanceIncreaseResult']        = $this->giftCardBalanceIncreaseResult;
        $json['GiftCardBalanceInquiryResult']         = $this->giftCardBalanceInquiryResult;
        $json['GiftCardCreditResult']                 = $this->giftCardCreditResult;
        $json['GiftCardDeactivateResult']             = $this->giftCardDeactivateResult;
        $json['GiftCardActivateResult']               = $this->giftCardActivateResult;
        $json['GiftCardAuthorizeResult']              = $this->giftCardAuthorizeResult;
        $json['GiftCardChargeResult']                 = $this->giftCardChargeResult;
        $json['CheckChargeResult']                    = $this->checkChargeResult;
        $json['SetupHostedCheckChargeResult']         = $this->setupHostedCheckChargeResult;
        $json['SetupHostedCreditCardAuthorizeResult'] = $this->setupHostedCreditCardAuthorizeResult;
        $json['SetupHostedOrderResult']               = $this->setupHostedOrderResult;

        return $json;
    }
}
