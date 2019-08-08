<?php
/*
 * ChargeLogicConnect
 *
 * This file was automatically generated for ChargeLogic Connect by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace ChargeLogicConnectLib\Models;

use JsonSerializable;

/**
 *A HostedPayment object describes the properties needed to create a Hosted Order, Hosted Payment
 * Page, or Hosted Payment Window.
 */
class HostedPayment implements JsonSerializable
{
    /**
     * Indicates whether the hosted payment window should require that the cardholder enter the Card
     * Verification Value; must be “Yes” or “No”
     * @required
     * @maps RequireCVV
     * @var string $requireCVV public property
     */
    public $requireCVV;

    /**
     * The URL to which the cardholder should be redirected after the hosted payment has been completed or
     * aborted. The format is ReturnURL?
     * HostedPaymentID=HostedPaymentID&ConfirmationID=ConfirmationID&Action=Approve&MaskedAccountNumber=Mas
     * kedAccountNumber&Token=Token&ExpirationMonth=ExpirationMonth&ExpirationYear=ExpirationYear&AccountTy
     * pe=AccountType, where HostedPaymentID is the Hosted Payment ID passed into the hosted payment page,
     * ConfirmationID is the Confirmation ID passed into the transaction setup method, MaskedAccountNumber
     * is a masked version of the account number used for payment, Token is a 32 character alphanumeric
     * token, ExpirationMonth is a two digit expiration month, ExpirationYear is a two digit expiration
     * year, and AccountType is an account type (e.g., Visa, MasterCard, etc.). The Confirmation ID serves
     * as verification that the transaction was truly approved, as only the merchant’s application and
     * ChargeLogic Connect know the value. NOTE: When providing a CallbackURL, the parameters returned to
     * the ReturnURL will be limited to HostedPaymentID and ConfirmationID. The maximum length is 100.
     * @required
     * @maps ReturnURL
     * @var string $returnURL public property
     */
    public $returnURL;

    /**
     * The unique value generated by the merchant’s application that represents this hosted payment; will
     * be returned to the merchant’s application upon completion of the payment
     * @required
     * @maps ConfirmationID
     * @var string $confirmationID public property
     */
    public $confirmationID;

    /**
     * Specify a URL for the ChargeLogic Connect server to send a GET request to when the payment has been
     * approved. The format will be CallbackURL?
     * HostedPaymentID=HostedPaymentID&ConfirmationID=ConfirmationID&Action=Approve&MaskedAccountNumber=Mas
     * kedAccountNumber&Token=Token&ExpirationMonth=ExpirationMonth&ExpirationYear=ExpirationYear&AccountTy
     * pe=AccountType, where HostedPaymentID is the Hosted Payment ID passed into the hosted payment page,
     * ConfirmationID is the Confirmation ID passed into the transaction setup method, MaskedAccountNumber
     * is a masked version of the account number used for payment, Token is a 32 character alphanumeric
     * token, ExpirationMonth is a two digit expiration month, ExpirationYear is a two digit expiration
     * year, and AccountType is an account type (e.g., Visa, MasterCard, etc.). The Confirmation ID serves
     * as verification that the transaction was truly approved, as only the merchant’s application and
     * ChargeLogic Connect know the value. The maximum length is 100.
     * @maps CallbackURL
     * @var string|null $callbackURL public property
     */
    public $callbackURL;

    /**
     * The three-character alphabetic ISO cardholder language code
     * @maps Language
     * @var string|null $language public property
     */
    public $language;

    /**
     * The URL of the merchant’s logo image to be displayed on the hosted payment page. The maximum length
     * is 100.
     * @maps LogoURL
     * @var string|null $logoURL public property
     */
    public $logoURL;

    /**
     * The Shipping Agent Code that matches the Shipping Agent Code in the ERP system. The maximum length
     * is 10.
     * @maps ShippingAgent
     * @var string|null $shippingAgent public property
     */
    public $shippingAgent;

    /**
     * The shipping agent description to be displayed on the web order confirmation for Hosted Orders. The
     * maximum length is 50.
     * @maps ShippingAgentDescription
     * @var string|null $shippingAgentDescription public property
     */
    public $shippingAgentDescription;

    /**
     * The Shipping Agent Service Code that matches the Code from the ERP system. The maximum length is 10.
     * @maps ShippingAgentService
     * @var string|null $shippingAgentService public property
     */
    public $shippingAgentService;

    /**
     * The shipping agent service description to be displayed on the web order confirmation for Hosted
     * Orders. The maximum length is 50.
     * @maps ShippingAgentServiceDescription
     * @var string|null $shippingAgentServiceDescription public property
     */
    public $shippingAgentServiceDescription;

    /**
     * The hex code for the hosted payment frame’s background color; has no effect if Embedded=No
     * @maps PageBackgroundColor
     * @var string|null $pageBackgroundColor public property
     */
    public $pageBackgroundColor;

    /**
     * The hex code for the hosted payment page’s buttons; has no effect if Embedded=Yes
     * @maps ButtonBackgroundColor
     * @var string|null $buttonBackgroundColor public property
     */
    public $buttonBackgroundColor;

    /**
     * The hex code for the header text on the hosted payment page; has no effect if Embedded=Yes
     * @maps HeaderFontColor
     * @var string|null $headerFontColor public property
     */
    public $headerFontColor;

    /**
     * The hex code for the field labels on the hosted payment frame; has no effect if Embedded=No
     * @maps FieldLabelFontColor
     * @var string|null $fieldLabelFontColor public property
     */
    public $fieldLabelFontColor;

    /**
     * The hex code for the borders on the hosted payment page; has no effect if Embedded=Yes
     * @maps BorderColor
     * @var string|null $borderColor public property
     */
    public $borderColor;

    /**
     * The hex color for errors displayed on the hosted payment page; has no effect if Embedded=Yes
     * @maps ErrorColor
     * @var string|null $errorColor public property
     */
    public $errorColor;

    /**
     * Indicated whether ChargeLogic Connect should display the hosted payment frame; must be “Yes” or
     * “No”
     * @maps Embedded
     * @var string|null $embedded public property
     */
    public $embedded;

    /**
     * When a Hosted Payment Page or Hosted Payment Window transaction is approved, the system will
     * normally finalize the Hosted Order, marking it ready for import. If you do not want the system to
     * finalize the order automatically, set this value to "Yes". Valid values are "Yes" and "No".
     * @maps RequireFinalize
     * @var string|null $requireFinalize public property
     */
    public $requireFinalize;

    /**
     * The URL of the ChargeLogic Connect Merchant Resource file; must be in the same domain as the
     * embedded frame’s parent. The maximum length is 100.
     * @maps MerchantResourceURL
     * @var string|null $merchantResourceURL public property
     */
    public $merchantResourceURL;

    /**
     * The name of the salesperson to be displayed on a web invoice. The maximum length is 50.
     * @maps Salesperson
     * @var string|null $salesperson public property
     */
    public $salesperson;

    /**
     * If the customer paid via a web payment method like PayPal, you can specify the ChargeLogic Payments
     * Gateway No. of the web payment type.
     * @maps WebPaymentGateway
     * @var string|null $webPaymentGateway public property
     */
    public $webPaymentGateway;

    /**
     * The web payment transaction ID, if the customer paid via a web payment method like PayPal.
     * @maps WebPaymentTransactionID
     * @var string|null $webPaymentTransactionID public property
     */
    public $webPaymentTransactionID;

    /**
     * The amount of the web payment transaction that occurred via a web payment method like PayPal.
     * @maps WebPaymentAmount
     * @var string|null $webPaymentAmount public property
     */
    public $webPaymentAmount;

    /**
     * An array of class ExtraDataField to be passed to the ERP system for populating Sales Header fields
     * @maps ExtraDataField
     * @var \ChargeLogicConnectLib\Models\ExtraData[]|null $extraDataField public property
     */
    public $extraDataField;

    /**
     * A Comment object
     * @maps Comment
     * @var \ChargeLogicConnectLib\Models\Comment[]|null $comment public property
     */
    public $comment;

    /**
     * Constructor to set initial or default values of member properties
     * @param string $requireCVV                      Initialization value for $this->requireCVV
     * @param string $returnURL                       Initialization value for $this->returnURL
     * @param string $confirmationID                  Initialization value for $this->confirmationID
     * @param string $callbackURL                     Initialization value for $this->callbackURL
     * @param string $language                        Initialization value for $this->language
     * @param string $logoURL                         Initialization value for $this->logoURL
     * @param string $shippingAgent                   Initialization value for $this->shippingAgent
     * @param string $shippingAgentDescription        Initialization value for $this->shippingAgentDescription
     * @param string $shippingAgentService            Initialization value for $this->shippingAgentService
     * @param string $shippingAgentServiceDescription Initialization value for $this->shippingAgentServiceDescription
     * @param string $pageBackgroundColor             Initialization value for $this->pageBackgroundColor
     * @param string $buttonBackgroundColor           Initialization value for $this->buttonBackgroundColor
     * @param string $headerFontColor                 Initialization value for $this->headerFontColor
     * @param string $fieldLabelFontColor             Initialization value for $this->fieldLabelFontColor
     * @param string $borderColor                     Initialization value for $this->borderColor
     * @param string $errorColor                      Initialization value for $this->errorColor
     * @param string $embedded                        Initialization value for $this->embedded
     * @param string $requireFinalize                 Initialization value for $this->requireFinalize
     * @param string $merchantResourceURL             Initialization value for $this->merchantResourceURL
     * @param string $salesperson                     Initialization value for $this->salesperson
     * @param string $webPaymentGateway               Initialization value for $this->webPaymentGateway
     * @param string $webPaymentTransactionID         Initialization value for $this->webPaymentTransactionID
     * @param string $webPaymentAmount                Initialization value for $this->webPaymentAmount
     * @param array  $extraDataField                  Initialization value for $this->extraDataField
     * @param array  $comment                         Initialization value for $this->comment
     */
    public function __construct()
    {
        if (25 == func_num_args()) {
            $this->requireCVV                      = func_get_arg(0);
            $this->returnURL                       = func_get_arg(1);
            $this->confirmationID                  = func_get_arg(2);
            $this->callbackURL                     = func_get_arg(3);
            $this->language                        = func_get_arg(4);
            $this->logoURL                         = func_get_arg(5);
            $this->shippingAgent                   = func_get_arg(6);
            $this->shippingAgentDescription        = func_get_arg(7);
            $this->shippingAgentService            = func_get_arg(8);
            $this->shippingAgentServiceDescription = func_get_arg(9);
            $this->pageBackgroundColor             = func_get_arg(10);
            $this->buttonBackgroundColor           = func_get_arg(11);
            $this->headerFontColor                 = func_get_arg(12);
            $this->fieldLabelFontColor             = func_get_arg(13);
            $this->borderColor                     = func_get_arg(14);
            $this->errorColor                      = func_get_arg(15);
            $this->embedded                        = func_get_arg(16);
            $this->requireFinalize                 = func_get_arg(17);
            $this->merchantResourceURL             = func_get_arg(18);
            $this->salesperson                     = func_get_arg(19);
            $this->webPaymentGateway               = func_get_arg(20);
            $this->webPaymentTransactionID         = func_get_arg(21);
            $this->webPaymentAmount                = func_get_arg(22);
            $this->extraDataField                  = func_get_arg(23);
            $this->comment                         = func_get_arg(24);
        }
    }


    /**
     * Encode this object to JSON
     */
    public function jsonSerialize()
    {
        $json = array();
        $json['RequireCVV']                      = $this->requireCVV;
        $json['ReturnURL']                       = $this->returnURL;
        $json['ConfirmationID']                  = $this->confirmationID;
        $json['CallbackURL']                     = $this->callbackURL;
        $json['Language']                        = $this->language;
        $json['LogoURL']                         = $this->logoURL;
        $json['ShippingAgent']                   = $this->shippingAgent;
        $json['ShippingAgentDescription']        = $this->shippingAgentDescription;
        $json['ShippingAgentService']            = $this->shippingAgentService;
        $json['ShippingAgentServiceDescription'] = $this->shippingAgentServiceDescription;
        $json['PageBackgroundColor']             = $this->pageBackgroundColor;
        $json['ButtonBackgroundColor']           = $this->buttonBackgroundColor;
        $json['HeaderFontColor']                 = $this->headerFontColor;
        $json['FieldLabelFontColor']             = $this->fieldLabelFontColor;
        $json['BorderColor']                     = $this->borderColor;
        $json['ErrorColor']                      = $this->errorColor;
        $json['Embedded']                        = $this->embedded;
        $json['RequireFinalize']                 = $this->requireFinalize;
        $json['MerchantResourceURL']             = $this->merchantResourceURL;
        $json['Salesperson']                     = $this->salesperson;
        $json['WebPaymentGateway']               = $this->webPaymentGateway;
        $json['WebPaymentTransactionID']         = $this->webPaymentTransactionID;
        $json['WebPaymentAmount']                = $this->webPaymentAmount;
        $json['ExtraDataField']                  = $this->extraDataField;
        $json['Comment']                         = $this->comment;

        return $json;
    }
}