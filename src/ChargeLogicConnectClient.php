<?php
/*
 * ChargeLogicConnect
 *
 * This file was automatically generated for ChargeLogic Connect by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace ChargeLogicConnectLib;

use ChargeLogicConnectLib\Controllers;

/**
 * ChargeLogicConnect client class
 */
class ChargeLogicConnectClient
{
    /**
     * Constructor with authentication and configuration parameters
     */
    public function __construct(
        $basicAuthUserName = null,
        $basicAuthPassword = null
    ) {
        Configuration::$basicAuthUserName = $basicAuthUserName ? $basicAuthUserName : Configuration::$basicAuthUserName;
        Configuration::$basicAuthPassword = $basicAuthPassword ? $basicAuthPassword : Configuration::$basicAuthPassword;
    }
    /**
     * Singleton access to CreditCardTransactions controller
     * @return Controllers\CreditCardTransactionsController The *Singleton* instance
     */
    public function getCreditCardTransactions()
    {
        return Controllers\CreditCardTransactionsController::getInstance();
    }
    /**
     * Singleton access to GiftCardTransactions controller
     * @return Controllers\GiftCardTransactionsController The *Singleton* instance
     */
    public function getGiftCardTransactions()
    {
        return Controllers\GiftCardTransactionsController::getInstance();
    }
    /**
     * Singleton access to HostedOrders controller
     * @return Controllers\HostedOrdersController The *Singleton* instance
     */
    public function getHostedOrders()
    {
        return Controllers\HostedOrdersController::getInstance();
    }
    /**
     * Singleton access to Reporting controller
     * @return Controllers\ReportingController The *Singleton* instance
     */
    public function getReporting()
    {
        return Controllers\ReportingController::getInstance();
    }
    /**
     * Singleton access to CheckTransactions controller
     * @return Controllers\CheckTransactionsController The *Singleton* instance
     */
    public function getCheckTransactions()
    {
        return Controllers\CheckTransactionsController::getInstance();
    }
}
