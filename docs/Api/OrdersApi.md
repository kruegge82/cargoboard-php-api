# kruegge82\cargoboard\OrdersApi



All URIs are relative to https://api-sandbox.cargoboard.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancelAnOrder()**](OrdersApi.md#cancelAnOrder) | **POST** /v1/orders/{id}/cancel | Cancel an Order |
| [**getAnOrder()**](OrdersApi.md#getAnOrder) | **GET** /v1/orders/{id} | Get an Order |
| [**getOrders()**](OrdersApi.md#getOrders) | **GET** /v1/orders | Get orders |
| [**getTrackingInformationForAnOrder()**](OrdersApi.md#getTrackingInformationForAnOrder) | **GET** /v1/orders/{id}/tracking | Get tracking information for an Order |
| [**placeAnOrder()**](OrdersApi.md#placeAnOrder) | **POST** /v1/orders | Place an Order |
| [**printConfirmationForAnOrder()**](OrdersApi.md#printConfirmationForAnOrder) | **GET** /v1/orders/{id}/print-confirmation | Print confirmation for an Order |
| [**printShipmentLabelForAnOrder()**](OrdersApi.md#printShipmentLabelForAnOrder) | **GET** /v1/orders/{id}/print-shipment-labels | Print shipment label for an Order |


## `cancelAnOrder()`

```php
cancelAnOrder($id): \kruegge82\cargoboard\Model\ResponseCancelOrder
```

Cancel an Order

Authorization with customer token (XApiKey) or user token (Bearer). Header x-api-key required as cancellation token. For value of id parameter, CUID or reference of order are accepted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-KEY
$config = kruegge82\cargoboard\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\cargoboard\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new kruegge82\cargoboard\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->cancelAnOrder($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->cancelAnOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\cargoboard\Model\ResponseCancelOrder**](../Model/ResponseCancelOrder.md)

### Authorization

[X-API-KEY](../../README.md#X-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getAnOrder()`

```php
getAnOrder($id)
```

Get an Order

Authorization with x-api-key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-KEY
$config = kruegge82\cargoboard\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\cargoboard\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new kruegge82\cargoboard\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string | CUID or reference of order

try {
    $apiInstance->getAnOrder($id);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getAnOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| CUID or reference of order | |

### Return type

void (empty response body)

### Authorization

[X-API-KEY](../../README.md#X-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getOrders()`

```php
getOrders($take, $cursor, $order_by, $filter, $filter_operator, $total): \kruegge82\cargoboard\Model\ResponseGetOrdersForCustomer
```

Get orders

This endpoint is used to Get orders.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-KEY
$config = kruegge82\cargoboard\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\cargoboard\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new kruegge82\cargoboard\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$take = 50; // int | Quantity of orders to take
$cursor = 3.4; // float | Cursor for next page of orders
$order_by = array('order_by_example'); // string[] | Order results by properties
$filter = array('filter_example'); // string[] | Filter results by properties
$filter_operator = 'AND'; // string | Filter operator. Possible values [AND, OR]
$total = false; // bool | Get total quantity of orders

try {
    $result = $apiInstance->getOrders($take, $cursor, $order_by, $filter, $filter_operator, $total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getOrders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **take** | **int**| Quantity of orders to take | [optional] [default to 50] |
| **cursor** | **float**| Cursor for next page of orders | [optional] |
| **order_by** | [**string[]**](../Model/string.md)| Order results by properties | [optional] |
| **filter** | [**string[]**](../Model/string.md)| Filter results by properties | [optional] |
| **filter_operator** | **string**| Filter operator. Possible values [AND, OR] | [optional] [default to &#39;AND&#39;] |
| **total** | **bool**| Get total quantity of orders | [optional] [default to false] |

### Return type

[**\kruegge82\cargoboard\Model\ResponseGetOrdersForCustomer**](../Model/ResponseGetOrdersForCustomer.md)

### Authorization

[X-API-KEY](../../README.md#X-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getTrackingInformationForAnOrder()`

```php
getTrackingInformationForAnOrder($id): \kruegge82\cargoboard\Model\ResponseGetTrackingData
```

Get tracking information for an Order

Authorization with customer token (XApiKey) or user token (Bearer). For value of id parameter, CUID or reference of order are accepted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-KEY
$config = kruegge82\cargoboard\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\cargoboard\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new kruegge82\cargoboard\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->getTrackingInformationForAnOrder($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->getTrackingInformationForAnOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

[**\kruegge82\cargoboard\Model\ResponseGetTrackingData**](../Model/ResponseGetTrackingData.md)

### Authorization

[X-API-KEY](../../README.md#X-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `placeAnOrder()`

```php
placeAnOrder($create_order): \kruegge82\cargoboard\Model\ResponseCreateOrder
```

Place an Order

Authorization with customer token (XApiKey) or user token (Bearer). Orders placed on this endpoint need confirmation for authorization different than wih XApiKey that is customers tokenApi.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-KEY
$config = kruegge82\cargoboard\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\cargoboard\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new kruegge82\cargoboard\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_order = new \kruegge82\cargoboard\Model\CreateOrder(); // \kruegge82\cargoboard\Model\CreateOrder

try {
    $result = $apiInstance->placeAnOrder($create_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->placeAnOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_order** | [**\kruegge82\cargoboard\Model\CreateOrder**](../Model/CreateOrder.md)|  | |

### Return type

[**\kruegge82\cargoboard\Model\ResponseCreateOrder**](../Model/ResponseCreateOrder.md)

### Authorization

[X-API-KEY](../../README.md#X-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `printConfirmationForAnOrder()`

```php
printConfirmationForAnOrder($id): string
```

Print confirmation for an Order

Authorization with customer token (XApiKey) or user token (Bearer). For value of id parameter, CUID or reference of order are accepted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-KEY
$config = kruegge82\cargoboard\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\cargoboard\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new kruegge82\cargoboard\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->printConfirmationForAnOrder($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->printConfirmationForAnOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

### Return type

**string**

### Authorization

[X-API-KEY](../../README.md#X-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `printShipmentLabelForAnOrder()`

```php
printShipmentLabelForAnOrder($id, $format): string
```

Print shipment label for an Order

Authorization with customer token (XApiKey) or user token (Bearer). For value of id parameter, CUID or reference of order are accepted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-KEY
$config = kruegge82\cargoboard\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\cargoboard\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new kruegge82\cargoboard\Api\OrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$format = 'format_example'; // string | Format of document

try {
    $result = $apiInstance->printShipmentLabelForAnOrder($id, $format);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrdersApi->printShipmentLabelForAnOrder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
| **format** | **string**| Format of document | [optional] |

### Return type

**string**

### Authorization

[X-API-KEY](../../README.md#X-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
