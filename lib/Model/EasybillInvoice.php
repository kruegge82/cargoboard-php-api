<?php
/**
 * EasybillInvoice
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
 * EasybillInvoice Class Doc Comment
 *
 * @category Class
 * @package  kruegge82\cargoboard
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class EasybillInvoice implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'EasybillInvoice';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'sequence' => 'float',
        'document_id' => 'float',
        'is_document_completed' => 'bool',
        'document_completed_at' => '\DateTime',
        'is_document_copied_to_archive' => 'bool',
        'is_document_copied_to_archive_zipped' => 'bool',
        'document_copied_to_archive_at' => '\DateTime',
        'is_document_sent' => 'bool',
        'document_sent_at' => '\DateTime',
        'is_document_cancelled' => 'bool',
        'document_cancelled_at' => '\DateTime',
        'document_number' => 'string',
        'cancellation_document_id' => 'float',
        'is_cancellation_document_sent' => 'bool',
        'cancellation_document_sent_at' => '\DateTime',
        'document_amount' => 'float',
        'is_done' => 'bool',
        'orders' => '\kruegge82\cargoboard\Model\OrderId[]',
        'customer' => '\kruegge82\cargoboard\Model\CustomerId',
        'due_date' => '\DateTime',
        'due_in_days' => 'float',
        'is_paid' => 'bool',
        'paid_at' => '\DateTime',
        'payment_amount' => 'float',
        'payment_currency' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'sequence' => null,
        'document_id' => null,
        'is_document_completed' => null,
        'document_completed_at' => 'date-time',
        'is_document_copied_to_archive' => null,
        'is_document_copied_to_archive_zipped' => null,
        'document_copied_to_archive_at' => 'date-time',
        'is_document_sent' => null,
        'document_sent_at' => 'date-time',
        'is_document_cancelled' => null,
        'document_cancelled_at' => 'date-time',
        'document_number' => null,
        'cancellation_document_id' => null,
        'is_cancellation_document_sent' => null,
        'cancellation_document_sent_at' => 'date-time',
        'document_amount' => null,
        'is_done' => null,
        'orders' => null,
        'customer' => null,
        'due_date' => 'date-time',
        'due_in_days' => null,
        'is_paid' => null,
        'paid_at' => 'date-time',
        'payment_amount' => null,
        'payment_currency' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'sequence' => false,
        'document_id' => false,
        'is_document_completed' => false,
        'document_completed_at' => false,
        'is_document_copied_to_archive' => false,
        'is_document_copied_to_archive_zipped' => false,
        'document_copied_to_archive_at' => false,
        'is_document_sent' => false,
        'document_sent_at' => false,
        'is_document_cancelled' => false,
        'document_cancelled_at' => false,
        'document_number' => false,
        'cancellation_document_id' => false,
        'is_cancellation_document_sent' => false,
        'cancellation_document_sent_at' => false,
        'document_amount' => false,
        'is_done' => false,
        'orders' => false,
        'customer' => false,
        'due_date' => false,
        'due_in_days' => false,
        'is_paid' => false,
        'paid_at' => false,
        'payment_amount' => false,
        'payment_currency' => false
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
        'sequence' => 'sequence',
        'document_id' => 'documentId',
        'is_document_completed' => 'isDocumentCompleted',
        'document_completed_at' => 'documentCompletedAt',
        'is_document_copied_to_archive' => 'isDocumentCopiedToArchive',
        'is_document_copied_to_archive_zipped' => 'isDocumentCopiedToArchiveZipped',
        'document_copied_to_archive_at' => 'documentCopiedToArchiveAt',
        'is_document_sent' => 'isDocumentSent',
        'document_sent_at' => 'documentSentAt',
        'is_document_cancelled' => 'isDocumentCancelled',
        'document_cancelled_at' => 'documentCancelledAt',
        'document_number' => 'documentNumber',
        'cancellation_document_id' => 'cancellationDocumentId',
        'is_cancellation_document_sent' => 'isCancellationDocumentSent',
        'cancellation_document_sent_at' => 'cancellationDocumentSentAt',
        'document_amount' => 'documentAmount',
        'is_done' => 'isDone',
        'orders' => 'orders',
        'customer' => 'customer',
        'due_date' => 'dueDate',
        'due_in_days' => 'dueInDays',
        'is_paid' => 'isPaid',
        'paid_at' => 'paidAt',
        'payment_amount' => 'paymentAmount',
        'payment_currency' => 'paymentCurrency'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'sequence' => 'setSequence',
        'document_id' => 'setDocumentId',
        'is_document_completed' => 'setIsDocumentCompleted',
        'document_completed_at' => 'setDocumentCompletedAt',
        'is_document_copied_to_archive' => 'setIsDocumentCopiedToArchive',
        'is_document_copied_to_archive_zipped' => 'setIsDocumentCopiedToArchiveZipped',
        'document_copied_to_archive_at' => 'setDocumentCopiedToArchiveAt',
        'is_document_sent' => 'setIsDocumentSent',
        'document_sent_at' => 'setDocumentSentAt',
        'is_document_cancelled' => 'setIsDocumentCancelled',
        'document_cancelled_at' => 'setDocumentCancelledAt',
        'document_number' => 'setDocumentNumber',
        'cancellation_document_id' => 'setCancellationDocumentId',
        'is_cancellation_document_sent' => 'setIsCancellationDocumentSent',
        'cancellation_document_sent_at' => 'setCancellationDocumentSentAt',
        'document_amount' => 'setDocumentAmount',
        'is_done' => 'setIsDone',
        'orders' => 'setOrders',
        'customer' => 'setCustomer',
        'due_date' => 'setDueDate',
        'due_in_days' => 'setDueInDays',
        'is_paid' => 'setIsPaid',
        'paid_at' => 'setPaidAt',
        'payment_amount' => 'setPaymentAmount',
        'payment_currency' => 'setPaymentCurrency'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'sequence' => 'getSequence',
        'document_id' => 'getDocumentId',
        'is_document_completed' => 'getIsDocumentCompleted',
        'document_completed_at' => 'getDocumentCompletedAt',
        'is_document_copied_to_archive' => 'getIsDocumentCopiedToArchive',
        'is_document_copied_to_archive_zipped' => 'getIsDocumentCopiedToArchiveZipped',
        'document_copied_to_archive_at' => 'getDocumentCopiedToArchiveAt',
        'is_document_sent' => 'getIsDocumentSent',
        'document_sent_at' => 'getDocumentSentAt',
        'is_document_cancelled' => 'getIsDocumentCancelled',
        'document_cancelled_at' => 'getDocumentCancelledAt',
        'document_number' => 'getDocumentNumber',
        'cancellation_document_id' => 'getCancellationDocumentId',
        'is_cancellation_document_sent' => 'getIsCancellationDocumentSent',
        'cancellation_document_sent_at' => 'getCancellationDocumentSentAt',
        'document_amount' => 'getDocumentAmount',
        'is_done' => 'getIsDone',
        'orders' => 'getOrders',
        'customer' => 'getCustomer',
        'due_date' => 'getDueDate',
        'due_in_days' => 'getDueInDays',
        'is_paid' => 'getIsPaid',
        'paid_at' => 'getPaidAt',
        'payment_amount' => 'getPaymentAmount',
        'payment_currency' => 'getPaymentCurrency'
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

    public const PAYMENT_CURRENCY_EUR = 'EUR';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaymentCurrencyAllowableValues()
    {
        return [
            self::PAYMENT_CURRENCY_EUR,
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
        $this->setIfExists('sequence', $data ?? [], null);
        $this->setIfExists('document_id', $data ?? [], null);
        $this->setIfExists('is_document_completed', $data ?? [], false);
        $this->setIfExists('document_completed_at', $data ?? [], null);
        $this->setIfExists('is_document_copied_to_archive', $data ?? [], false);
        $this->setIfExists('is_document_copied_to_archive_zipped', $data ?? [], false);
        $this->setIfExists('document_copied_to_archive_at', $data ?? [], null);
        $this->setIfExists('is_document_sent', $data ?? [], false);
        $this->setIfExists('document_sent_at', $data ?? [], null);
        $this->setIfExists('is_document_cancelled', $data ?? [], null);
        $this->setIfExists('document_cancelled_at', $data ?? [], null);
        $this->setIfExists('document_number', $data ?? [], null);
        $this->setIfExists('cancellation_document_id', $data ?? [], null);
        $this->setIfExists('is_cancellation_document_sent', $data ?? [], false);
        $this->setIfExists('cancellation_document_sent_at', $data ?? [], null);
        $this->setIfExists('document_amount', $data ?? [], null);
        $this->setIfExists('is_done', $data ?? [], false);
        $this->setIfExists('orders', $data ?? [], null);
        $this->setIfExists('customer', $data ?? [], null);
        $this->setIfExists('due_date', $data ?? [], null);
        $this->setIfExists('due_in_days', $data ?? [], null);
        $this->setIfExists('is_paid', $data ?? [], false);
        $this->setIfExists('paid_at', $data ?? [], null);
        $this->setIfExists('payment_amount', $data ?? [], null);
        $this->setIfExists('payment_currency', $data ?? [], null);
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

        if ($this->container['is_document_cancelled'] === null) {
            $invalidProperties[] = "'is_document_cancelled' can't be null";
        }
        if ($this->container['document_number'] === null) {
            $invalidProperties[] = "'document_number' can't be null";
        }
        if ($this->container['cancellation_document_id'] === null) {
            $invalidProperties[] = "'cancellation_document_id' can't be null";
        }
        if ($this->container['document_amount'] === null) {
            $invalidProperties[] = "'document_amount' can't be null";
        }
        if ($this->container['orders'] === null) {
            $invalidProperties[] = "'orders' can't be null";
        }
        if ($this->container['customer'] === null) {
            $invalidProperties[] = "'customer' can't be null";
        }
        if ($this->container['payment_amount'] === null) {
            $invalidProperties[] = "'payment_amount' can't be null";
        }
        $allowedValues = $this->getPaymentCurrencyAllowableValues();
        if (!is_null($this->container['payment_currency']) && !in_array($this->container['payment_currency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'payment_currency', must be one of '%s'",
                $this->container['payment_currency'],
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
     * Gets sequence
     *
     * @return float|null
     */
    public function getSequence()
    {
        return $this->container['sequence'];
    }

    /**
     * Sets sequence
     *
     * @param float|null $sequence Sequence of EasybillInvoice.
     *
     * @return self
     */
    public function setSequence($sequence)
    {
        if (is_null($sequence)) {
            throw new \InvalidArgumentException('non-nullable sequence cannot be null');
        }
        $this->container['sequence'] = $sequence;

        return $this;
    }

    /**
     * Gets document_id
     *
     * @return float|null
     */
    public function getDocumentId()
    {
        return $this->container['document_id'];
    }

    /**
     * Sets document_id
     *
     * @param float|null $document_id Id of document (invoice) on Easybill API.
     *
     * @return self
     */
    public function setDocumentId($document_id)
    {
        if (is_null($document_id)) {
            throw new \InvalidArgumentException('non-nullable document_id cannot be null');
        }
        $this->container['document_id'] = $document_id;

        return $this;
    }

    /**
     * Gets is_document_completed
     *
     * @return bool|null
     */
    public function getIsDocumentCompleted()
    {
        return $this->container['is_document_completed'];
    }

    /**
     * Sets is_document_completed
     *
     * @param bool|null $is_document_completed If true document has been completed on Easybill API.
     *
     * @return self
     */
    public function setIsDocumentCompleted($is_document_completed)
    {
        if (is_null($is_document_completed)) {
            throw new \InvalidArgumentException('non-nullable is_document_completed cannot be null');
        }
        $this->container['is_document_completed'] = $is_document_completed;

        return $this;
    }

    /**
     * Gets document_completed_at
     *
     * @return \DateTime|null
     */
    public function getDocumentCompletedAt()
    {
        return $this->container['document_completed_at'];
    }

    /**
     * Sets document_completed_at
     *
     * @param \DateTime|null $document_completed_at Date of document completed on Easybill API.
     *
     * @return self
     */
    public function setDocumentCompletedAt($document_completed_at)
    {
        if (is_null($document_completed_at)) {
            throw new \InvalidArgumentException('non-nullable document_completed_at cannot be null');
        }
        $this->container['document_completed_at'] = $document_completed_at;

        return $this;
    }

    /**
     * Gets is_document_copied_to_archive
     *
     * @return bool|null
     */
    public function getIsDocumentCopiedToArchive()
    {
        return $this->container['is_document_copied_to_archive'];
    }

    /**
     * Sets is_document_copied_to_archive
     *
     * @param bool|null $is_document_copied_to_archive If true document has been copied from Easybill API to GCP storage archive.
     *
     * @return self
     */
    public function setIsDocumentCopiedToArchive($is_document_copied_to_archive)
    {
        if (is_null($is_document_copied_to_archive)) {
            throw new \InvalidArgumentException('non-nullable is_document_copied_to_archive cannot be null');
        }
        $this->container['is_document_copied_to_archive'] = $is_document_copied_to_archive;

        return $this;
    }

    /**
     * Gets is_document_copied_to_archive_zipped
     *
     * @return bool|null
     */
    public function getIsDocumentCopiedToArchiveZipped()
    {
        return $this->container['is_document_copied_to_archive_zipped'];
    }

    /**
     * Sets is_document_copied_to_archive_zipped
     *
     * @param bool|null $is_document_copied_to_archive_zipped If true document copied from Easybill API to GCP storage archive is zipped.
     *
     * @return self
     */
    public function setIsDocumentCopiedToArchiveZipped($is_document_copied_to_archive_zipped)
    {
        if (is_null($is_document_copied_to_archive_zipped)) {
            throw new \InvalidArgumentException('non-nullable is_document_copied_to_archive_zipped cannot be null');
        }
        $this->container['is_document_copied_to_archive_zipped'] = $is_document_copied_to_archive_zipped;

        return $this;
    }

    /**
     * Gets document_copied_to_archive_at
     *
     * @return \DateTime|null
     */
    public function getDocumentCopiedToArchiveAt()
    {
        return $this->container['document_copied_to_archive_at'];
    }

    /**
     * Sets document_copied_to_archive_at
     *
     * @param \DateTime|null $document_copied_to_archive_at Date of document copy from Easybill API to GCP storage archive.
     *
     * @return self
     */
    public function setDocumentCopiedToArchiveAt($document_copied_to_archive_at)
    {
        if (is_null($document_copied_to_archive_at)) {
            throw new \InvalidArgumentException('non-nullable document_copied_to_archive_at cannot be null');
        }
        $this->container['document_copied_to_archive_at'] = $document_copied_to_archive_at;

        return $this;
    }

    /**
     * Gets is_document_sent
     *
     * @return bool|null
     */
    public function getIsDocumentSent()
    {
        return $this->container['is_document_sent'];
    }

    /**
     * Sets is_document_sent
     *
     * @param bool|null $is_document_sent If true document has been sent on Easybill API.
     *
     * @return self
     */
    public function setIsDocumentSent($is_document_sent)
    {
        if (is_null($is_document_sent)) {
            throw new \InvalidArgumentException('non-nullable is_document_sent cannot be null');
        }
        $this->container['is_document_sent'] = $is_document_sent;

        return $this;
    }

    /**
     * Gets document_sent_at
     *
     * @return \DateTime|null
     */
    public function getDocumentSentAt()
    {
        return $this->container['document_sent_at'];
    }

    /**
     * Sets document_sent_at
     *
     * @param \DateTime|null $document_sent_at Date of document sent on Easybill API.
     *
     * @return self
     */
    public function setDocumentSentAt($document_sent_at)
    {
        if (is_null($document_sent_at)) {
            throw new \InvalidArgumentException('non-nullable document_sent_at cannot be null');
        }
        $this->container['document_sent_at'] = $document_sent_at;

        return $this;
    }

    /**
     * Gets is_document_cancelled
     *
     * @return bool
     */
    public function getIsDocumentCancelled()
    {
        return $this->container['is_document_cancelled'];
    }

    /**
     * Sets is_document_cancelled
     *
     * @param bool $is_document_cancelled If true document has been cancelled on Easybill API.
     *
     * @return self
     */
    public function setIsDocumentCancelled($is_document_cancelled)
    {
        if (is_null($is_document_cancelled)) {
            throw new \InvalidArgumentException('non-nullable is_document_cancelled cannot be null');
        }
        $this->container['is_document_cancelled'] = $is_document_cancelled;

        return $this;
    }

    /**
     * Gets document_cancelled_at
     *
     * @return \DateTime|null
     */
    public function getDocumentCancelledAt()
    {
        return $this->container['document_cancelled_at'];
    }

    /**
     * Sets document_cancelled_at
     *
     * @param \DateTime|null $document_cancelled_at Date of document cancellation on Easybill API.
     *
     * @return self
     */
    public function setDocumentCancelledAt($document_cancelled_at)
    {
        if (is_null($document_cancelled_at)) {
            throw new \InvalidArgumentException('non-nullable document_cancelled_at cannot be null');
        }
        $this->container['document_cancelled_at'] = $document_cancelled_at;

        return $this;
    }

    /**
     * Gets document_number
     *
     * @return string
     */
    public function getDocumentNumber()
    {
        return $this->container['document_number'];
    }

    /**
     * Sets document_number
     *
     * @param string $document_number Number for document (invoice) on Easybill API.
     *
     * @return self
     */
    public function setDocumentNumber($document_number)
    {
        if (is_null($document_number)) {
            throw new \InvalidArgumentException('non-nullable document_number cannot be null');
        }
        $this->container['document_number'] = $document_number;

        return $this;
    }

    /**
     * Gets cancellation_document_id
     *
     * @return float
     */
    public function getCancellationDocumentId()
    {
        return $this->container['cancellation_document_id'];
    }

    /**
     * Sets cancellation_document_id
     *
     * @param float $cancellation_document_id Id for cancellation document (invoice) on Easybill API.
     *
     * @return self
     */
    public function setCancellationDocumentId($cancellation_document_id)
    {
        if (is_null($cancellation_document_id)) {
            throw new \InvalidArgumentException('non-nullable cancellation_document_id cannot be null');
        }
        $this->container['cancellation_document_id'] = $cancellation_document_id;

        return $this;
    }

    /**
     * Gets is_cancellation_document_sent
     *
     * @return bool|null
     */
    public function getIsCancellationDocumentSent()
    {
        return $this->container['is_cancellation_document_sent'];
    }

    /**
     * Sets is_cancellation_document_sent
     *
     * @param bool|null $is_cancellation_document_sent If true cancellation document has been cancelled on Easybill API.
     *
     * @return self
     */
    public function setIsCancellationDocumentSent($is_cancellation_document_sent)
    {
        if (is_null($is_cancellation_document_sent)) {
            throw new \InvalidArgumentException('non-nullable is_cancellation_document_sent cannot be null');
        }
        $this->container['is_cancellation_document_sent'] = $is_cancellation_document_sent;

        return $this;
    }

    /**
     * Gets cancellation_document_sent_at
     *
     * @return \DateTime|null
     */
    public function getCancellationDocumentSentAt()
    {
        return $this->container['cancellation_document_sent_at'];
    }

    /**
     * Sets cancellation_document_sent_at
     *
     * @param \DateTime|null $cancellation_document_sent_at Date of cancellation document sent on Easybill API.
     *
     * @return self
     */
    public function setCancellationDocumentSentAt($cancellation_document_sent_at)
    {
        if (is_null($cancellation_document_sent_at)) {
            throw new \InvalidArgumentException('non-nullable cancellation_document_sent_at cannot be null');
        }
        $this->container['cancellation_document_sent_at'] = $cancellation_document_sent_at;

        return $this;
    }

    /**
     * Gets document_amount
     *
     * @return float
     */
    public function getDocumentAmount()
    {
        return $this->container['document_amount'];
    }

    /**
     * Sets document_amount
     *
     * @param float $document_amount document_amount
     *
     * @return self
     */
    public function setDocumentAmount($document_amount)
    {
        if (is_null($document_amount)) {
            throw new \InvalidArgumentException('non-nullable document_amount cannot be null');
        }
        $this->container['document_amount'] = $document_amount;

        return $this;
    }

    /**
     * Gets is_done
     *
     * @return bool|null
     */
    public function getIsDone()
    {
        return $this->container['is_done'];
    }

    /**
     * Sets is_done
     *
     * @param bool|null $is_done If true invoicing for related orders is finished on Easybill API.
     *
     * @return self
     */
    public function setIsDone($is_done)
    {
        if (is_null($is_done)) {
            throw new \InvalidArgumentException('non-nullable is_done cannot be null');
        }
        $this->container['is_done'] = $is_done;

        return $this;
    }

    /**
     * Gets orders
     *
     * @return \kruegge82\cargoboard\Model\OrderId[]
     */
    public function getOrders()
    {
        return $this->container['orders'];
    }

    /**
     * Sets orders
     *
     * @param \kruegge82\cargoboard\Model\OrderId[] $orders orders
     *
     * @return self
     */
    public function setOrders($orders)
    {
        if (is_null($orders)) {
            throw new \InvalidArgumentException('non-nullable orders cannot be null');
        }
        $this->container['orders'] = $orders;

        return $this;
    }

    /**
     * Gets customer
     *
     * @return \kruegge82\cargoboard\Model\CustomerId
     */
    public function getCustomer()
    {
        return $this->container['customer'];
    }

    /**
     * Sets customer
     *
     * @param \kruegge82\cargoboard\Model\CustomerId $customer customer
     *
     * @return self
     */
    public function setCustomer($customer)
    {
        if (is_null($customer)) {
            throw new \InvalidArgumentException('non-nullable customer cannot be null');
        }
        $this->container['customer'] = $customer;

        return $this;
    }

    /**
     * Gets due_date
     *
     * @return \DateTime|null
     */
    public function getDueDate()
    {
        return $this->container['due_date'];
    }

    /**
     * Sets due_date
     *
     * @param \DateTime|null $due_date Date (time part value will be omitted) to when invoice should be paid.
     *
     * @return self
     */
    public function setDueDate($due_date)
    {
        if (is_null($due_date)) {
            throw new \InvalidArgumentException('non-nullable due_date cannot be null');
        }
        $this->container['due_date'] = $due_date;

        return $this;
    }

    /**
     * Gets due_in_days
     *
     * @return float|null
     */
    public function getDueInDays()
    {
        return $this->container['due_in_days'];
    }

    /**
     * Sets due_in_days
     *
     * @param float|null $due_in_days Period of time in days to when invoice should be paid.
     *
     * @return self
     */
    public function setDueInDays($due_in_days)
    {
        if (is_null($due_in_days)) {
            throw new \InvalidArgumentException('non-nullable due_in_days cannot be null');
        }
        $this->container['due_in_days'] = $due_in_days;

        return $this;
    }

    /**
     * Gets is_paid
     *
     * @return bool|null
     */
    public function getIsPaid()
    {
        return $this->container['is_paid'];
    }

    /**
     * Sets is_paid
     *
     * @param bool|null $is_paid If true invoice is paid.
     *
     * @return self
     */
    public function setIsPaid($is_paid)
    {
        if (is_null($is_paid)) {
            throw new \InvalidArgumentException('non-nullable is_paid cannot be null');
        }
        $this->container['is_paid'] = $is_paid;

        return $this;
    }

    /**
     * Gets paid_at
     *
     * @return \DateTime|null
     */
    public function getPaidAt()
    {
        return $this->container['paid_at'];
    }

    /**
     * Sets paid_at
     *
     * @param \DateTime|null $paid_at Date of payment.
     *
     * @return self
     */
    public function setPaidAt($paid_at)
    {
        if (is_null($paid_at)) {
            throw new \InvalidArgumentException('non-nullable paid_at cannot be null');
        }
        $this->container['paid_at'] = $paid_at;

        return $this;
    }

    /**
     * Gets payment_amount
     *
     * @return float
     */
    public function getPaymentAmount()
    {
        return $this->container['payment_amount'];
    }

    /**
     * Sets payment_amount
     *
     * @param float $payment_amount Amount for payment.
     *
     * @return self
     */
    public function setPaymentAmount($payment_amount)
    {
        if (is_null($payment_amount)) {
            throw new \InvalidArgumentException('non-nullable payment_amount cannot be null');
        }
        $this->container['payment_amount'] = $payment_amount;

        return $this;
    }

    /**
     * Gets payment_currency
     *
     * @return string|null
     */
    public function getPaymentCurrency()
    {
        return $this->container['payment_currency'];
    }

    /**
     * Sets payment_currency
     *
     * @param string|null $payment_currency Currency for payment. Possible values: EUR.
     *
     * @return self
     */
    public function setPaymentCurrency($payment_currency)
    {
        if (is_null($payment_currency)) {
            throw new \InvalidArgumentException('non-nullable payment_currency cannot be null');
        }
        $allowedValues = $this->getPaymentCurrencyAllowableValues();
        if (!in_array($payment_currency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'payment_currency', must be one of '%s'",
                    $payment_currency,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['payment_currency'] = $payment_currency;

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


