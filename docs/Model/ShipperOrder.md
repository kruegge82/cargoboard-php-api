# # ShipperOrder

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  |
**contact_person** | [**\kruegge82\cargoboard\Model\ContactPerson**](ContactPerson.md) |  | [optional]
**address** | [**\kruegge82\cargoboard\Model\AddressOrder**](AddressOrder.md) |  |
**neutral_data** | [**\kruegge82\cargoboard\Model\NeutralData**](NeutralData.md) | Neutral data for obfuscation. | [optional]
**pickup_at_from** | **\DateTime** | Date with time of start of pickup for the product. Allowed days are days from Monday till Friday. Either pickupOn or pickupAtFrom and pickupAtUntil is enough to be set. If value of pickupOn and pickupAtFrom and pickupAtUntil is set, date part (a day) must be the same. | [optional]
**pickup_at_until** | **\DateTime** | Date with time of end of pickup for the product. Allowed days are days from Monday till Friday. Either pickupOn or pickupAtFrom and pickupAtUntil is enough to be set. If value of pickupOn and pickupAtFrom and pickupAtUntil is set, date part (a day) must be the same. | [optional]
**pickup_on** | **\DateTime** | Date without time of pickup for the product. Allowed days are days from Monday till Friday. Either pickupOn or pickupAtFrom and pickupAtUntil is enough to be set. If value of pickupOn and pickupAtFrom and pickupAtUntil is set, date part (a day) must be the same. | [optional]
**wants_contact_before_pickup** | **bool** | A service where a Logistic Company contacts the customer by phone days/hours before the pickup and arranges an appointment for the pickup. This is often booked when a customer is not on site every time and needs an exact time. | [optional]
**wants_phone_call_from_driver_before_pickup** | **bool** | A service where a Logistic Company contacts the customer by phone about 30 - 60 minutes before pickup to pickup the shipment. | [optional]
**wants_tail_lift_truck** | **bool** | Wants Tail Lift Truck. | [optional]
**loading_type** | **string** | Loading type (collection). Possible values RAMP, SIDE, CRANE, LIFTING_PLATFORM_OR_TAIL_LIFT_TRUCK | [optional]
**free_text_for_pickup** | **string** |  | [optional]
**reference** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
