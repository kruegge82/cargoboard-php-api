# # ConsigneeOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**contact_person** | [**\kruegge82\cargoboard\Model\ContactPerson**](ContactPerson.md) |  | [optional]
**address** | [**\kruegge82\cargoboard\Model\AddressOrder**](AddressOrder.md) |  |
**neutral_data** | [**\kruegge82\cargoboard\Model\NeutralData**](NeutralData.md) | Neutral data for obfuscation. | [optional]
**is_private_customer** | **bool** | Consignee is private customer. | [optional] [default to false]
**wants_contact_before_delivery** | **bool** | A service where a Logistic Company contacts the customer by phone days/hours before the delivery and arranges an appointment for the delivery. This is often booked when a customer is not on site every time and needs an exact time. | [optional] [default to false]
**wants_phone_call_from_driver_before_delivery** | **bool** | A service where a Logistic Company contacts the customer by phone about 30 - 60 minutes before arriving at the customer location to deliver the shipment. | [optional] [default to false]
**wants_delivery_without_consignee_presence** | **bool** | A service where delivery will not require consignee presence. | [optional] [default to false]
**wants_tail_lift_truck** | **bool** | Wants Tail Lift Truck. | [optional]
**delivery_on** | **\DateTime** | Date of delivery for fix product. Allowed delivery dates from Monday till Friday. | [optional]
**unloading_type** | **string** | Unloading type (delivery). Possible values RAMP, SIDE, CRANE, LIFTING_PLATFORM_OR_TAIL_LIFT_TRUCK | [optional]
**free_text_for_delivery** | **string** |  | [optional]
**reference** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
