# # CostItemOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Cost item type. Possible values: DANGEROUS_GOODS, PRIVATE_CUSTOMER, IMPORT_DUTIES, CONTACT_BEFORE_PICKUP, TAIL_LIFT_TRUCK, PREMIUM_DELIVERY, CONTACT_BEFORE_DELIVERY, PHONE_CALL_FROM_DRIVER_BEFORE_DELIVERY, PHONE_CALL_FROM_DRIVER_BEFORE_PICKUP, DELIVERY_WITHOUT_CONSIGNEE_PRESENCE, TRANSPORT_INSURANCE, EXPORT_DECLARATION, ADDITIONAL_PRODUCTS, PALLET_EXCHANGE, CLIMATE_NEUTRAL_SURCHARGE, SHIPMENT, GENERAL_MARGIN, CUSTOMIZED_MARGIN, ACTUAL_COST_CORRECTION, FUEL_SURCHARGE, CUSTOMER_DISCOUNT, COUPON. |
**subtype** | **string** | Cost item subtype. Possible values: PICKUP_ADVISE, DELIVERY_ADVISE, PHONE_CALL_FROM_DRIVER_BEFORE_PICKUP, PHONE_CALL_FROM_DRIVER_BEFORE_DELIVERY, TAIL_LIFT, TAIL_LIFT_PICKUP, TAIL_LIFT_DELIVERY, DELIVERY_WHITOUT_CONSIGNEE_PRESENCE, PREMIUM_DELIVERY, PRIVATE_CONSIGNEE, EXPRESS_16, EXPRESS_12, EXPRESS_10, EXPRESS_8, FIX_16, FIX_12, FIX_10, FIX_8, PICKUP_BEFORE_12, PICKUP_AFTER_12, DELIVERY_BEFORE_12, DELIVERY_AFTER_12, EXPORT_DECLARATION, IMPORT_DECLARATION. |
**description** | **string** | Description for cost item. |
**sell_price** | **float** |  |
**currency** | **string** | Currency for price. Possible values: EUR. |
**is_on_customer_invoice** | **bool** |  | [default to false]
**easybill_invoice_id** | **string** |  |
**vat** | **float** |  |
**cost** | **float** |  |
**easybill_document_position_id** | **float** | Easybill document position id is id field from DocumentPosition Resource. Facilitates matching CostItem on Cargoboard API with DocumentPosition on Easybill API. | [optional] [readonly]
**sequence** | **float** | Sequence of cost item. | [optional] [readonly]
**created_at** | **\DateTime** | Creation date and time. | [optional] [readonly]
**updated_at** | **\DateTime** | Last edition date and time. | [optional] [readonly]
**created_by_id** | **string** | Id of creator user. | [optional] [readonly]
**updated_by_id** | **string** | Id of editor user. | [optional] [readonly]
**is_invoiceable** | **object** | Cost item is invoiceable when is set for being part of invoice but is not on one already and its sell price is different than zero. | [readonly]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
