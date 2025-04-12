# # StatusEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sequence** | **float** | Sequence of status event. | [optional]
**order_id** | **string** |  | [optional]
**carrier_reference** | **string** |  |
**status_code** | **string** | Status code of event. |
**originated_at** | **\DateTime** | Date and time when status event happened. |
**message** | **string** | Additional message for the event. | [optional]
**shipment_weight** | **float** | Weight of shipment. | [optional]
**shipment_loading_meters** | **float** | Loading meters of shipment. | [optional]
**waiting_minutes** | **float** | Waiting time in minutes. | [optional]
**emitted_by** | **string** | Id of executive partner | [optional]
**name_of_signer** | **string** | Name of signer. | [optional]
**vehicle_latitude** | **float** | Latitude of coordinates. | [optional]
**vehicle_longitude** | **float** | Longitude of coordinates. | [optional]
**estimated_collection_at_from** | **\DateTime** | Date and time of collection from happened. |
**estimated_collection_at_until** | **\DateTime** | Date and time of collection until happened. |
**estimated_arrival_at_from** | **\DateTime** | Date and time of arrival from happened. |
**estimated_arrival_at_until** | **\DateTime** | Date and time of arrival until happened. |
**stops_until_collection** | **float** | Stops until collection. | [optional]
**stops_until_delivery** | **float** | Stops until delivery. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
