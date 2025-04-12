# # EasybillInvoice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sequence** | **float** | Sequence of EasybillInvoice. | [optional]
**document_id** | **float** | Id of document (invoice) on Easybill API. | [optional]
**is_document_completed** | **bool** | If true document has been completed on Easybill API. | [optional] [default to false]
**document_completed_at** | **\DateTime** | Date of document completed on Easybill API. | [optional]
**is_document_copied_to_archive** | **bool** | If true document has been copied from Easybill API to GCP storage archive. | [optional] [default to false]
**is_document_copied_to_archive_zipped** | **bool** | If true document copied from Easybill API to GCP storage archive is zipped. | [optional] [default to false]
**document_copied_to_archive_at** | **\DateTime** | Date of document copy from Easybill API to GCP storage archive. | [optional]
**is_document_sent** | **bool** | If true document has been sent on Easybill API. | [optional] [default to false]
**document_sent_at** | **\DateTime** | Date of document sent on Easybill API. | [optional]
**is_document_cancelled** | **bool** | If true document has been cancelled on Easybill API. | [readonly]
**document_cancelled_at** | **\DateTime** | Date of document cancellation on Easybill API. | [optional]
**document_number** | **string** | Number for document (invoice) on Easybill API. |
**cancellation_document_id** | **float** | Id for cancellation document (invoice) on Easybill API. |
**is_cancellation_document_sent** | **bool** | If true cancellation document has been cancelled on Easybill API. | [optional] [readonly] [default to false]
**cancellation_document_sent_at** | **\DateTime** | Date of cancellation document sent on Easybill API. | [optional]
**document_amount** | **float** |  |
**is_done** | **bool** | If true invoicing for related orders is finished on Easybill API. | [optional] [default to false]
**orders** | [**\kruegge82\cargoboard\Model\OrderId[]**](OrderId.md) |  |
**customer** | [**\kruegge82\cargoboard\Model\CustomerId**](CustomerId.md) |  |
**due_date** | **\DateTime** | Date (time part value will be omitted) to when invoice should be paid. | [optional]
**due_in_days** | **float** | Period of time in days to when invoice should be paid. | [optional]
**is_paid** | **bool** | If true invoice is paid. | [optional] [default to false]
**paid_at** | **\DateTime** | Date of payment. | [optional]
**payment_amount** | **float** | Amount for payment. |
**payment_currency** | **string** | Currency for payment. Possible values: EUR. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
