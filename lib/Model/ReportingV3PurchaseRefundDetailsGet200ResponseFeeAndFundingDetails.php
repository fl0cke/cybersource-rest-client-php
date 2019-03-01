<?php
/**
 * ReportingV3PurchaseRefundDetailsGet200ResponseFeeAndFundingDetails
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
 * ReportingV3PurchaseRefundDetailsGet200ResponseFeeAndFundingDetails Class Doc Comment
 *
 * @category    Class
 * @description Fee Funding Section
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ReportingV3PurchaseRefundDetailsGet200ResponseFeeAndFundingDetails implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'reportingV3PurchaseRefundDetailsGet200Response_feeAndFundingDetails';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'requestId' => 'string',
        'interchangePerItemFee' => 'string',
        'discountPercentage' => 'string',
        'discountAmount' => 'string',
        'discountPerItemFee' => 'string',
        'totalFee' => 'string',
        'feeCurrency' => 'string',
        'duesAssessments' => 'string',
        'fundingAmount' => 'string',
        'fundingCurrency' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'requestId' => null,
        'interchangePerItemFee' => null,
        'discountPercentage' => null,
        'discountAmount' => null,
        'discountPerItemFee' => null,
        'totalFee' => null,
        'feeCurrency' => null,
        'duesAssessments' => null,
        'fundingAmount' => null,
        'fundingCurrency' => null
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
        'requestId' => 'requestId',
        'interchangePerItemFee' => 'interchangePerItemFee',
        'discountPercentage' => 'discountPercentage',
        'discountAmount' => 'discountAmount',
        'discountPerItemFee' => 'discountPerItemFee',
        'totalFee' => 'totalFee',
        'feeCurrency' => 'feeCurrency',
        'duesAssessments' => 'duesAssessments',
        'fundingAmount' => 'fundingAmount',
        'fundingCurrency' => 'fundingCurrency'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'requestId' => 'setRequestId',
        'interchangePerItemFee' => 'setInterchangePerItemFee',
        'discountPercentage' => 'setDiscountPercentage',
        'discountAmount' => 'setDiscountAmount',
        'discountPerItemFee' => 'setDiscountPerItemFee',
        'totalFee' => 'setTotalFee',
        'feeCurrency' => 'setFeeCurrency',
        'duesAssessments' => 'setDuesAssessments',
        'fundingAmount' => 'setFundingAmount',
        'fundingCurrency' => 'setFundingCurrency'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'requestId' => 'getRequestId',
        'interchangePerItemFee' => 'getInterchangePerItemFee',
        'discountPercentage' => 'getDiscountPercentage',
        'discountAmount' => 'getDiscountAmount',
        'discountPerItemFee' => 'getDiscountPerItemFee',
        'totalFee' => 'getTotalFee',
        'feeCurrency' => 'getFeeCurrency',
        'duesAssessments' => 'getDuesAssessments',
        'fundingAmount' => 'getFundingAmount',
        'fundingCurrency' => 'getFundingCurrency'
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
        $this->container['requestId'] = isset($data['requestId']) ? $data['requestId'] : null;
        $this->container['interchangePerItemFee'] = isset($data['interchangePerItemFee']) ? $data['interchangePerItemFee'] : null;
        $this->container['discountPercentage'] = isset($data['discountPercentage']) ? $data['discountPercentage'] : null;
        $this->container['discountAmount'] = isset($data['discountAmount']) ? $data['discountAmount'] : null;
        $this->container['discountPerItemFee'] = isset($data['discountPerItemFee']) ? $data['discountPerItemFee'] : null;
        $this->container['totalFee'] = isset($data['totalFee']) ? $data['totalFee'] : null;
        $this->container['feeCurrency'] = isset($data['feeCurrency']) ? $data['feeCurrency'] : null;
        $this->container['duesAssessments'] = isset($data['duesAssessments']) ? $data['duesAssessments'] : null;
        $this->container['fundingAmount'] = isset($data['fundingAmount']) ? $data['fundingAmount'] : null;
        $this->container['fundingCurrency'] = isset($data['fundingCurrency']) ? $data['fundingCurrency'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['requestId']) && (strlen($this->container['requestId']) > 26)) {
            $invalid_properties[] = "invalid value for 'requestId', the character length must be smaller than or equal to 26.";
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

        if (strlen($this->container['requestId']) > 26) {
            return false;
        }
        return true;
    }


    /**
     * Gets requestId
     * @return string
     */
    public function getRequestId()
    {
        return $this->container['requestId'];
    }

    /**
     * Sets requestId
     * @param string $requestId An unique identification number assigned by CyberSource to identify the submitted request.
     * @return $this
     */
    public function setRequestId($requestId)
    {
        if (!is_null($requestId) && (strlen($requestId) > 26)) {
            throw new \InvalidArgumentException('invalid length for $requestId when calling ReportingV3PurchaseRefundDetailsGet200ResponseFeeAndFundingDetails., must be smaller than or equal to 26.');
        }

        $this->container['requestId'] = $requestId;

        return $this;
    }

    /**
     * Gets interchangePerItemFee
     * @return string
     */
    public function getInterchangePerItemFee()
    {
        return $this->container['interchangePerItemFee'];
    }

    /**
     * Sets interchangePerItemFee
     * @param string $interchangePerItemFee interchange Per Item Fee
     * @return $this
     */
    public function setInterchangePerItemFee($interchangePerItemFee)
    {
        $this->container['interchangePerItemFee'] = $interchangePerItemFee;

        return $this;
    }

    /**
     * Gets discountPercentage
     * @return string
     */
    public function getDiscountPercentage()
    {
        return $this->container['discountPercentage'];
    }

    /**
     * Sets discountPercentage
     * @param string $discountPercentage Discount Percentage
     * @return $this
     */
    public function setDiscountPercentage($discountPercentage)
    {
        $this->container['discountPercentage'] = $discountPercentage;

        return $this;
    }

    /**
     * Gets discountAmount
     * @return string
     */
    public function getDiscountAmount()
    {
        return $this->container['discountAmount'];
    }

    /**
     * Sets discountAmount
     * @param string $discountAmount Discount Amount
     * @return $this
     */
    public function setDiscountAmount($discountAmount)
    {
        $this->container['discountAmount'] = $discountAmount;

        return $this;
    }

    /**
     * Gets discountPerItemFee
     * @return string
     */
    public function getDiscountPerItemFee()
    {
        return $this->container['discountPerItemFee'];
    }

    /**
     * Sets discountPerItemFee
     * @param string $discountPerItemFee Discount Per Item Fee
     * @return $this
     */
    public function setDiscountPerItemFee($discountPerItemFee)
    {
        $this->container['discountPerItemFee'] = $discountPerItemFee;

        return $this;
    }

    /**
     * Gets totalFee
     * @return string
     */
    public function getTotalFee()
    {
        return $this->container['totalFee'];
    }

    /**
     * Sets totalFee
     * @param string $totalFee Total Fee
     * @return $this
     */
    public function setTotalFee($totalFee)
    {
        $this->container['totalFee'] = $totalFee;

        return $this;
    }

    /**
     * Gets feeCurrency
     * @return string
     */
    public function getFeeCurrency()
    {
        return $this->container['feeCurrency'];
    }

    /**
     * Sets feeCurrency
     * @param string $feeCurrency Fee Currency
     * @return $this
     */
    public function setFeeCurrency($feeCurrency)
    {
        $this->container['feeCurrency'] = $feeCurrency;

        return $this;
    }

    /**
     * Gets duesAssessments
     * @return string
     */
    public function getDuesAssessments()
    {
        return $this->container['duesAssessments'];
    }

    /**
     * Sets duesAssessments
     * @param string $duesAssessments Dues Assessments
     * @return $this
     */
    public function setDuesAssessments($duesAssessments)
    {
        $this->container['duesAssessments'] = $duesAssessments;

        return $this;
    }

    /**
     * Gets fundingAmount
     * @return string
     */
    public function getFundingAmount()
    {
        return $this->container['fundingAmount'];
    }

    /**
     * Sets fundingAmount
     * @param string $fundingAmount Funding Amount
     * @return $this
     */
    public function setFundingAmount($fundingAmount)
    {
        $this->container['fundingAmount'] = $fundingAmount;

        return $this;
    }

    /**
     * Gets fundingCurrency
     * @return string
     */
    public function getFundingCurrency()
    {
        return $this->container['fundingCurrency'];
    }

    /**
     * Sets fundingCurrency
     * @param string $fundingCurrency Funding Currency (ISO 4217)
     * @return $this
     */
    public function setFundingCurrency($fundingCurrency)
    {
        $this->container['fundingCurrency'] = $fundingCurrency;

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


