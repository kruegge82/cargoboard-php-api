# # CreateOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product** | **string** | The product for which a quotation should be received. Possible values: DIRECT, EXPRESS, EXPRESS_8, EXPRESS_10, EXPRESS_12, EXPRESS_16, FIX, FIX_8, FIX_10, FIX_12, FIX_16, STANDARD. |
**shipper** | [**\kruegge82\cargoboard\Model\ShipperOrder**](ShipperOrder.md) |  |
**consignee** | [**\kruegge82\cargoboard\Model\ConsigneeOrder**](ConsigneeOrder.md) |  |
**lines** | [**\kruegge82\cargoboard\Model\CreateLineOrder[]**](CreateLineOrder.md) | Line for a product. |
**customer_order_code** | **string** | A code applied by customer that will appear on documents as CustomerOrderNo | [optional]
**coupon_code** | **string** | A code applied by customer that will allow for special actions like discount etc. | [optional]
**wants_export_declaration** | **bool** | A service where shipment will be declared for customs. Some customers do this by themselves and others book this option. This service should be only possible if shipment goes to, or comes from a country outside of the EU, like Great Britain, Norway, Switzerland. | [optional] [default to false]
**wants_climate_neutral_shipment** | **bool** | Negative environmental impact will be reduced for this service. | [optional] [default to true]
**wants_insurance** | **bool** | Cargoboard will organize an insurance for this shipment. goodsValueAmount is necessary if you set wantsInsurance | [optional] [default to false]
**value_of_goods_amount** | **float** | Amount of money - value of goods for insurance or customs | [optional]
**value_of_goods_currency** | **string** | Currency of value of goods. Possible values EUR | [optional]
**incoterm** | **string** | Incoterm - should always be STANDARD and if you ship to Switzerland, or UK it should be DAP | [optional]
**is_supplying_company_or_receiving_customer** | **bool** | Has to be set if shipment is going to Switzerland or other non-EU countries for tax reasons. If true customer is supplying company or receiving customer. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
