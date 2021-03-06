<?php
/**
 * ImportMsgRequest
 *
 * PHP version 5
 *
 * @category Class
 * @package  TencentCloud\IM

 */

/**
 * TIM SERVER REST API SDK
 *
 * TIM REST API
 *
 * 
 */

/**
 *
 * Do not edit the class manually.
 */

namespace TencentCloud\IM\Model;

use \ArrayAccess;
use \TencentCloud\IM\ObjectSerializer;

/**
 * ImportMsgRequest Class Doc Comment
 *
 * @category Class
 * @package  TencentCloud\IM

 */
class ImportMsgRequest implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ImportMsgRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'syncFromOldSystem' => 'int',
        'fromAccount' => 'string',
        'toAccount' => 'string',
        'msgSeq' => 'int',
        'msgRandom' => 'int',
        'msgTimeStamp' => 'int',
        'msgBody' => '\TencentCloud\IM\Model\TIMMsgElement[]',
        'cloudCustomData' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'syncFromOldSystem' => 'int32',
        'fromAccount' => null,
        'toAccount' => null,
        'msgSeq' => 'int32',
        'msgRandom' => 'int32',
        'msgTimeStamp' => 'int32',
        'msgBody' => null,
        'cloudCustomData' => null
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
        'syncFromOldSystem' => 'SyncFromOldSystem',
        'fromAccount' => 'From_Account',
        'toAccount' => 'To_Account',
        'msgSeq' => 'MsgSeq',
        'msgRandom' => 'MsgRandom',
        'msgTimeStamp' => 'MsgTimeStamp',
        'msgBody' => 'MsgBody',
        'cloudCustomData' => 'CloudCustomData'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'syncFromOldSystem' => 'setSyncFromOldSystem',
        'fromAccount' => 'setFromAccount',
        'toAccount' => 'setToAccount',
        'msgSeq' => 'setMsgSeq',
        'msgRandom' => 'setMsgRandom',
        'msgTimeStamp' => 'setMsgTimeStamp',
        'msgBody' => 'setMsgBody',
        'cloudCustomData' => 'setCloudCustomData'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'syncFromOldSystem' => 'getSyncFromOldSystem',
        'fromAccount' => 'getFromAccount',
        'toAccount' => 'getToAccount',
        'msgSeq' => 'getMsgSeq',
        'msgRandom' => 'getMsgRandom',
        'msgTimeStamp' => 'getMsgTimeStamp',
        'msgBody' => 'getMsgBody',
        'cloudCustomData' => 'getCloudCustomData'
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

    const SYNC_FROM_OLD_SYSTEM_1 = 1;
    const SYNC_FROM_OLD_SYSTEM_2 = 2;
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSyncFromOldSystemAllowableValues()
    {
        return [
            self::SYNC_FROM_OLD_SYSTEM_1,
            self::SYNC_FROM_OLD_SYSTEM_2,
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
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['syncFromOldSystem'] = isset($data['syncFromOldSystem']) ? $data['syncFromOldSystem'] : null;
        $this->container['fromAccount'] = isset($data['fromAccount']) ? $data['fromAccount'] : null;
        $this->container['toAccount'] = isset($data['toAccount']) ? $data['toAccount'] : null;
        $this->container['msgSeq'] = isset($data['msgSeq']) ? $data['msgSeq'] : null;
        $this->container['msgRandom'] = isset($data['msgRandom']) ? $data['msgRandom'] : null;
        $this->container['msgTimeStamp'] = isset($data['msgTimeStamp']) ? $data['msgTimeStamp'] : null;
        $this->container['msgBody'] = isset($data['msgBody']) ? $data['msgBody'] : null;
        $this->container['cloudCustomData'] = isset($data['cloudCustomData']) ? $data['cloudCustomData'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['syncFromOldSystem'] === null) {
            $invalidProperties[] = "'syncFromOldSystem' can't be null";
        }
        $allowedValues = $this->getSyncFromOldSystemAllowableValues();
        if (!is_null($this->container['syncFromOldSystem']) && !in_array($this->container['syncFromOldSystem'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'syncFromOldSystem', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['fromAccount'] === null) {
            $invalidProperties[] = "'fromAccount' can't be null";
        }
        if ($this->container['toAccount'] === null) {
            $invalidProperties[] = "'toAccount' can't be null";
        }
        if ($this->container['msgRandom'] === null) {
            $invalidProperties[] = "'msgRandom' can't be null";
        }
        if ($this->container['msgTimeStamp'] === null) {
            $invalidProperties[] = "'msgTimeStamp' can't be null";
        }
        if ($this->container['msgBody'] === null) {
            $invalidProperties[] = "'msgBody' can't be null";
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
     * Gets syncFromOldSystem
     *
     * @return int
     */
    public function getSyncFromOldSystem()
    {
        return $this->container['syncFromOldSystem'];
    }

    /**
     * Sets syncFromOldSystem
     *
     * @param int $syncFromOldSystem ??????????????????1???2???????????????????????? 1??????????????????????????????????????????????????? 2????????????????????????????????????????????????
     *
     * @return $this
     */
    public function setSyncFromOldSystem($syncFromOldSystem)
    {
        $allowedValues = $this->getSyncFromOldSystemAllowableValues();
        if (!in_array($syncFromOldSystem, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'syncFromOldSystem', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['syncFromOldSystem'] = $syncFromOldSystem;

        return $this;
    }

    /**
     * Gets fromAccount
     *
     * @return string
     */
    public function getFromAccount()
    {
        return $this->container['fromAccount'];
    }

    /**
     * Sets fromAccount
     *
     * @param string $fromAccount ??????????????? UserID??????????????????????????????
     *
     * @return $this
     */
    public function setFromAccount($fromAccount)
    {
        $this->container['fromAccount'] = $fromAccount;

        return $this;
    }

    /**
     * Gets toAccount
     *
     * @return string
     */
    public function getToAccount()
    {
        return $this->container['toAccount'];
    }

    /**
     * Sets toAccount
     *
     * @param string $toAccount ??????????????? UserID
     *
     * @return $this
     */
    public function setToAccount($toAccount)
    {
        $this->container['toAccount'] = $toAccount;

        return $this;
    }

    /**
     * Gets msgSeq
     *
     * @return int|null
     */
    public function getMsgSeq()
    {
        return $this->container['msgSeq'];
    }

    /**
     * Sets msgSeq
     *
     * @param int|null $msgSeq ??????????????????32???????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????????
     *
     * @return $this
     */
    public function setMsgSeq($msgSeq)
    {
        $this->container['msgSeq'] = $msgSeq;

        return $this;
    }

    /**
     * Gets msgRandom
     *
     * @return int
     */
    public function getMsgRandom()
    {
        return $this->container['msgRandom'];
    }

    /**
     * Sets msgRandom
     *
     * @param int $msgRandom ??????????????????32???????????????????????????????????????????????????????????????????????????????????????????????????
     *
     * @return $this
     */
    public function setMsgRandom($msgRandom)
    {
        $this->container['msgRandom'] = $msgRandom;

        return $this;
    }

    /**
     * Gets msgTimeStamp
     *
     * @return int
     */
    public function getMsgTimeStamp()
    {
        return $this->container['msgTimeStamp'];
    }

    /**
     * Sets msgTimeStamp
     *
     * @param int $msgTimeStamp ??????????????????UNIX ?????????????????????????????????????????????????????????????????????????????????????????????????????????
     *
     * @return $this
     */
    public function setMsgTimeStamp($msgTimeStamp)
    {
        $this->container['msgTimeStamp'] = $msgTimeStamp;

        return $this;
    }

    /**
     * Gets msgBody
     *
     * @return \TencentCloud\IM\Model\TIMMsgElement[]
     */
    public function getMsgBody()
    {
        return $this->container['msgBody'];
    }

    /**
     * Sets msgBody
     *
     * @param \TencentCloud\IM\Model\TIMMsgElement[] $msgBody ???????????????????????????????????????https://cloud.tencent.com/document/product/269/2720???????????????????????????????????????????????????????????????????????????MsgBody ??? Array ?????????
     *
     * @return $this
     */
    public function setMsgBody($msgBody)
    {
        $this->container['msgBody'] = $msgBody;

        return $this;
    }

    /**
     * Gets cloudCustomData
     *
     * @return string|null
     */
    public function getCloudCustomData()
    {
        return $this->container['cloudCustomData'];
    }

    /**
     * Sets cloudCustomData
     *
     * @param string|null $cloudCustomData ???????????????????????????????????????????????????????????????????????????????????????????????????
     *
     * @return $this
     */
    public function setCloudCustomData($cloudCustomData)
    {
        $this->container['cloudCustomData'] = $cloudCustomData;

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


