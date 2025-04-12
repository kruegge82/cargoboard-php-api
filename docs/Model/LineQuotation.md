# # LineQuotation

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**content** | **string** | Content for the line. |
**unit_quantity** | **int** | Quantity for the line. |
**unit_package_type** | **string** | PackageType for the line. |
**unit_length** | **int** | Length for the line. |
**unit_width** | **int** | Width for the line. |
**unit_height** | **int** | Height for the line. |
**unit_weight** | **float** | Weight for the line. |
**is_stackable** | **bool** | If set to true, packages are loadable and stackable. | [optional] [default to false]
**wants_pallet_exchange** | **bool** | If set to true, pallets exchange is required for a line. | [optional] [default to false]
**additional_euro_pallets** | **float** | Additional euro Pallets for the line (e.g. as top or side protection). | [optional]
**dangerous_goods** | [**\kruegge82\cargoboard\Model\DangerousGoodQuotation[]**](DangerousGoodQuotation.md) | Dangerous Goods for a quotation line. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
