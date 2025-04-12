# kruegge82\cargoboard\QuotationsApi

All URIs are relative to https://api-sandbox.cargoboard.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**bookAnOrderBasedOnAQuotation()**](QuotationsApi.md#bookAnOrderBasedOnAQuotation) | **POST** /v1/quotations/{id}/book | Book an Order Based on a Quotation |
| [**getAQuotation()**](QuotationsApi.md#getAQuotation) | **GET** /v1/quotations/{id} | Get a Quotation |
| [**getQuotations()**](QuotationsApi.md#getQuotations) | **GET** /v1/quotations | Get quotations |
| [**placeAQuotation()**](QuotationsApi.md#placeAQuotation) | **POST** /v1/quotations | Place a Quotation |


## `bookAnOrderBasedOnAQuotation()`

```php
bookAnOrderBasedOnAQuotation($id, $create_order): \kruegge82\cargoboard\Model\ResponseCreateOrder
```

Book an Order Based on a Quotation

This endpoint is used to Book an Order Based on a Quotation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-KEY
$config = kruegge82\cargoboard\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\cargoboard\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new kruegge82\cargoboard\Api\QuotationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string
$create_order = new \kruegge82\cargoboard\Model\CreateOrder(); // \kruegge82\cargoboard\Model\CreateOrder

try {
    $result = $apiInstance->bookAnOrderBasedOnAQuotation($id, $create_order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotationsApi->bookAnOrderBasedOnAQuotation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |
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

## `getAQuotation()`

```php
getAQuotation($id)
```

Get a Quotation

Authorization with x-api-key.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-KEY
$config = kruegge82\cargoboard\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\cargoboard\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new kruegge82\cargoboard\Api\QuotationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $apiInstance->getAQuotation($id);
} catch (Exception $e) {
    echo 'Exception when calling QuotationsApi->getAQuotation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**|  | |

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

## `getQuotations()`

```php
getQuotations($take, $cursor, $order_by, $filter, $filter_operator, $total): \kruegge82\cargoboard\Model\ResponseGetQuotations
```

Get quotations

This endpoint is used to Get quotations.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-KEY
$config = kruegge82\cargoboard\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\cargoboard\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new kruegge82\cargoboard\Api\QuotationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$take = 50; // int | Quantity of quotations to take
$cursor = 3.4; // float | Cursor for next page of quotations
$order_by = array('order_by_example'); // string[] | Order results by properties
$filter = array('filter_example'); // string[] | Filter results by properties
$filter_operator = 'AND'; // string | Filter operator. Possible values [AND, OR]
$total = false; // bool | Get total quantity of quotations

try {
    $result = $apiInstance->getQuotations($take, $cursor, $order_by, $filter, $filter_operator, $total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotationsApi->getQuotations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **take** | **int**| Quantity of quotations to take | [optional] [default to 50] |
| **cursor** | **float**| Cursor for next page of quotations | [optional] |
| **order_by** | [**string[]**](../Model/string.md)| Order results by properties | [optional] |
| **filter** | [**string[]**](../Model/string.md)| Filter results by properties | [optional] |
| **filter_operator** | **string**| Filter operator. Possible values [AND, OR] | [optional] [default to &#39;AND&#39;] |
| **total** | **bool**| Get total quantity of quotations | [optional] [default to false] |

### Return type

[**\kruegge82\cargoboard\Model\ResponseGetQuotations**](../Model/ResponseGetQuotations.md)

### Authorization

[X-API-KEY](../../README.md#X-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `placeAQuotation()`

```php
placeAQuotation($create_quotation): \kruegge82\cargoboard\Model\ResponseCreateQuotation
```

Place a Quotation

This endpoint is used to place a Quotation for a shipment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-KEY
$config = kruegge82\cargoboard\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\cargoboard\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new kruegge82\cargoboard\Api\QuotationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_quotation = new \kruegge82\cargoboard\Model\CreateQuotation(); // \kruegge82\cargoboard\Model\CreateQuotation

try {
    $result = $apiInstance->placeAQuotation($create_quotation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling QuotationsApi->placeAQuotation: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_quotation** | [**\kruegge82\cargoboard\Model\CreateQuotation**](../Model/CreateQuotation.md)|  | |

### Return type

[**\kruegge82\cargoboard\Model\ResponseCreateQuotation**](../Model/ResponseCreateQuotation.md)

### Authorization

[X-API-KEY](../../README.md#X-API-KEY)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
