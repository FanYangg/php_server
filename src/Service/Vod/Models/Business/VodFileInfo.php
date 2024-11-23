<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_media.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 和FileBasicInfo不共用，List和head能获取到的信息内容差别有一些，不利于后期维护（文档）
 *
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.VodFileInfo</code>
 */
class VodFileInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * tos侧的key，即directUrl中的FileName
     *
     * Generated from protobuf field <code>string FileName = 1;</code>
     */
    protected $FileName = '';
    /**
     *最近修改时间
     *
     * Generated from protobuf field <code>string LastModifiedTime = 2;</code>
     */
    protected $LastModifiedTime = '';
    /**
     *对象大小
     *
     * Generated from protobuf field <code>int64 Size = 3;</code>
     */
    protected $Size = 0;
    /**
     *存储类型(STANDARD/ARCHIVE/IA)
     *
     * Generated from protobuf field <code>string StorageClass = 4;</code>
     */
    protected $StorageClass = '';
    /**
     * crc64hash值
     *
     * Generated from protobuf field <code>string HashCrc64 = 5;</code>
     */
    protected $HashCrc64 = '';
    /**
     * URL编码后的FileName
     *
     * Generated from protobuf field <code>string EncodedFileName = 6;</code>
     */
    protected $EncodedFileName = '';
    /**
     * 文件下载链接
     *
     * Generated from protobuf field <code>string DownloadUrl = 7;</code>
     */
    protected $DownloadUrl = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $FileName
     *           tos侧的key，即directUrl中的FileName
     *     @type string $LastModifiedTime
     *          最近修改时间
     *     @type int|string $Size
     *          对象大小
     *     @type string $StorageClass
     *          存储类型(STANDARD/ARCHIVE/IA)
     *     @type string $HashCrc64
     *           crc64hash值
     *     @type string $EncodedFileName
     *           URL编码后的FileName
     *     @type string $DownloadUrl
     *           文件下载链接
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
     *最近修改时间
     *
     * Generated from protobuf field <code>string LastModifiedTime = 2;</code>
     * @return string
     */
    public function getLastModifiedTime()
    {
        return $this->LastModifiedTime;
    }

    /**
     *最近修改时间
     *
     * Generated from protobuf field <code>string LastModifiedTime = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLastModifiedTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->LastModifiedTime = $var;

        return $this;
    }

    /**
     *对象大小
     *
     * Generated from protobuf field <code>int64 Size = 3;</code>
     * @return int|string
     */
    public function getSize()
    {
        return $this->Size;
    }

    /**
     *对象大小
     *
     * Generated from protobuf field <code>int64 Size = 3;</code>
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
     * Generated from protobuf field <code>string StorageClass = 4;</code>
     * @return string
     */
    public function getStorageClass()
    {
        return $this->StorageClass;
    }

    /**
     *存储类型(STANDARD/ARCHIVE/IA)
     *
     * Generated from protobuf field <code>string StorageClass = 4;</code>
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
     * crc64hash值
     *
     * Generated from protobuf field <code>string HashCrc64 = 5;</code>
     * @return string
     */
    public function getHashCrc64()
    {
        return $this->HashCrc64;
    }

    /**
     * crc64hash值
     *
     * Generated from protobuf field <code>string HashCrc64 = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setHashCrc64($var)
    {
        GPBUtil::checkString($var, True);
        $this->HashCrc64 = $var;

        return $this;
    }

    /**
     * URL编码后的FileName
     *
     * Generated from protobuf field <code>string EncodedFileName = 6;</code>
     * @return string
     */
    public function getEncodedFileName()
    {
        return $this->EncodedFileName;
    }

    /**
     * URL编码后的FileName
     *
     * Generated from protobuf field <code>string EncodedFileName = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setEncodedFileName($var)
    {
        GPBUtil::checkString($var, True);
        $this->EncodedFileName = $var;

        return $this;
    }

    /**
     * 文件下载链接
     *
     * Generated from protobuf field <code>string DownloadUrl = 7;</code>
     * @return string
     */
    public function getDownloadUrl()
    {
        return $this->DownloadUrl;
    }

    /**
     * 文件下载链接
     *
     * Generated from protobuf field <code>string DownloadUrl = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setDownloadUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->DownloadUrl = $var;

        return $this;
    }

}

