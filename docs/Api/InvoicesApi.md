# kruegge82\cargoboard\InvoicesApi

All URIs are relative to https://api-sandbox.cargoboard.com, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getInvoices()**](InvoicesApi.md#getInvoices) | **GET** /v1/invoices | Get invoices |
| [**printsInvoicePdfDocument()**](InvoicesApi.md#printsInvoicePdfDocument) | **GET** /v1/invoices/{id}/pdf | Prints invoice pdf document |


## `getInvoices()`

```php
getInvoices($take, $cursor, $order_by, $filter, $total): \kruegge82\cargoboard\Model\FindManyEasybillInvoicesResponse
```

Get invoices

This endpoint is used to Get invoices.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-KEY
$config = kruegge82\cargoboard\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\cargoboard\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new kruegge82\cargoboard\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$take = 50; // int | Quantity of Easybill invoices to take
$cursor = 3.4; // float | Cursor for next page of Easybill invoices
$order_by = array('order_by_example'); // string[] | Order results by properties
$filter = array('filter_example'); // string[] | Filter results by properties For example, postCodeFrom=\"33100\"
$total = false; // bool | Get total quantity of easybill invoices

try {
    $result = $apiInstance->getInvoices($take, $cursor, $order_by, $filter, $total);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->getInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **take** | **int**| Quantity of Easybill invoices to take | [default to 50] |
| **cursor** | **float**| Cursor for next page of Easybill invoices | [optional] |
| **order_by** | [**string[]**](../Model/string.md)| Order results by properties | [optional] |
| **filter** | [**string[]**](../Model/string.md)| Filter results by properties For example, postCodeFrom&#x3D;\&quot;33100\&quot; | [optional] |
| **total** | **bool**| Get total quantity of easybill invoices | [optional] [default to false] |

### Return type

[**\kruegge82\cargoboard\Model\FindManyEasybillInvoicesResponse**](../Model/FindManyEasybillInvoicesResponse.md)

### Authorization

[X-API-KEY](../../README.md#X-API-KEY)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `printsInvoicePdfDocument()`

```php
printsInvoicePdfDocument($id): string
```

Prints invoice pdf document

Authorization with API_CARGOBOARD_TOKEN OR JWT Token.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: X-API-KEY
$config = kruegge82\cargoboard\Configuration::getDefaultConfiguration()->setApiKey('X-API-KEY', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = kruegge82\cargoboard\Configuration::getDefaultConfiguration()->setApiKeyPrefix('X-API-KEY', 'Bearer');


$apiInstance = new kruegge82\cargoboard\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 'id_example'; // string

try {
    $result = $apiInstance->printsInvoicePdfDocument($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->printsInvoicePdfDocument: ', $e->getMessage(), PHP_EOL;
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
