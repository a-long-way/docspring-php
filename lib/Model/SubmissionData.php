<?php
/**
 * SubmissionData
 *
 * PHP version 5
 *
 * @category Class
 * @package  DocSpring
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * API v1
 *
 * DocSpring is a service that helps you fill out and sign PDF templates.
 *
 * OpenAPI spec version: v1
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 3.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace DocSpring\Model;

use \ArrayAccess;
use \DocSpring\ObjectSerializer;

/**
 * SubmissionData Class Doc Comment
 *
 * @category Class
 * @package  DocSpring
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class SubmissionData implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'submission_data';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'css' => 'string',
        'data' => 'object',
        'data_requests' => '\DocSpring\Model\CreateSubmissionDataRequestData[]',
        'expires_in' => 'int',
        'field_overrides' => 'object',
        'html' => 'string',
        'metadata' => 'object',
        'password' => 'string',
        'test' => 'bool'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'css' => null,
        'data' => null,
        'data_requests' => null,
        'expires_in' => null,
        'field_overrides' => null,
        'html' => null,
        'metadata' => null,
        'password' => null,
        'test' => null
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
        'css' => 'css',
        'data' => 'data',
        'data_requests' => 'data_requests',
        'expires_in' => 'expires_in',
        'field_overrides' => 'field_overrides',
        'html' => 'html',
        'metadata' => 'metadata',
        'password' => 'password',
        'test' => 'test'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'css' => 'setCss',
        'data' => 'setData',
        'data_requests' => 'setDataRequests',
        'expires_in' => 'setExpiresIn',
        'field_overrides' => 'setFieldOverrides',
        'html' => 'setHtml',
        'metadata' => 'setMetadata',
        'password' => 'setPassword',
        'test' => 'setTest'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'css' => 'getCss',
        'data' => 'getData',
        'data_requests' => 'getDataRequests',
        'expires_in' => 'getExpiresIn',
        'field_overrides' => 'getFieldOverrides',
        'html' => 'getHtml',
        'metadata' => 'getMetadata',
        'password' => 'getPassword',
        'test' => 'getTest'
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
        $this->container['css'] = isset($data['css']) ? $data['css'] : null;
        $this->container['data'] = isset($data['data']) ? $data['data'] : null;
        $this->container['data_requests'] = isset($data['data_requests']) ? $data['data_requests'] : null;
        $this->container['expires_in'] = isset($data['expires_in']) ? $data['expires_in'] : null;
        $this->container['field_overrides'] = isset($data['field_overrides']) ? $data['field_overrides'] : null;
        $this->container['html'] = isset($data['html']) ? $data['html'] : null;
        $this->container['metadata'] = isset($data['metadata']) ? $data['metadata'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['test'] = isset($data['test']) ? $data['test'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['data'] === null) {
            $invalidProperties[] = "'data' can't be null";
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
     * Gets css
     *
     * @return string|null
     */
    public function getCss()
    {
        return $this->container['css'];
    }

    /**
     * Sets css
     *
     * @param string|null $css css
     *
     * @return $this
     */
    public function setCss($css)
    {
        $this->container['css'] = $css;

        return $this;
    }

    /**
     * Gets data
     *
     * @return object
     */
    public function getData()
    {
        return $this->container['data'];
    }

    /**
     * Sets data
     *
     * @param object $data data
     *
     * @return $this
     */
    public function setData($data)
    {
        $this->container['data'] = $data;

        return $this;
    }

    /**
     * Gets data_requests
     *
     * @return \DocSpring\Model\CreateSubmissionDataRequestData[]|null
     */
    public function getDataRequests()
    {
        return $this->container['data_requests'];
    }

    /**
     * Sets data_requests
     *
     * @param \DocSpring\Model\CreateSubmissionDataRequestData[]|null $data_requests data_requests
     *
     * @return $this
     */
    public function setDataRequests($data_requests)
    {
        $this->container['data_requests'] = $data_requests;

        return $this;
    }

    /**
     * Gets expires_in
     *
     * @return int|null
     */
    public function getExpiresIn()
    {
        return $this->container['expires_in'];
    }

    /**
     * Sets expires_in
     *
     * @param int|null $expires_in expires_in
     *
     * @return $this
     */
    public function setExpiresIn($expires_in)
    {
        $this->container['expires_in'] = $expires_in;

        return $this;
    }

    /**
     * Gets field_overrides
     *
     * @return object|null
     */
    public function getFieldOverrides()
    {
        return $this->container['field_overrides'];
    }

    /**
     * Sets field_overrides
     *
     * @param object|null $field_overrides field_overrides
     *
     * @return $this
     */
    public function setFieldOverrides($field_overrides)
    {
        $this->container['field_overrides'] = $field_overrides;

        return $this;
    }

    /**
     * Gets html
     *
     * @return string|null
     */
    public function getHtml()
    {
        return $this->container['html'];
    }

    /**
     * Sets html
     *
     * @param string|null $html html
     *
     * @return $this
     */
    public function setHtml($html)
    {
        $this->container['html'] = $html;

        return $this;
    }

    /**
     * Gets metadata
     *
     * @return object|null
     */
    public function getMetadata()
    {
        return $this->container['metadata'];
    }

    /**
     * Sets metadata
     *
     * @param object|null $metadata metadata
     *
     * @return $this
     */
    public function setMetadata($metadata)
    {
        $this->container['metadata'] = $metadata;

        return $this;
    }

    /**
     * Gets password
     *
     * @return string|null
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /**
     * Sets password
     *
     * @param string|null $password password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /**
     * Gets test
     *
     * @return bool|null
     */
    public function getTest()
    {
        return $this->container['test'];
    }

    /**
     * Sets test
     *
     * @param bool|null $test test
     *
     * @return $this
     */
    public function setTest($test)
    {
        $this->container['test'] = $test;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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
}


