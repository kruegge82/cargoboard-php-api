# # TrackingStatus

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**originated_at** | **\DateTime** | Date and time when status event happened. |
**code** | **string** | Status code of event. |
**message** | **string** | Message for the event. | [optional]
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
