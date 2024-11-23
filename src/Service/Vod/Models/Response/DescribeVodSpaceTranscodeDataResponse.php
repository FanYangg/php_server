<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/response/response_vod.proto

namespace Volc\Service\Vod\Models\Response;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * **********************************************************************
 * 计量计费
 * **********************************************************************
 * 转码用量
 *
 * Generated from protobuf message <code>Volcengine.Vod.Models.Response.DescribeVodSpaceTranscodeDataResponse</code>
 */
class DescribeVodSpaceTranscodeDataResponse extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>.Volcengine.Base.Models.Base.ResponseMetadata ResponseMetadata = 1;</code>
     */
    protected $ResponseMetadata = null;
    /**
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.DescribeVodSpaceTranscodeDataResult Result = 2;</code>
     */
    protected $Result = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Volc\Service\Base\Models\Base\ResponseMetadata $ResponseMetadata
     *     @type \Volc\Service\Vod\Models\Business\DescribeVodSpaceTranscodeDataResult $Result
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\ResponseVod::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Base.Models.Base.ResponseMetadata ResponseMetadata = 1;</code>
     * @return \Volc\Service\Base\Models\Base\ResponseMetadata|null
     */
    public function getResponseMetadata()
    {
        return $this->ResponseMetadata;
    }

    public function hasResponseMetadata()
    {
        return isset($this->ResponseMetadata);
    }

    public function clearResponseMetadata()
    {
        unset($this->ResponseMetadata);
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Base.Models.Base.ResponseMetadata ResponseMetadata = 1;</code>
     * @param \Volc\Service\Base\Models\Base\ResponseMetadata $var
     * @return $this
     */
    public function setResponseMetadata($var)
    {
        GPBUtil::checkMessage($var, \Volc\Service\Base\Models\Base\ResponseMetadata::class);
        $this->ResponseMetadata = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.DescribeVodSpaceTranscodeDataResult Result = 2;</code>
     * @return \Volc\Service\Vod\Models\Business\DescribeVodSpaceTranscodeDataResult|null
     */
    public function getResult()
    {
        return $this->Result;
    }

    public function hasResult()
    {
        return isset($this->Result);
    }

    public function clearResult()
    {
        unset($this->Result);
    }

    /**
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.DescribeVodSpaceTranscodeDataResult Result = 2;</code>
     * @param \Volc\Service\Vod\Models\Business\DescribeVodSpaceTranscodeDataResult $var
     * @return $this
     */
    public function setResult($var)
    {
        GPBUtil::checkMessage($var, \Volc\Service\Vod\Models\Business\DescribeVodSpaceTranscodeDataResult::class);
        $this->Result = $var;

        return $this;
    }

}

