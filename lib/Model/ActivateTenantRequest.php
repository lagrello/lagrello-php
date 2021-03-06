<?php
/**
 * ActivateTenantRequest
 *
 * PHP version 7.2
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Lagrello API
 *
 * API specification for Lagrello, a simple to use authentication service
 *
 * The version of the OpenAPI document: 1.0.0
 * Contact: support@lagrello.com
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ActivateTenantRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null  
 */
class ActivateTenantRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ActivateTenantRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'company_name' => 'string',
        'company_address' => 'string',
        'company_city' => 'string',
        'company_postal_code' => 'string',
        'company_country' => 'string',
        'company_org_number' => 'string',
        'company_vat_number' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'company_name' => null,
        'company_address' => null,
        'company_city' => null,
        'company_postal_code' => null,
        'company_country' => null,
        'company_org_number' => null,
        'company_vat_number' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'company_name' => 'companyName',
        'company_address' => 'companyAddress',
        'company_city' => 'companyCity',
        'company_postal_code' => 'companyPostalCode',
        'company_country' => 'companyCountry',
        'company_org_number' => 'companyOrgNumber',
        'company_vat_number' => 'companyVATNumber'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'company_name' => 'setCompanyName',
        'company_address' => 'setCompanyAddress',
        'company_city' => 'setCompanyCity',
        'company_postal_code' => 'setCompanyPostalCode',
        'company_country' => 'setCompanyCountry',
        'company_org_number' => 'setCompanyOrgNumber',
        'company_vat_number' => 'setCompanyVatNumber'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'company_name' => 'getCompanyName',
        'company_address' => 'getCompanyAddress',
        'company_city' => 'getCompanyCity',
        'company_postal_code' => 'getCompanyPostalCode',
        'company_country' => 'getCompanyCountry',
        'company_org_number' => 'getCompanyOrgNumber',
        'company_vat_number' => 'getCompanyVatNumber'
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

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['company_name'] = $data['company_name'] ?? null;
        $this->container['company_address'] = $data['company_address'] ?? null;
        $this->container['company_city'] = $data['company_city'] ?? null;
        $this->container['company_postal_code'] = $data['company_postal_code'] ?? null;
        $this->container['company_country'] = $data['company_country'] ?? null;
        $this->container['company_org_number'] = $data['company_org_number'] ?? null;
        $this->container['company_vat_number'] = $data['company_vat_number'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['company_name'] === null) {
            $invalidProperties[] = "'company_name' can't be null";
        }
        if ($this->container['company_address'] === null) {
            $invalidProperties[] = "'company_address' can't be null";
        }
        if ($this->container['company_city'] === null) {
            $invalidProperties[] = "'company_city' can't be null";
        }
        if ($this->container['company_postal_code'] === null) {
            $invalidProperties[] = "'company_postal_code' can't be null";
        }
        if ($this->container['company_country'] === null) {
            $invalidProperties[] = "'company_country' can't be null";
        }
        if ($this->container['company_org_number'] === null) {
            $invalidProperties[] = "'company_org_number' can't be null";
        }
        if ($this->container['company_vat_number'] === null) {
            $invalidProperties[] = "'company_vat_number' can't be null";
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
     * Gets company_name
     *
     * @return string
     */
    public function getCompanyName()
    {
        return $this->container['company_name'];
    }

    /**
     * Sets company_name
     *
     * @param string $company_name The full name of your company.
     *
     * @return self
     */
    public function setCompanyName($company_name)
    {
        $this->container['company_name'] = $company_name;

        return $this;
    }

    /**
     * Gets company_address
     *
     * @return string
     */
    public function getCompanyAddress()
    {
        return $this->container['company_address'];
    }

    /**
     * Sets company_address
     *
     * @param string $company_address The first line of the address for your company.
     *
     * @return self
     */
    public function setCompanyAddress($company_address)
    {
        $this->container['company_address'] = $company_address;

        return $this;
    }

    /**
     * Gets company_city
     *
     * @return string
     */
    public function getCompanyCity()
    {
        return $this->container['company_city'];
    }

    /**
     * Sets company_city
     *
     * @param string $company_city The city in which the address is located.
     *
     * @return self
     */
    public function setCompanyCity($company_city)
    {
        $this->container['company_city'] = $company_city;

        return $this;
    }

    /**
     * Gets company_postal_code
     *
     * @return string
     */
    public function getCompanyPostalCode()
    {
        return $this->container['company_postal_code'];
    }

    /**
     * Sets company_postal_code
     *
     * @param string $company_postal_code The postal code for the address.
     *
     * @return self
     */
    public function setCompanyPostalCode($company_postal_code)
    {
        $this->container['company_postal_code'] = $company_postal_code;

        return $this;
    }

    /**
     * Gets company_country
     *
     * @return string
     */
    public function getCompanyCountry()
    {
        return $this->container['company_country'];
    }

    /**
     * Sets company_country
     *
     * @param string $company_country The country in which the address is located. This should be given as an ISO 3361-1 country code (two letter abbreviation).
     *
     * @return self
     */
    public function setCompanyCountry($company_country)
    {
        $this->container['company_country'] = $company_country;

        return $this;
    }

    /**
     * Gets company_org_number
     *
     * @return string
     */
    public function getCompanyOrgNumber()
    {
        return $this->container['company_org_number'];
    }

    /**
     * Sets company_org_number
     *
     * @param string $company_org_number Your company's organization number.
     *
     * @return self
     */
    public function setCompanyOrgNumber($company_org_number)
    {
        $this->container['company_org_number'] = $company_org_number;

        return $this;
    }

    /**
     * Gets company_vat_number
     *
     * @return string
     */
    public function getCompanyVatNumber()
    {
        return $this->container['company_vat_number'];
    }

    /**
     * Sets company_vat_number
     *
     * @param string $company_vat_number A value added tax identification number, identifier used in many countries, including the countries of the European Union, for value added tax purposes.
     *
     * @return self
     */
    public function setCompanyVatNumber($company_vat_number)
    {
        $this->container['company_vat_number'] = $company_vat_number;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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


