# # Quotation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**product** | **string** | The product for which a quotation should be received. Possible values: DIRECT, EXPRESS, EXPRESS_8, EXPRESS_10, EXPRESS_12, EXPRESS_16, FIX, FIX_8, FIX_10, FIX_12, FIX_16, STANDARD. |
**transport_type** | **string** | Transport type of order. Possible values GROUPAGE, PART_LOAD, DIRECT | [optional]
**customer_order_code** | **string** | A code applied by customer that will appear on documents as CustomerOrderNo | [optional]
**coupon_code** | **string** | A code applied by customer that will allow for special actions like discount etc. | [optional]
**wants_export_declaration** | **bool** | A service where shipment will be declared for customs. Some customers do this by themselves and others book this option. This service should be only possible if shipment goes to, or comes from a country outside of the EU, like Great Britain, Norway, Switzerland. | [optional] [default to false]
**wants_climate_neutral_shipment** | **bool** | Negative environmental impact will be reduced for this service. | [optional] [default to true]
**wants_insurance** | **bool** | Cargoboard will organize an insurance for this shipment. goodsValueAmount is necessary if you set wantsInsurance | [optional] [default to false]
**incoterm** | **string** | Incoterm - should always be STANDARD and if you ship to Switzerland, or UK it should be DAP | [optional]
**shipper** | [**\kruegge82\cargoboard\Model\ShipperQuotation**](ShipperQuotation.md) |  |
**consignee** | [**\kruegge82\cargoboard\Model\ConsigneeQuotation**](ConsigneeQuotation.md) |  |
**value_of_goods_amount** | **float** | Amount of money - value of goods for insurance or customs | [optional]
**value_of_goods_currency** | **string** | Currency of value of goods. Possible values EUR | [optional]
**lines** | [**\kruegge82\cargoboard\Model\LineQuotation[]**](LineQuotation.md) | Line for a product. |
**id** | **string** |  | [optional]
**status** | **string** | Status of order. Possible values INITIALIZED, CREATED, CANCELLED | [optional]
**customer_id** | **string** | Id of customer. | [optional]
**sequence** | **float** | Sequence of quotation. | [optional]
**order_id** | **string** | Id of order. | [optional]
**quotation_id_eikona** | **string** | Quotation id eikona | [optional]
**runtime_days_min** | **float** | Runtime days minimum. | [optional]
**runtime_days_max** | **float** | Runtime days maximum. | [optional]
**price_amount** | **float** | Price amount. | [optional]
**price_currency** | **string** | Status of order. Possible values EUR | [optional]
**price_amount_standard** | **float** | Price amount standard. | [optional]
**price_currency_standard** | **string** | Price currency standard. Possible values EUR | [optional]
**placed_at** | **\DateTime** | Date of order placement | [optional]
**created_at** | **\DateTime** | Date of creation of order | [optional]
**updated_at** | **\DateTime** | Date of update of order | [optional]
**truck_type** | **string** | Truck type of order. Possible values DIRECT_BUS_PLANE, DIRECT_BUS_PLANE_XXL, DIRECT_TRUCK_7_5, DIRECT_TRUCK_12, DIRECT_TRUCK_40 | [optional]
**domain** | **string** | Domain | [optional]
**shipping_partner** | **string** | Shipping partner | [optional]
**delivering_partner** | **string** | Shipping partner | [optional]
**lines_weight** | **float** | Lines weight of quotation. | [optional]
**lines_volume** | **float** | Lines volume of quotation. | [optional]
**lines_pallet_bays** | **float** | Lines pallet bays of quotation. | [optional]
**lines_loading_meter** | **float** | Lines loading meter of quotation. | [optional]
**quantity_of_euro_pallets** | **object** | Quantity of euro pallets from lines. |
**co2_emission_amount** | **float** | CO2 Emission amount of quotation. | [optional]
**co2_emission_value** | **float** | CO2 Emission value of quotation. | [optional]
**co2_emission_unit** | **string** | CO2 Emission unit of quotation. | [optional]
**shipment_cost** | **float** | Shipment cost of quotation. | [optional]
**actual_cost** | **float** | Actual cost of quotation. | [optional]
**actual_price** | **float** | Actual price of quotation. | [optional]
**actual_price_standard** | **float** | Actual standard price of quotation. | [optional]
**cost_items** | [**\kruegge82\cargoboard\Model\CostItemQuotation[]**](CostItemQuotation.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
