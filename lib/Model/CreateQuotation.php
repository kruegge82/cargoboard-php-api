<?php
/**
 * CreateQuotation
 *
 * PHP version 8.1
 *
 * @category Class
 * @package  kruegge82\cargoboard
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * API Documentation
 *
 * &lt;h4&gt;Authentication.&lt;/h4&gt; &lt;p&gt;Authentication is done with X-API-KEY. You can request a key via mail to api@cargoboard.com.
 *
 * The version of the OpenAPI document: 1.0.5
 * Contact: api@cargoboard.com
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.13.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace kruegge82\cargoboard\Model;

use \ArrayAccess;
use \kruegge82\cargoboard\ObjectSerializer;

/**
 * CreateQuotation Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\cargoboard
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class CreateQuotation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'CreateQuotation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'product' => 'string',
        'shipper' => '\kruegge82\cargoboard\Model\ShipperQuotation',
        'consignee' => '\kruegge82\cargoboard\Model\ConsigneeQuotation',
        'lines' => '\kruegge82\cargoboard\Model\LineQuotation[]',
        'customer_order_code' => 'string',
        'coupon_code' => 'string',
        'wants_export_declaration' => 'bool',
        'wants_climate_neutral_shipment' => 'bool',
        'wants_insurance' => 'bool',
        'value_of_goods_amount' => 'float',
        'value_of_goods_currency' => 'string',
        'incoterm' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'product' => null,
        'shipper' => null,
        'consignee' => null,
        'lines' => null,
        'customer_order_code' => null,
        'coupon_code' => null,
        'wants_export_declaration' => null,
        'wants_climate_neutral_shipment' => null,
        'wants_insurance' => null,
        'value_of_goods_amount' => null,
        'value_of_goods_currency' => null,
        'incoterm' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'product' => false,
        'shipper' => false,
        'consignee' => false,
        'lines' => false,
        'customer_order_code' => false,
        'coupon_code' => false,
        'wants_export_declaration' => false,
        'wants_climate_neutral_shipment' => false,
        'wants_insurance' => false,
        'value_of_goods_amount' => false,
        'value_of_goods_currency' => false,
        'incoterm' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'product' => 'product',
        'shipper' => 'shipper',
        'consignee' => 'consignee',
        'lines' => 'lines',
        'customer_order_code' => 'customerOrderCode',
        'coupon_code' => 'couponCode',
        'wants_export_declaration' => 'wantsExportDeclaration',
        'wants_climate_neutral_shipment' => 'wantsClimateNeutralShipment',
        'wants_insurance' => 'wantsInsurance',
        'value_of_goods_amount' => 'valueOfGoodsAmount',
        'value_of_goods_currency' => 'valueOfGoodsCurrency',
        'incoterm' => 'incoterm'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'product' => 'setProduct',
        'shipper' => 'setShipper',
        'consignee' => 'setConsignee',
        'lines' => 'setLines',
        'customer_order_code' => 'setCustomerOrderCode',
        'coupon_code' => 'setCouponCode',
        'wants_export_declaration' => 'setWantsExportDeclaration',
        'wants_climate_neutral_shipment' => 'setWantsClimateNeutralShipment',
        'wants_insurance' => 'setWantsInsurance',
        'value_of_goods_amount' => 'setValueOfGoodsAmount',
        'value_of_goods_currency' => 'setValueOfGoodsCurrency',
        'incoterm' => 'setIncoterm'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'product' => 'getProduct',
        'shipper' => 'getShipper',
        'consignee' => 'getConsignee',
        'lines' => 'getLines',
        'customer_order_code' => 'getCustomerOrderCode',
        'coupon_code' => 'getCouponCode',
        'wants_export_declaration' => 'getWantsExportDeclaration',
        'wants_climate_neutral_shipment' => 'getWantsClimateNeutralShipment',
        'wants_insurance' => 'getWantsInsurance',
        'value_of_goods_amount' => 'getValueOfGoodsAmount',
        'value_of_goods_currency' => 'getValueOfGoodsCurrency',
        'incoterm' => 'getIncoterm'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const PRODUCT_DIRECT = 'DIRECT';
    public const PRODUCT_EXPRESS = 'EXPRESS';
    public const PRODUCT_EXPRESS_8 = 'EXPRESS_8';
    public const PRODUCT_EXPRESS_10 = 'EXPRESS_10';
    public const PRODUCT_EXPRESS_12 = 'EXPRESS_12';
    public const PRODUCT_EXPRESS_16 = 'EXPRESS_16';
    public const PRODUCT_FIX = 'FIX';
    public const PRODUCT_FIX_8 = 'FIX_8';
    public const PRODUCT_FIX_10 = 'FIX_10';
    public const PRODUCT_FIX_12 = 'FIX_12';
    public const PRODUCT_FIX_16 = 'FIX_16';
    public const PRODUCT_STANDARD = 'STANDARD';
    public const INCOTERM_STANDARD = 'STANDARD';
    public const INCOTERM_DAP_CLEARED = 'DAP_CLEARED';
    public const INCOTERM_DAP_UNCLEARED = 'DAP_UNCLEARED';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getProductAllowableValues()
    {
        return [
            self::PRODUCT_DIRECT,
            self::PRODUCT_EXPRESS,
            self::PRODUCT_EXPRESS_8,
            self::PRODUCT_EXPRESS_10,
            self::PRODUCT_EXPRESS_12,
            self::PRODUCT_EXPRESS_16,
            self::PRODUCT_FIX,
            self::PRODUCT_FIX_8,
            self::PRODUCT_FIX_10,
            self::PRODUCT_FIX_12,
            self::PRODUCT_FIX_16,
            self::PRODUCT_STANDARD,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getIncotermAllowableValues()
    {
        return [
            self::INCOTERM_STANDARD,
            self::INCOTERM_DAP_CLEARED,
            self::INCOTERM_DAP_UNCLEARED,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[]|null $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(?array $data = null)
    {
        $this->setIfExists('product', $data ?? [], null);
        $this->setIfExists('shipper', $data ?? [], null);
        $this->setIfExists('consignee', $data ?? [], null);
        $this->setIfExists('lines', $data ?? [], null);
        $this->setIfExists('customer_order_code', $data ?? [], null);
        $this->setIfExists('coupon_code', $data ?? [], null);
        $this->setIfExists('wants_export_declaration', $data ?? [], false);
        $this->setIfExists('wants_climate_neutral_shipment', $data ?? [], true);
        $this->setIfExists('wants_insurance', $data ?? [], false);
        $this->setIfExists('value_of_goods_amount', $data ?? [], null);
        $this->setIfExists('value_of_goods_currency', $data ?? [], null);
        $this->setIfExists('incoterm', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['product'] === null) {
            $invalidProperties[] = "'product' can't be null";
        }
        $allowedValues = $this->getProductAllowableValues();
        if (!is_null($this->container['product']) && !in_array($this->container['product'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'product', must be one of '%s'",
                $this->container['product'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['shipper'] === null) {
            $invalidProperties[] = "'shipper' can't be null";
        }
        if ($this->container['consignee'] === null) {
            $invalidProperties[] = "'consignee' can't be null";
        }
        if ($this->container['lines'] === null) {
            $invalidProperties[] = "'lines' can't be null";
        }
        $allowedValues = $this->getIncotermAllowableValues();
        if (!is_null($this->container['incoterm']) && !in_array($this->container['incoterm'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'incoterm', must be one of '%s'",
                $this->container['incoterm'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets product
     *
     * @return string
     */
    public function getProduct()
    {
        return $this->container['product'];
    }

    /**
     * Sets product
     *
     * @param string $product The product for which a quotation should be received. Possible values: DIRECT, EXPRESS, EXPRESS_8, EXPRESS_10, EXPRESS_12, EXPRESS_16, FIX, FIX_8, FIX_10, FIX_12, FIX_16, STANDARD.
     *
     * @return self
     */
    public function setProduct($product)
    {
        if (is_null($product)) {
            throw new \InvalidArgumentException('non-nullable product cannot be null');
        }
        $allowedValues = $this->getProductAllowableValues();
        if (!in_array($product, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'product', must be one of '%s'",
                    $product,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['product'] = $product;

        return $this;
    }

    /**
     * Gets shipper
     *
     * @return \kruegge82\cargoboard\Model\ShipperQuotation
     */
    public function getShipper()
    {
        return $this->container['shipper'];
    }

    /**
     * Sets shipper
     *
     * @param \kruegge82\cargoboard\Model\ShipperQuotation $shipper shipper
     *
     * @return self
     */
    public function setShipper($shipper)
    {
        if (is_null($shipper)) {
            throw new \InvalidArgumentException('non-nullable shipper cannot be null');
        }
        $this->container['shipper'] = $shipper;

        return $this;
    }

    /**
     * Gets consignee
     *
     * @return \kruegge82\cargoboard\Model\ConsigneeQuotation
     */
    public function getConsignee()
    {
        return $this->container['consignee'];
    }

    /**
     * Sets consignee
     *
     * @param \kruegge82\cargoboard\Model\ConsigneeQuotation $consignee consignee
     *
     * @return self
     */
    public function setConsignee($consignee)
    {
        if (is_null($consignee)) {
            throw new \InvalidArgumentException('non-nullable consignee cannot be null');
        }
        $this->container['consignee'] = $consignee;

        return $this;
    }

    /**
     * Gets lines
     *
     * @return \kruegge82\cargoboard\Model\LineQuotation[]
     */
    public function getLines()
    {
        return $this->container['lines'];
    }

    /**
     * Sets lines
     *
     * @param \kruegge82\cargoboard\Model\LineQuotation[] $lines Line for a product.
     *
     * @return self
     */
    public function setLines($lines)
    {
        if (is_null($lines)) {
            throw new \InvalidArgumentException('non-nullable lines cannot be null');
        }
        $this->container['lines'] = $lines;

        return $this;
    }

    /**
     * Gets customer_order_code
     *
     * @return string|null
     */
    public function getCustomerOrderCode()
    {
        return $this->container['customer_order_code'];
    }

    /**
     * Sets customer_order_code
     *
     * @param string|null $customer_order_code A code applied by customer that will appear on documents as CustomerOrderNo
     *
     * @return self
     */
    public function setCustomerOrderCode($customer_order_code)
    {
        if (is_null($customer_order_code)) {
            throw new \InvalidArgumentException('non-nullable customer_order_code cannot be null');
        }
        $this->container['customer_order_code'] = $customer_order_code;

        return $this;
    }

    /**
     * Gets coupon_code
     *
     * @return string|null
     */
    public function getCouponCode()
    {
        return $this->container['coupon_code'];
    }

    /**
     * Sets coupon_code
     *
     * @param string|null $coupon_code A code applied by customer that will allow for special actions like discount etc.
     *
     * @return self
     */
    public function setCouponCode($coupon_code)
    {
        if (is_null($coupon_code)) {
            throw new \InvalidArgumentException('non-nullable coupon_code cannot be null');
        }
        $this->container['coupon_code'] = $coupon_code;

        return $this;
    }

    /**
     * Gets wants_export_declaration
     *
     * @return bool|null
     */
    public function getWantsExportDeclaration()
    {
        return $this->container['wants_export_declaration'];
    }

    /**
     * Sets wants_export_declaration
     *
     * @param bool|null $wants_export_declaration A service where shipment will be declared for customs. Some customers do this by themselves and others book this option. This service should be only possible if shipment goes to, or comes from a country outside of the EU, like Great Britain, Norway, Switzerland.
     *
     * @return self
     */
    public function setWantsExportDeclaration($wants_export_declaration)
    {
        if (is_null($wants_export_declaration)) {
            throw new \InvalidArgumentException('non-nullable wants_export_declaration cannot be null');
        }
        $this->container['wants_export_declaration'] = $wants_export_declaration;

        return $this;
    }

    /**
     * Gets wants_climate_neutral_shipment
     *
     * @return bool|null
     */
    public function getWantsClimateNeutralShipment()
    {
        return $this->container['wants_climate_neutral_shipment'];
    }

    /**
     * Sets wants_climate_neutral_shipment
     *
     * @param bool|null $wants_climate_neutral_shipment Negative environmental impact will be reduced for this service.
     *
     * @return self
     */
    public function setWantsClimateNeutralShipment($wants_climate_neutral_shipment)
    {
        if (is_null($wants_climate_neutral_shipment)) {
            throw new \InvalidArgumentException('non-nullable wants_climate_neutral_shipment cannot be null');
        }
        $this->container['wants_climate_neutral_shipment'] = $wants_climate_neutral_shipment;

        return $this;
    }

    /**
     * Gets wants_insurance
     *
     * @return bool|null
     */
    public function getWantsInsurance()
    {
        return $this->container['wants_insurance'];
    }

    /**
     * Sets wants_insurance
     *
     * @param bool|null $wants_insurance Cargoboard will organize an insurance for this shipment. goodsValueAmount is necessary if you set wantsInsurance
     *
     * @return self
     */
    public function setWantsInsurance($wants_insurance)
    {
        if (is_null($wants_insurance)) {
            throw new \InvalidArgumentException('non-nullable wants_insurance cannot be null');
        }
        $this->container['wants_insurance'] = $wants_insurance;

        return $this;
    }

    /**
     * Gets value_of_goods_amount
     *
     * @return float|null
     */
    public function getValueOfGoodsAmount()
    {
        return $this->container['value_of_goods_amount'];
    }

    /**
     * Sets value_of_goods_amount
     *
     * @param float|null $value_of_goods_amount Amount of money - value of goods for insurance or customs
     *
     * @return self
     */
    public function setValueOfGoodsAmount($value_of_goods_amount)
    {
        if (is_null($value_of_goods_amount)) {
            throw new \InvalidArgumentException('non-nullable value_of_goods_amount cannot be null');
        }
        $this->container['value_of_goods_amount'] = $value_of_goods_amount;

        return $this;
    }

    /**
     * Gets value_of_goods_currency
     *
     * @return string|null
     */
    public function getValueOfGoodsCurrency()
    {
        return $this->container['value_of_goods_currency'];
    }

    /**
     * Sets value_of_goods_currency
     *
     * @param string|null $value_of_goods_currency Currency of value of goods. Possible values EUR
     *
     * @return self
     */
    public function setValueOfGoodsCurrency($value_of_goods_currency)
    {
        if (is_null($value_of_goods_currency)) {
            throw new \InvalidArgumentException('non-nullable value_of_goods_currency cannot be null');
        }
        $this->container['value_of_goods_currency'] = $value_of_goods_currency;

        return $this;
    }

    /**
     * Gets incoterm
     *
     * @return string|null
     */
    public function getIncoterm()
    {
        return $this->container['incoterm'];
    }

    /**
     * Sets incoterm
     *
     * @param string|null $incoterm Incoterm - should always be STANDARD and if you ship to Switzerland, or UK it should be DAP
     *
     * @return self
     */
    public function setIncoterm($incoterm)
    {
        if (is_null($incoterm)) {
            throw new \InvalidArgumentException('non-nullable incoterm cannot be null');
        }
        $allowedValues = $this->getIncotermAllowableValues();
        if (!in_array($incoterm, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'incoterm', must be one of '%s'",
                    $incoterm,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['incoterm'] = $incoterm;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


