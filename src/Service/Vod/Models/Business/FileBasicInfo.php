<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_media.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.FileBasicInfo</code>
 */
class FileBasicInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * tos侧的key，即directUrl中的FileName
     *
     * Generated from protobuf field <code>string FileName = 1;</code>
     */
    protected $FileName = '';
    /**
     *对象大小
     *
     * Generated from protobuf field <code>int64 Size = 2;</code>
     */
    protected $Size = 0;
    /**
     *存储类型(STANDARD/ARCHIVE/IA)
     *
     * Generated from protobuf field <code>string StorageClass = 3;</code>
     */
    protected $StorageClass = '';
    /**
     *最近修改时间
     *
     * Generated from protobuf field <code>string UpdatedTime = 4;</code>
     */
    protected $UpdatedTime = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $FileName
     *           tos侧的key，即directUrl中的FileName
     *     @type int|string $Size
     *          对象大小
     *     @type string $StorageClass
     *          存储类型(STANDARD/ARCHIVE/IA)
     *     @type string $UpdatedTime
     *          最近修改时间
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodMedia::initOnce();
        parent::__construct($data);
    }

    /**
     * tos侧的key，即directUrl中的FileName
     *
     * Generated from protobuf field <code>string FileName = 1;</code>
     * @return string
     */
    public function getFileName()
    {
        return $this->FileName;
    }

    /**
     * tos侧的key，即directUrl中的FileName
     *
     * Generated from protobuf field <code>string FileName = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFileName($var)
    {
        GPBUtil::checkString($var, True);
        $this->FileName = $var;

        return $this;
    }

    /**
     *对象大小
     *
     * Generated from protobuf field <code>int64 Size = 2;</code>
     * @return int|string
     */
    public function getSize()
    {
        return $this->Size;
    }

    /**
     *对象大小
     *
     * Generated from protobuf field <code>int64 Size = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSize($var)
    {
        GPBUtil::checkInt64($var);
        $this->Size = $var;

        return $this;
    }

    /**
     *存储类型(STANDARD/ARCHIVE/IA)
     *
     * Generated from protobuf field <code>string StorageClass = 3;</code>
     * @return string
     */
    public function getStorageClass()
    {
        return $this->StorageClass;
    }

    /**
     *存储类型(STANDARD/ARCHIVE/IA)
     *
     * Generated from protobuf field <code>string StorageClass = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setStorageClass($var)
    {
        GPBUtil::checkString($var, True);
        $this->StorageClass = $var;

        return $this;
    }

    /**
     *最近修改时间
     *
     * Generated from protobuf field <code>string UpdatedTime = 4;</code>
     * @return string
     */
    public function getUpdatedTime()
    {
        return $this->UpdatedTime;
    }

    /**
     *最近修改时间
     *
     * Generated from protobuf field <code>string UpdatedTime = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setUpdatedTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->UpdatedTime = $var;

        return $this;
    }

}

