<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/request/request_vod.proto

namespace Volc\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Request.VodDescribeVodDomainBandwidthDataRequest</code>
 */
class VodDescribeVodDomainBandwidthDataRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * 域名列表,多个域名用逗号分割 
     *
     * Generated from protobuf field <code>string DomainList = 1;</code>
     */
    protected $DomainList = '';
    /**
     * 点播空间名和域名列表。格式为空间:域名 
     *
     * Generated from protobuf field <code>string DomainInSpaceList = 2;</code>
     */
    protected $DomainInSpaceList = '';
    /**
     * 查询的起始时间, rfc3339 
     *
     * Generated from protobuf field <code>string StartTime = 3;</code>
     */
    protected $StartTime = '';
    /**
     * 查询的结束时间, rfc3339；查询时间跨度不超过93天 
     *
     * Generated from protobuf field <code>string EndTime = 4;</code>
     */
    protected $EndTime = '';
    /**
     * 聚合的时间粒度，单位秒，默认300，支持300，1800，3600和86400 
     *
     * Generated from protobuf field <code>int32 Aggregation = 5;</code>
     */
    protected $Aggregation = 0;
    /**
     * 默认是CDN，支持CDN、ECDN、ALL 
     *
     * Generated from protobuf field <code>string BandwidthType = 6;</code>
     */
    protected $BandwidthType = '';
    /**
     * 加速区域 
     *
     * Generated from protobuf field <code>string Area = 7;</code>
     */
    protected $Area = '';
    /**
     * 空间区域 
     *
     * Generated from protobuf field <code>string RegionList = 8;</code>
     */
    protected $RegionList = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $DomainList
     *           域名列表,多个域名用逗号分割 
     *     @type string $DomainInSpaceList
     *           点播空间名和域名列表。格式为空间:域名 
     *     @type string $StartTime
     *           查询的起始时间, rfc3339 
     *     @type string $EndTime
     *           查询的结束时间, rfc3339；查询时间跨度不超过93天 
     *     @type int $Aggregation
     *           聚合的时间粒度，单位秒，默认300，支持300，1800，3600和86400 
     *     @type string $BandwidthType
     *           默认是CDN，支持CDN、ECDN、ALL 
     *     @type string $Area
     *           加速区域 
     *     @type string $RegionList
     *           空间区域 
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\RequestVod::initOnce();
        parent::__construct($data);
    }

    /**
     * 域名列表,多个域名用逗号分割 
     *
     * Generated from protobuf field <code>string DomainList = 1;</code>
     * @return string
     */
    public function getDomainList()
    {
        return $this->DomainList;
    }

    /**
     * 域名列表,多个域名用逗号分割 
     *
     * Generated from protobuf field <code>string DomainList = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDomainList($var)
    {
        GPBUtil::checkString($var, True);
        $this->DomainList = $var;

        return $this;
    }

    /**
     * 点播空间名和域名列表。格式为空间:域名 
     *
     * Generated from protobuf field <code>string DomainInSpaceList = 2;</code>
     * @return string
     */
    public function getDomainInSpaceList()
    {
        return $this->DomainInSpaceList;
    }

    /**
     * 点播空间名和域名列表。格式为空间:域名 
     *
     * Generated from protobuf field <code>string DomainInSpaceList = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setDomainInSpaceList($var)
    {
        GPBUtil::checkString($var, True);
        $this->DomainInSpaceList = $var;

        return $this;
    }

    /**
     * 查询的起始时间, rfc3339 
     *
     * Generated from protobuf field <code>string StartTime = 3;</code>
     * @return string
     */
    public function getStartTime()
    {
        return $this->StartTime;
    }

    /**
     * 查询的起始时间, rfc3339 
     *
     * Generated from protobuf field <code>string StartTime = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setStartTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->StartTime = $var;

        return $this;
    }

    /**
     * 查询的结束时间, rfc3339；查询时间跨度不超过93天 
     *
     * Generated from protobuf field <code>string EndTime = 4;</code>
     * @return string
     */
    public function getEndTime()
    {
        return $this->EndTime;
    }

    /**
     * 查询的结束时间, rfc3339；查询时间跨度不超过93天 
     *
     * Generated from protobuf field <code>string EndTime = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setEndTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->EndTime = $var;

        return $this;
    }

    /**
     * 聚合的时间粒度，单位秒，默认300，支持300，1800，3600和86400 
     *
     * Generated from protobuf field <code>int32 Aggregation = 5;</code>
     * @return int
     */
    public function getAggregation()
    {
        return $this->Aggregation;
    }

    /**
     * 聚合的时间粒度，单位秒，默认300，支持300，1800，3600和86400 
     *
     * Generated from protobuf field <code>int32 Aggregation = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setAggregation($var)
    {
        GPBUtil::checkInt32($var);
        $this->Aggregation = $var;

        return $this;
    }

    /**
     * 默认是CDN，支持CDN、ECDN、ALL 
     *
     * Generated from protobuf field <code>string BandwidthType = 6;</code>
     * @return string
     */
    public function getBandwidthType()
    {
        return $this->BandwidthType;
    }

    /**
     * 默认是CDN，支持CDN、ECDN、ALL 
     *
     * Generated from protobuf field <code>string BandwidthType = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setBandwidthType($var)
    {
        GPBUtil::checkString($var, True);
        $this->BandwidthType = $var;

        return $this;
    }

    /**
     * 加速区域 
     *
     * Generated from protobuf field <code>string Area = 7;</code>
     * @return string
     */
    public function getArea()
    {
        return $this->Area;
    }

    /**
     * 加速区域 
     *
     * Generated from protobuf field <code>string Area = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setArea($var)
    {
        GPBUtil::checkString($var, True);
        $this->Area = $var;

        return $this;
    }

    /**
     * 空间区域 
     *
     * Generated from protobuf field <code>string RegionList = 8;</code>
     * @return string
     */
    public function getRegionList()
    {
        return $this->RegionList;
    }

    /**
     * 空间区域 
     *
     * Generated from protobuf field <code>string RegionList = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setRegionList($var)
    {
        GPBUtil::checkString($var, True);
        $this->RegionList = $var;

        return $this;
    }

}

