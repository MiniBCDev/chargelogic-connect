<?php
/*
 * ChargeLogicConnect
 *
 * This file was automatically generated for ChargeLogic Connect by APIMATIC v2.0 ( https://apimatic.io ).
 */

namespace ChargeLogicConnectLib\Controllers;

use ChargeLogicConnectLib\APIException;
use ChargeLogicConnectLib\APIHelper;
use ChargeLogicConnectLib\Configuration;
use ChargeLogicConnectLib\Models;
use ChargeLogicConnectLib\Exceptions;
use ChargeLogicConnectLib\Http\HttpRequest;
use ChargeLogicConnectLib\Http\HttpResponse;
use ChargeLogicConnectLib\Http\HttpMethod;
use ChargeLogicConnectLib\Http\HttpContext;
use ChargeLogicConnectLib\Servers;
use Unirest\Request;

/**
 * @todo Add a general description for this controller.
 */
class ReportingController extends BaseController
{
    /**
     * @var ReportingController The reference to *Singleton* instance of this class
     */
    private static $instance;

    /**
     * Returns the *Singleton* instance of this class.
     * @return ReportingController The *Singleton* instance.
     */
    public static function getInstance()
    {
        if (null === static::$instance) {
            static::$instance = new static();
        }
        
        return static::$instance;
    }

    /**
     * Return information about a Hosted Order.
     *
     * @param Models\QueryOrderModel $body TODO: type description here
     * @return mixed response from the API call
     * @throws APIException Thrown if API call fails
     */
    public function createQueryOrder(
        $body
    ) {

        //prepare query string for API call
        $_queryBuilder = '/QueryOrder';

        //validate and preprocess url
        $_queryUrl = APIHelper::cleanUrl(Configuration::getBaseUri() . $_queryBuilder);

        //prepare headers
        $_headers = array (
            'user-agent'    => BaseController::USER_AGENT,
            'Accept'        => 'application/json',
            'content-type'  => 'application/json; charset=utf-8'
        );

        //json encode body
        $_bodyJson = Request\Body::Json($body);

        //set HTTP basic auth parameters
        Request::auth(Configuration::$basicAuthUserName, Configuration::$basicAuthPassword);

        //call on-before Http callback
        $_httpRequest = new HttpRequest(HttpMethod::POST, $_headers, $_queryUrl);
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnBeforeRequest($_httpRequest);
        }

        //and invoke the API call request to fetch the response
        $response = Request::post($_queryUrl, $_headers, $_bodyJson);

        $_httpResponse = new HttpResponse($response->code, $response->headers, $response->raw_body);
        $_httpContext = new HttpContext($_httpRequest, $_httpResponse);

        //call on-after Http callback
        if ($this->getHttpCallBack() != null) {
            $this->getHttpCallBack()->callOnAfterRequest($_httpContext);
        }

        //handle errors defined at the API level
        $this->validateResponse($_httpResponse, $_httpContext);

        $mapper = $this->getJsonMapper();

        return $mapper->mapClass($response->body, 'ChargeLogicConnectLib\\Models\\QueryOrdersResultModel');
    }
}
