# Getting started

## How to Build

The generated code has dependencies over external libraries like UniRest. These dependencies are defined in the ```composer.json``` file that comes with the SDK. 
To resolve these dependencies, we use the Composer package manager which requires PHP greater than 5.3.2 installed in your system. 
Visit [https://getcomposer.org/download/](https://getcomposer.org/download/) to download the installer file for Composer and run it in your system. 
Open command prompt and type ```composer --version```. This should display the current version of the Composer installed if the installation was successful.

* Using command line, navigate to the directory containing the generated files (including ```composer.json```) for the SDK. 
* Run the command ```composer install```. This should install all the required dependencies and create the ```vendor``` directory in your project directory.

![Building SDK - Step 1](https://apidocs.io/illustration/php?step=installDependencies&workspaceFolder=ChargeLogicConnect-PHP)

### [For Windows Users Only] Configuring CURL Certificate Path in php.ini

CURL used to include a list of accepted CAs, but no longer bundles ANY CA certs. So by default it will reject all SSL certificates as unverifiable. You will have to get your CA's cert and point curl at it. The steps are as follows:

1. Download the certificate bundle (.pem file) from [https://curl.haxx.se/docs/caextract.html](https://curl.haxx.se/docs/caextract.html) on to your system.
2. Add curl.cainfo = "PATH_TO/cacert.pem" to your php.ini file located in your php installation. “PATH_TO” must be an absolute path containing the .pem file.

```ini
[curl]
; A default value for the CURLOPT_CAINFO option. This is required to be an
; absolute path.
;curl.cainfo =
```

## How to Use

The following section explains how to use the ChargeLogicConnect library in a new project.

### 1. Open Project in an IDE

Open an IDE for PHP like PhpStorm. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

![Open project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=openIDE&workspaceFolder=ChargeLogicConnect-PHP)

Click on ```Open``` in PhpStorm to browse to your generated SDK directory and then click ```OK```.

![Open project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=openProject0&workspaceFolder=ChargeLogicConnect-PHP)     

### 2. Add a new Test Project

Create a new directory by right clicking on the solution name as shown below:

![Add a new project in PHPStorm - Step 1](https://apidocs.io/illustration/php?step=createDirectory&workspaceFolder=ChargeLogicConnect-PHP)

Name the directory as "test"

![Add a new project in PHPStorm - Step 2](https://apidocs.io/illustration/php?step=nameDirectory&workspaceFolder=ChargeLogicConnect-PHP)
   
Add a PHP file to this project

![Add a new project in PHPStorm - Step 3](https://apidocs.io/illustration/php?step=createFile&workspaceFolder=ChargeLogicConnect-PHP)

Name it "testSDK"

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=nameFile&workspaceFolder=ChargeLogicConnect-PHP)

Depending on your project setup, you might need to include composer's autoloader in your PHP code to enable auto loading of classes.

```PHP
require_once "../vendor/autoload.php";
```

It is important that the path inside require_once correctly points to the file ```autoload.php``` inside the vendor directory created during dependency installations.

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?step=projectFiles&workspaceFolder=ChargeLogicConnect-PHP)

After this you can add code to initialize the client library and acquire the instance of a Controller class. Sample code to initialize the client library and using controller methods is given in the subsequent sections.

### 3. Run the Test Project

To run your project you must set the Interpreter for your project. Interpreter is the PHP engine installed on your computer.

Open ```Settings``` from ```File``` menu.

![Run Test Project - Step 1](https://apidocs.io/illustration/php?step=openSettings&workspaceFolder=ChargeLogicConnect-PHP)

Select ```PHP``` from within ```Languages & Frameworks```

![Run Test Project - Step 2](https://apidocs.io/illustration/php?step=setInterpreter0&workspaceFolder=ChargeLogicConnect-PHP)

Browse for Interpreters near the ```Interpreter``` option and choose your interpreter.

![Run Test Project - Step 3](https://apidocs.io/illustration/php?step=setInterpreter1&workspaceFolder=ChargeLogicConnect-PHP)

Once the interpreter is selected, click ```OK```

![Run Test Project - Step 4](https://apidocs.io/illustration/php?step=setInterpreter2&workspaceFolder=ChargeLogicConnect-PHP)

To run your project, right click on your PHP file inside your Test project and click on ```Run```

![Run Test Project - Step 5](https://apidocs.io/illustration/php?step=runProject&workspaceFolder=ChargeLogicConnect-PHP)

## How to Test

Unit tests in this SDK can be run using PHPUnit. 

1. First install the dependencies using composer including the `require-dev` dependencies.
2. Run `vendor\bin\phpunit --verbose` from commandline to execute tests. If you have 
   installed PHPUnit globally, run tests using `phpunit --verbose` instead.

You can change the PHPUnit test configuration in the `phpunit.xml` file.

## Initialization

### Authentication
In order to setup authentication and initialization of the API client, you need the following information.

| Parameter | Description |
|-----------|-------------|
| basicAuthUserName | The username to use with basic authentication |
| basicAuthPassword | The password to use with basic authentication |



API client can be initialized as following.

```php
$basicAuthUserName = 'basicAuthUserName'; // The username to use with basic authentication
$basicAuthPassword = 'basicAuthPassword'; // The password to use with basic authentication

$client = new ChargeLogicConnectLib\ChargeLogicConnectClient($basicAuthUserName, $basicAuthPassword);
```


# Class Reference

## <a name="list_of_controllers"></a>List of Controllers

* [CreditCardTransactionsController](#credit_card_transactions_controller)
* [GiftCardTransactionsController](#gift_card_transactions_controller)
* [HostedOrdersController](#hosted_orders_controller)
* [ReportingController](#reporting_controller)
* [CheckTransactionsController](#check_transactions_controller)

## <a name="credit_card_transactions_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CreditCardTransactionsController") CreditCardTransactionsController

### Get singleton instance

The singleton instance of the ``` CreditCardTransactionsController ``` class can be accessed from the API Client.

```php
$creditCardTransactions = $client->getCreditCardTransactions();
```

### <a name="create_setup_hosted_credit_card_avs"></a>![Method: ](https://apidocs.io/img/method.png ".CreditCardTransactionsController.createSetupHostedCreditCardAVS") createSetupHostedCreditCardAVS

> Create a hosted payment record for a credit card address verification transaction.


```php
function createSetupHostedCreditCardAVS($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new SetupHostedCreditCardTransactionModel();

$result = $creditCardTransactions->createSetupHostedCreditCardAVS($body);

```


### <a name="create_credit_card_address_verify"></a>![Method: ](https://apidocs.io/img/method.png ".CreditCardTransactionsController.createCreditCardAddressVerify") createCreditCardAddressVerify

> Verify the validity of a credit card and billing address without a transaction parameter (this transaction will not be associated with an order).


```php
function createCreditCardAddressVerify($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CreditCardVerifyTransactionModel();

$result = $creditCardTransactions->createCreditCardAddressVerify($body);

```


### <a name="create_credit_card_address_verify2"></a>![Method: ](https://apidocs.io/img/method.png ".CreditCardTransactionsController.createCreditCardAddressVerify2") createCreditCardAddressVerify2

> Verify the validity of a credit card and billing address. Use this method instead of CreditCardAddressVerify if you want the Address Verify transaction to be imported into ChargeLogic Payments as a part of an order.


```php
function createCreditCardAddressVerify2($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CreditCardTransactionModel();

$result = $creditCardTransactions->createCreditCardAddressVerify2($body);

```


### <a name="create_credit_card_reverse"></a>![Method: ](https://apidocs.io/img/method.png ".CreditCardTransactionsController.createCreditCardReverse") createCreditCardReverse

> Attempts to release funds held by a prior credit card authorization.


```php
function createCreditCardReverse($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new ReferenceTransactionModel();

$result = $creditCardTransactions->createCreditCardReverse($body);

```


### <a name="create_setup_hosted_credit_card_authorize"></a>![Method: ](https://apidocs.io/img/method.png ".CreditCardTransactionsController.createSetupHostedCreditCardAuthorize") createSetupHostedCreditCardAuthorize

> Create a hosted payment record for a credit card authorize transaction.


```php
function createSetupHostedCreditCardAuthorize($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new SetupHostedCreditCardTransactionModel();

$result = $creditCardTransactions->createSetupHostedCreditCardAuthorize($body);

```


### <a name="create_credit_card_authorize"></a>![Method: ](https://apidocs.io/img/method.png ".CreditCardTransactionsController.createCreditCardAuthorize") createCreditCardAuthorize

> Authorize a credit card.


```php
function createCreditCardAuthorize($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new CreditCardTransactionModel();

$result = $creditCardTransactions->createCreditCardAuthorize($body);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="gift_card_transactions_controller"></a>![Class: ](https://apidocs.io/img/class.png ".GiftCardTransactionsController") GiftCardTransactionsController

### Get singleton instance

The singleton instance of the ``` GiftCardTransactionsController ``` class can be accessed from the API Client.

```php
$giftCardTransactions = $client->getGiftCardTransactions();
```

### <a name="create_gift_card_authorize"></a>![Method: ](https://apidocs.io/img/method.png ".GiftCardTransactionsController.createGiftCardAuthorize") createGiftCardAuthorize

> Reserve funds on a gift card.


```php
function createGiftCardAuthorize($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new GiftCardTransactionModel();

$result = $giftCardTransactions->createGiftCardAuthorize($body);

```


### <a name="create_gift_card_activate"></a>![Method: ](https://apidocs.io/img/method.png ".GiftCardTransactionsController.createGiftCardActivate") createGiftCardActivate

> Activate a gift card.


```php
function createGiftCardActivate($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new GiftCardTransactionModel();

$result = $giftCardTransactions->createGiftCardActivate($body);

```


### <a name="create_gift_card_settle"></a>![Method: ](https://apidocs.io/img/method.png ".GiftCardTransactionsController.createGiftCardSettle") createGiftCardSettle

> Settle funds form a prior approved gift card authorization.


```php
function createGiftCardSettle($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new ReferenceTransactionModel();

$result = $giftCardTransactions->createGiftCardSettle($body);

```


### <a name="create_gift_card_credit"></a>![Method: ](https://apidocs.io/img/method.png ".GiftCardTransactionsController.createGiftCardCredit") createGiftCardCredit

> Return funds to an active gift card unrelated to a prior sale.


```php
function createGiftCardCredit($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new GiftCardTransactionModel();

$result = $giftCardTransactions->createGiftCardCredit($body);

```


### <a name="create_gift_card_reverse"></a>![Method: ](https://apidocs.io/img/method.png ".GiftCardTransactionsController.createGiftCardReverse") createGiftCardReverse

> Release funds held by a gift card authorization.


```php
function createGiftCardReverse($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new ReferenceTransactionModel();

$result = $giftCardTransactions->createGiftCardReverse($body);

```


### <a name="create_gift_card_deactivate"></a>![Method: ](https://apidocs.io/img/method.png ".GiftCardTransactionsController.createGiftCardDeactivate") createGiftCardDeactivate

> Remove an active gift card from service.


```php
function createGiftCardDeactivate($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new GiftCardTransactionModel();

$result = $giftCardTransactions->createGiftCardDeactivate($body);

```


### <a name="create_gift_card_void"></a>![Method: ](https://apidocs.io/img/method.png ".GiftCardTransactionsController.createGiftCardVoid") createGiftCardVoid

> Void a prior financial gift card transaction.


```php
function createGiftCardVoid($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new ReferenceTransactionModel();

$result = $giftCardTransactions->createGiftCardVoid($body);

```


### <a name="create_gift_card_balance_inquiry"></a>![Method: ](https://apidocs.io/img/method.png ".GiftCardTransactionsController.createGiftCardBalanceInquiry") createGiftCardBalanceInquiry

> Check the balance on an active gift card.


```php
function createGiftCardBalanceInquiry($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new GiftCardBalanceModel();

$result = $giftCardTransactions->createGiftCardBalanceInquiry($body);

```


### <a name="create_gift_card_charge"></a>![Method: ](https://apidocs.io/img/method.png ".GiftCardTransactionsController.createGiftCardCharge") createGiftCardCharge

> Redeem funds from an active gift card.


```php
function createGiftCardCharge($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new GiftCardTransactionModel();

$result = $giftCardTransactions->createGiftCardCharge($body);

```


### <a name="create_gift_card_refund"></a>![Method: ](https://apidocs.io/img/method.png ".GiftCardTransactionsController.createGiftCardRefund") createGiftCardRefund

> Return funds to a gift card.


```php
function createGiftCardRefund($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new ReferenceTransactionModel();

$result = $giftCardTransactions->createGiftCardRefund($body);

```


### <a name="create_gift_card_balance_increase"></a>![Method: ](https://apidocs.io/img/method.png ".GiftCardTransactionsController.createGiftCardBalanceIncrease") createGiftCardBalanceIncrease

> Add value to an active gift card.


```php
function createGiftCardBalanceIncrease($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new GiftCardTransactionModel();

$result = $giftCardTransactions->createGiftCardBalanceIncrease($body);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="hosted_orders_controller"></a>![Class: ](https://apidocs.io/img/class.png ".HostedOrdersController") HostedOrdersController

### Get singleton instance

The singleton instance of the ``` HostedOrdersController ``` class can be accessed from the API Client.

```php
$hostedOrders = $client->getHostedOrders();
```

### <a name="create_unfinalize_order"></a>![Method: ](https://apidocs.io/img/method.png ".HostedOrdersController.createUnfinalizeOrder") createUnfinalizeOrder

> Change the status of a hosted order from Finalized to Unfinalized, thereby preventing it from being retrieved by the accounting system. This can only succeed if the order has not already been retrieved.


```php
function createUnfinalizeOrder($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new FinalizeOrderModel();

$result = $hostedOrders->createUnfinalizeOrder($body);

```


### <a name="create_finalize_order"></a>![Method: ](https://apidocs.io/img/method.png ".HostedOrdersController.createFinalizeOrder") createFinalizeOrder

> Finalize an order started by a call to SetupHostedOrder; call this method after all transaction calls have completed.


```php
function createFinalizeOrder($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new FinalizeOrderModel();

$hostedOrders->createFinalizeOrder($body);

```


### <a name="create_setup_hosted_order"></a>![Method: ](https://apidocs.io/img/method.png ".HostedOrdersController.createSetupHostedOrder") createSetupHostedOrder

> Create a hosted order that will be retrieved by the accounting system when finalized; when using this method, the hosted payment window is not used.


```php
function createSetupHostedOrder($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new SetupHostedCreditCardTransactionModel();

$result = $hostedOrders->createSetupHostedOrder($body);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="reporting_controller"></a>![Class: ](https://apidocs.io/img/class.png ".ReportingController") ReportingController

### Get singleton instance

The singleton instance of the ``` ReportingController ``` class can be accessed from the API Client.

```php
$reporting = $client->getReporting();
```

### <a name="create_query_order"></a>![Method: ](https://apidocs.io/img/method.png ".ReportingController.createQueryOrder") createQueryOrder

> Return information about a Hosted Order.


```php
function createQueryOrder($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new QueryOrderModel();

$result = $reporting->createQueryOrder($body);

```


[Back to List of Controllers](#list_of_controllers)

## <a name="check_transactions_controller"></a>![Class: ](https://apidocs.io/img/class.png ".CheckTransactionsController") CheckTransactionsController

### Get singleton instance

The singleton instance of the ``` CheckTransactionsController ``` class can be accessed from the API Client.

```php
$checkTransactions = $client->getCheckTransactions();
```

### <a name="create_check_charge"></a>![Method: ](https://apidocs.io/img/method.png ".CheckTransactionsController.createCheckCharge") createCheckCharge

> Deducts funds from a demand deposit account.


```php
function createCheckCharge($checkTransaction)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| checkTransaction |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$checkTransaction = new CheckTransactionModel();

$result = $checkTransactions->createCheckCharge($checkTransaction);

```


### <a name="create_setup_hosted_check_charge"></a>![Method: ](https://apidocs.io/img/method.png ".CheckTransactionsController.createSetupHostedCheckCharge") createSetupHostedCheckCharge

> Create a hosted payment record for a check charge transaction.


```php
function createSetupHostedCheckCharge($body)
```

#### Parameters

| Parameter | Tags | Description |
|-----------|------|-------------|
| body |  ``` Required ```  | TODO: Add a parameter description |



#### Example Usage

```php
$body = new SetupHostedCheckTransactionModel();

$result = $checkTransactions->createSetupHostedCheckCharge($body);

```


[Back to List of Controllers](#list_of_controllers)



