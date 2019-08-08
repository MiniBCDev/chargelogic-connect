<?php
/*
 * ChargeLogicConnect
 *
 * This file was automatically generated for ChargeLogic Connect by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace ChargeLogicConnectLib;

/**
 * All configuration including auth info and base URI for the API access
 * are configured in this class.
 */
class Configuration
{
    /**
     * The environment being used'
     * @var string
     */
    public static $environment = Environments::CHARGELOGIC_CONNECT;

    /**
     * ChargeLogic Connect REST Endpoint
     * @var string
     */
    public static $defaultServerUrl = 'replace.with.server.name';

    /**
     * The username to use with basic authentication
     * @var string
     */
    public static $basicAuthUserName = 'TODO: Replace';

    /**
     * The password to use with basic authentication
     * @var string
     */
    public static $basicAuthPassword = 'TODO: Replace';

    /**
     * Get the base uri for a given server in the current environment
     * @param  string $server Server name
     * @return string         Base URI
     */
    public static function getBaseUri($server = Servers::CHARGELOGIC_CONNECT_REST_ENDPOINT)
    {
        return APIHelper::appendUrlWithTemplateParameters(
            static::$environmentsMap[static::$environment][$server],
            array(
                'defaultServerUrl' => static::$defaultServerUrl,
            )
        );
    }

    /**
     * A map of all baseurls used in different environments and servers
     * @var array
     */
    private static $environmentsMap = array(
        Environments::CHARGELOGIC_CONNECT => array(
            Servers::CHARGELOGIC_CONNECT_REST_ENDPOINT => 'https://{defaultServerUrl}/ChargeLogicConnect.svc',
        ),
    );
}
