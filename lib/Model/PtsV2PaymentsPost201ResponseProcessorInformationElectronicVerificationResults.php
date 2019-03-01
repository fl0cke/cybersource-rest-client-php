<?php
/**
 * PtsV2PaymentsPost201ResponseProcessorInformationElectronicVerificationResults
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Flex API
 *
 * Simple PAN tokenization service
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Model;

use \ArrayAccess;

/**
 * PtsV2PaymentsPost201ResponseProcessorInformationElectronicVerificationResults Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PtsV2PaymentsPost201ResponseProcessorInformationElectronicVerificationResults implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'ptsV2PaymentsPost201Response_processorInformation_electronicVerificationResults';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'code' => 'string',
        'codeRaw' => 'string',
        'email' => 'string',
        'emailRaw' => 'string',
        'phoneNumber' => 'string',
        'phoneNumberRaw' => 'string',
        'postalCode' => 'string',
        'postalCodeRaw' => 'string',
        'street' => 'string',
        'streetRaw' => 'string',
        'name' => 'string',
        'nameRaw' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'code' => null,
        'codeRaw' => null,
        'email' => null,
        'emailRaw' => null,
        'phoneNumber' => null,
        'phoneNumberRaw' => null,
        'postalCode' => null,
        'postalCodeRaw' => null,
        'street' => null,
        'streetRaw' => null,
        'name' => null,
        'nameRaw' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'code' => 'code',
        'codeRaw' => 'codeRaw',
        'email' => 'email',
        'emailRaw' => 'emailRaw',
        'phoneNumber' => 'phoneNumber',
        'phoneNumberRaw' => 'phoneNumberRaw',
        'postalCode' => 'postalCode',
        'postalCodeRaw' => 'postalCodeRaw',
        'street' => 'street',
        'streetRaw' => 'streetRaw',
        'name' => 'name',
        'nameRaw' => 'nameRaw'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'code' => 'setCode',
        'codeRaw' => 'setCodeRaw',
        'email' => 'setEmail',
        'emailRaw' => 'setEmailRaw',
        'phoneNumber' => 'setPhoneNumber',
        'phoneNumberRaw' => 'setPhoneNumberRaw',
        'postalCode' => 'setPostalCode',
        'postalCodeRaw' => 'setPostalCodeRaw',
        'street' => 'setStreet',
        'streetRaw' => 'setStreetRaw',
        'name' => 'setName',
        'nameRaw' => 'setNameRaw'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'code' => 'getCode',
        'codeRaw' => 'getCodeRaw',
        'email' => 'getEmail',
        'emailRaw' => 'getEmailRaw',
        'phoneNumber' => 'getPhoneNumber',
        'phoneNumberRaw' => 'getPhoneNumberRaw',
        'postalCode' => 'getPostalCode',
        'postalCodeRaw' => 'getPostalCodeRaw',
        'street' => 'getStreet',
        'streetRaw' => 'getStreetRaw',
        'name' => 'getName',
        'nameRaw' => 'getNameRaw'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['code'] = isset($data['code']) ? $data['code'] : null;
        $this->container['codeRaw'] = isset($data['codeRaw']) ? $data['codeRaw'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['emailRaw'] = isset($data['emailRaw']) ? $data['emailRaw'] : null;
        $this->container['phoneNumber'] = isset($data['phoneNumber']) ? $data['phoneNumber'] : null;
        $this->container['phoneNumberRaw'] = isset($data['phoneNumberRaw']) ? $data['phoneNumberRaw'] : null;
        $this->container['postalCode'] = isset($data['postalCode']) ? $data['postalCode'] : null;
        $this->container['postalCodeRaw'] = isset($data['postalCodeRaw']) ? $data['postalCodeRaw'] : null;
        $this->container['street'] = isset($data['street']) ? $data['street'] : null;
        $this->container['streetRaw'] = isset($data['streetRaw']) ? $data['streetRaw'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['nameRaw'] = isset($data['nameRaw']) ? $data['nameRaw'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['code']) && (strlen($this->container['code']) > 1)) {
            $invalid_properties[] = "invalid value for 'code', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['codeRaw']) && (strlen($this->container['codeRaw']) > 1)) {
            $invalid_properties[] = "invalid value for 'codeRaw', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['email']) && (strlen($this->container['email']) > 1)) {
            $invalid_properties[] = "invalid value for 'email', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['emailRaw']) && (strlen($this->container['emailRaw']) > 1)) {
            $invalid_properties[] = "invalid value for 'emailRaw', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['phoneNumber']) && (strlen($this->container['phoneNumber']) > 1)) {
            $invalid_properties[] = "invalid value for 'phoneNumber', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['phoneNumberRaw']) && (strlen($this->container['phoneNumberRaw']) > 1)) {
            $invalid_properties[] = "invalid value for 'phoneNumberRaw', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['postalCode']) && (strlen($this->container['postalCode']) > 1)) {
            $invalid_properties[] = "invalid value for 'postalCode', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['postalCodeRaw']) && (strlen($this->container['postalCodeRaw']) > 1)) {
            $invalid_properties[] = "invalid value for 'postalCodeRaw', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['street']) && (strlen($this->container['street']) > 1)) {
            $invalid_properties[] = "invalid value for 'street', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['streetRaw']) && (strlen($this->container['streetRaw']) > 1)) {
            $invalid_properties[] = "invalid value for 'streetRaw', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['name']) && (strlen($this->container['name']) > 30)) {
            $invalid_properties[] = "invalid value for 'name', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['nameRaw']) && (strlen($this->container['nameRaw']) > 30)) {
            $invalid_properties[] = "invalid value for 'nameRaw', the character length must be smaller than or equal to 30.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if (strlen($this->container['code']) > 1) {
            return false;
        }
        if (strlen($this->container['codeRaw']) > 1) {
            return false;
        }
        if (strlen($this->container['email']) > 1) {
            return false;
        }
        if (strlen($this->container['emailRaw']) > 1) {
            return false;
        }
        if (strlen($this->container['phoneNumber']) > 1) {
            return false;
        }
        if (strlen($this->container['phoneNumberRaw']) > 1) {
            return false;
        }
        if (strlen($this->container['postalCode']) > 1) {
            return false;
        }
        if (strlen($this->container['postalCodeRaw']) > 1) {
            return false;
        }
        if (strlen($this->container['street']) > 1) {
            return false;
        }
        if (strlen($this->container['streetRaw']) > 1) {
            return false;
        }
        if (strlen($this->container['name']) > 30) {
            return false;
        }
        if (strlen($this->container['nameRaw']) > 30) {
            return false;
        }
        return true;
    }


    /**
     * Gets code
     * @return string
     */
    public function getCode()
    {
        return $this->container['code'];
    }

    /**
     * Sets code
     * @param string $code Mapped Electronic Verification response code for the customer’s name.
     * @return $this
     */
    public function setCode($code)
    {
        if (!is_null($code) && (strlen($code) > 1)) {
            throw new \InvalidArgumentException('invalid length for $code when calling PtsV2PaymentsPost201ResponseProcessorInformationElectronicVerificationResults., must be smaller than or equal to 1.');
        }

        $this->container['code'] = $code;

        return $this;
    }

    /**
     * Gets codeRaw
     * @return string
     */
    public function getCodeRaw()
    {
        return $this->container['codeRaw'];
    }

    /**
     * Sets codeRaw
     * @param string $codeRaw Raw Electronic Verification response code from the processor for the customer’s last name
     * @return $this
     */
    public function setCodeRaw($codeRaw)
    {
        if (!is_null($codeRaw) && (strlen($codeRaw) > 1)) {
            throw new \InvalidArgumentException('invalid length for $codeRaw when calling PtsV2PaymentsPost201ResponseProcessorInformationElectronicVerificationResults., must be smaller than or equal to 1.');
        }

        $this->container['codeRaw'] = $codeRaw;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email Mapped Electronic Verification response code for the customer’s email address.
     * @return $this
     */
    public function setEmail($email)
    {
        if (!is_null($email) && (strlen($email) > 1)) {
            throw new \InvalidArgumentException('invalid length for $email when calling PtsV2PaymentsPost201ResponseProcessorInformationElectronicVerificationResults., must be smaller than or equal to 1.');
        }

        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets emailRaw
     * @return string
     */
    public function getEmailRaw()
    {
        return $this->container['emailRaw'];
    }

    /**
     * Sets emailRaw
     * @param string $emailRaw Raw Electronic Verification response code from the processor for the customer’s email address.
     * @return $this
     */
    public function setEmailRaw($emailRaw)
    {
        if (!is_null($emailRaw) && (strlen($emailRaw) > 1)) {
            throw new \InvalidArgumentException('invalid length for $emailRaw when calling PtsV2PaymentsPost201ResponseProcessorInformationElectronicVerificationResults., must be smaller than or equal to 1.');
        }

        $this->container['emailRaw'] = $emailRaw;

        return $this;
    }

    /**
     * Gets phoneNumber
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->container['phoneNumber'];
    }

    /**
     * Sets phoneNumber
     * @param string $phoneNumber Mapped Electronic Verification response code for the customer’s phone number.
     * @return $this
     */
    public function setPhoneNumber($phoneNumber)
    {
        if (!is_null($phoneNumber) && (strlen($phoneNumber) > 1)) {
            throw new \InvalidArgumentException('invalid length for $phoneNumber when calling PtsV2PaymentsPost201ResponseProcessorInformationElectronicVerificationResults., must be smaller than or equal to 1.');
        }

        $this->container['phoneNumber'] = $phoneNumber;

        return $this;
    }

    /**
     * Gets phoneNumberRaw
     * @return string
     */
    public function getPhoneNumberRaw()
    {
        return $this->container['phoneNumberRaw'];
    }

    /**
     * Sets phoneNumberRaw
     * @param string $phoneNumberRaw Raw Electronic Verification response code from the processor for the customer’s phone number.
     * @return $this
     */
    public function setPhoneNumberRaw($phoneNumberRaw)
    {
        if (!is_null($phoneNumberRaw) && (strlen($phoneNumberRaw) > 1)) {
            throw new \InvalidArgumentException('invalid length for $phoneNumberRaw when calling PtsV2PaymentsPost201ResponseProcessorInformationElectronicVerificationResults., must be smaller than or equal to 1.');
        }

        $this->container['phoneNumberRaw'] = $phoneNumberRaw;

        return $this;
    }

    /**
     * Gets postalCode
     * @return string
     */
    public function getPostalCode()
    {
        return $this->container['postalCode'];
    }

    /**
     * Sets postalCode
     * @param string $postalCode Mapped Electronic Verification response code for the customer’s postal code.
     * @return $this
     */
    public function setPostalCode($postalCode)
    {
        if (!is_null($postalCode) && (strlen($postalCode) > 1)) {
            throw new \InvalidArgumentException('invalid length for $postalCode when calling PtsV2PaymentsPost201ResponseProcessorInformationElectronicVerificationResults., must be smaller than or equal to 1.');
        }

        $this->container['postalCode'] = $postalCode;

        return $this;
    }

    /**
     * Gets postalCodeRaw
     * @return string
     */
    public function getPostalCodeRaw()
    {
        return $this->container['postalCodeRaw'];
    }

    /**
     * Sets postalCodeRaw
     * @param string $postalCodeRaw Raw Electronic Verification response code from the processor for the customer’s postal code.
     * @return $this
     */
    public function setPostalCodeRaw($postalCodeRaw)
    {
        if (!is_null($postalCodeRaw) && (strlen($postalCodeRaw) > 1)) {
            throw new \InvalidArgumentException('invalid length for $postalCodeRaw when calling PtsV2PaymentsPost201ResponseProcessorInformationElectronicVerificationResults., must be smaller than or equal to 1.');
        }

        $this->container['postalCodeRaw'] = $postalCodeRaw;

        return $this;
    }

    /**
     * Gets street
     * @return string
     */
    public function getStreet()
    {
        return $this->container['street'];
    }

    /**
     * Sets street
     * @param string $street Mapped Electronic Verification response code for the customer’s street address.
     * @return $this
     */
    public function setStreet($street)
    {
        if (!is_null($street) && (strlen($street) > 1)) {
            throw new \InvalidArgumentException('invalid length for $street when calling PtsV2PaymentsPost201ResponseProcessorInformationElectronicVerificationResults., must be smaller than or equal to 1.');
        }

        $this->container['street'] = $street;

        return $this;
    }

    /**
     * Gets streetRaw
     * @return string
     */
    public function getStreetRaw()
    {
        return $this->container['streetRaw'];
    }

    /**
     * Sets streetRaw
     * @param string $streetRaw Raw Electronic Verification response code from the processor for the customer’s street address.
     * @return $this
     */
    public function setStreetRaw($streetRaw)
    {
        if (!is_null($streetRaw) && (strlen($streetRaw) > 1)) {
            throw new \InvalidArgumentException('invalid length for $streetRaw when calling PtsV2PaymentsPost201ResponseProcessorInformationElectronicVerificationResults., must be smaller than or equal to 1.');
        }

        $this->container['streetRaw'] = $streetRaw;

        return $this;
    }

    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name The description for this field is not available.
     * @return $this
     */
    public function setName($name)
    {
        if (!is_null($name) && (strlen($name) > 30)) {
            throw new \InvalidArgumentException('invalid length for $name when calling PtsV2PaymentsPost201ResponseProcessorInformationElectronicVerificationResults., must be smaller than or equal to 30.');
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets nameRaw
     * @return string
     */
    public function getNameRaw()
    {
        return $this->container['nameRaw'];
    }

    /**
     * Sets nameRaw
     * @param string $nameRaw The description for this field is not available.
     * @return $this
     */
    public function setNameRaw($nameRaw)
    {
        if (!is_null($nameRaw) && (strlen($nameRaw) > 30)) {
            throw new \InvalidArgumentException('invalid length for $nameRaw when calling PtsV2PaymentsPost201ResponseProcessorInformationElectronicVerificationResults., must be smaller than or equal to 30.');
        }

        $this->container['nameRaw'] = $nameRaw;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this));
    }
}


