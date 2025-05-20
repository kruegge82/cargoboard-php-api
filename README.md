# OpenAPIClient-php

&lt;h4&gt;Authentication.&lt;/h4&gt;
&lt;p&gt;Authentication is done with X-API-KEY. You can request a key via mail to api@cargoboard.com.

For more information, please visit [https://cargoboard.com/](https://cargoboard.com/).

## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

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

## API Endpoints

All URIs are relative to *https://api-sandbox.cargoboard.com*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*InvoicesApi* | [**getInvoices**](docs/Api/InvoicesApi.md#getinvoices) | **GET** /v1/invoices | Get invoices
*InvoicesApi* | [**printsInvoicePdfDocument**](docs/Api/InvoicesApi.md#printsinvoicepdfdocument) | **GET** /v1/invoices/{id}/pdf | Prints invoice pdf document
*OrdersApi* | [**cancelAnOrder**](docs/Api/OrdersApi.md#cancelanorder) | **POST** /v1/orders/{id}/cancel | Cancel an Order
*OrdersApi* | [**getAnOrder**](docs/Api/OrdersApi.md#getanorder) | **GET** /v1/orders/{id} | Get an Order
*OrdersApi* | [**getOrders**](docs/Api/OrdersApi.md#getorders) | **GET** /v1/orders | Get orders
*OrdersApi* | [**getTrackingInformationForAnOrder**](docs/Api/OrdersApi.md#gettrackinginformationforanorder) | **GET** /v1/orders/{id}/tracking | Get tracking information for an Order
*OrdersApi* | [**placeAnOrder**](docs/Api/OrdersApi.md#placeanorder) | **POST** /v1/orders | Place an Order
*OrdersApi* | [**printConfirmationForAnOrder**](docs/Api/OrdersApi.md#printconfirmationforanorder) | **GET** /v1/orders/{id}/print-confirmation | Print confirmation for an Order
*OrdersApi* | [**printShipmentLabelForAnOrder**](docs/Api/OrdersApi.md#printshipmentlabelforanorder) | **GET** /v1/orders/{id}/print-shipment-labels | Print shipment label for an Order
*QuotationsApi* | [**bookAnOrderBasedOnAQuotation**](docs/Api/QuotationsApi.md#bookanorderbasedonaquotation) | **POST** /v1/quotations/{id}/book | Book an Order Based on a Quotation
*QuotationsApi* | [**getAQuotation**](docs/Api/QuotationsApi.md#getaquotation) | **GET** /v1/quotations/{id} | Get a Quotation
*QuotationsApi* | [**getQuotations**](docs/Api/QuotationsApi.md#getquotations) | **GET** /v1/quotations | Get quotations
*QuotationsApi* | [**placeAQuotation**](docs/Api/QuotationsApi.md#placeaquotation) | **POST** /v1/quotations | Place a Quotation

## Models

- [AdditionalInformation](docs/Model/AdditionalInformation.md)
- [AddressOrder](docs/Model/AddressOrder.md)
- [AddressQuotation](docs/Model/AddressQuotation.md)
- [Barcode](docs/Model/Barcode.md)
- [BarcodeLevel](docs/Model/BarcodeLevel.md)
- [BarcodeLevelError](docs/Model/BarcodeLevelError.md)
- [CO2Emission](docs/Model/CO2Emission.md)
- [CancelOrder](docs/Model/CancelOrder.md)
- [ConsigneeOrder](docs/Model/ConsigneeOrder.md)
- [ConsigneeQuotation](docs/Model/ConsigneeQuotation.md)
- [ConsignmentLevel](docs/Model/ConsignmentLevel.md)
- [ConsignmentLevelError](docs/Model/ConsignmentLevelError.md)
- [ConsignmentLevelEvent](docs/Model/ConsignmentLevelEvent.md)
- [ConsignmentLevelEventValue](docs/Model/ConsignmentLevelEventValue.md)
- [ContactPerson](docs/Model/ContactPerson.md)
- [CostItemOrder](docs/Model/CostItemOrder.md)
- [CostItemOrderForCustomer](docs/Model/CostItemOrderForCustomer.md)
- [CostItemProduct](docs/Model/CostItemProduct.md)
- [CostItemQuotation](docs/Model/CostItemQuotation.md)
- [CreateLineOrder](docs/Model/CreateLineOrder.md)
- [CreateOrder](docs/Model/CreateOrder.md)
- [CreateQuotation](docs/Model/CreateQuotation.md)
- [CustomerId](docs/Model/CustomerId.md)
- [DangerousGoodOrder](docs/Model/DangerousGoodOrder.md)
- [DangerousGoodQuotation](docs/Model/DangerousGoodQuotation.md)
- [Delivery](docs/Model/Delivery.md)
- [EasybillInvoice](docs/Model/EasybillInvoice.md)
- [FindManyEasybillInvoicesResponse](docs/Model/FindManyEasybillInvoicesResponse.md)
- [FindManyTrackingEventsResponse](docs/Model/FindManyTrackingEventsResponse.md)
- [GeoPosition](docs/Model/GeoPosition.md)
- [HateoasLink](docs/Model/HateoasLink.md)
- [LineOrder](docs/Model/LineOrder.md)
- [LineQuotation](docs/Model/LineQuotation.md)
- [NeutralData](docs/Model/NeutralData.md)
- [Order](docs/Model/Order.md)
- [OrderForCustomer](docs/Model/OrderForCustomer.md)
- [OrderId](docs/Model/OrderId.md)
- [OrderProduct](docs/Model/OrderProduct.md)
- [Price](docs/Model/Price.md)
- [Quotation](docs/Model/Quotation.md)
- [QuotationProduct](docs/Model/QuotationProduct.md)
- [ResponseCancelOrder](docs/Model/ResponseCancelOrder.md)
- [ResponseCreateOrder](docs/Model/ResponseCreateOrder.md)
- [ResponseCreateQuotation](docs/Model/ResponseCreateQuotation.md)
- [ResponseGetOrder](docs/Model/ResponseGetOrder.md)
- [ResponseGetOrders](docs/Model/ResponseGetOrders.md)
- [ResponseGetOrdersForCustomer](docs/Model/ResponseGetOrdersForCustomer.md)
- [ResponseGetQuotation](docs/Model/ResponseGetQuotation.md)
- [ResponseGetQuotations](docs/Model/ResponseGetQuotations.md)
- [ResponseGetTrackingAndOrderData](docs/Model/ResponseGetTrackingAndOrderData.md)
- [ResponseGetTrackingData](docs/Model/ResponseGetTrackingData.md)
- [Runtime](docs/Model/Runtime.md)
- [ScanPoint](docs/Model/ScanPoint.md)
- [ShipperOrder](docs/Model/ShipperOrder.md)
- [ShipperQuotation](docs/Model/ShipperQuotation.md)
- [StatusEvent](docs/Model/StatusEvent.md)
- [TrackingStatus](docs/Model/TrackingStatus.md)
- [TrackingStep](docs/Model/TrackingStep.md)
- [UpdateOrder](docs/Model/UpdateOrder.md)
- [WorkflowInformation](docs/Model/WorkflowInformation.md)

## Authorization

Authentication schemes defined for the API:
### X-API-KEY

- **Type**: API key
- **API key parameter name**: X-API-KEY
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

api@cargoboard.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.5`
    - Generator version: `7.13.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
