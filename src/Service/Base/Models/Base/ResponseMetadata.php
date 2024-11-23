<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/base/base.proto

namespace Volc\Service\Base\Models\Base;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Base.Models.Base.ResponseMetadata</code>
 */
class ResponseMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * 请求ID
     *
     * Generated from protobuf field <code>string RequestId = 1;</code>
     */
    protected $RequestId = '';
    /**
     * 请求接口
     *
     * Generated from protobuf field <code>string Action = 2;</code>
     */
    protected $Action = '';
    /**
     * 版本
     *
     * Generated from protobuf field <code>string Version = 3;</code>
     */
    protected $Version = '';
    /**
     * 服务
     *
     * Generated from protobuf field <code>string Service = 4;</code>
     */
    protected $Service = '';
    /**
     * 区域
     *
     * Generated from protobuf field <code>string Region = 5;</code>
     */
    protected $Region = '';
    /**
     * 异常信息
     *
     * Generated from protobuf field <code>.Volcengine.Base.Models.Base.ResponseError Error = 6;</code>
     */
    protected $Error = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $RequestId
     *           请求ID
     *     @type string $Action
     *           请求接口
     *     @type string $Version
     *           版本
     *     @type string $Service
     *           服务
     *     @type string $Region
     *           区域
     *     @type \Volc\Service\Base\Models\Base\ResponseError $Error
     *           异常信息
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Base\Models\GPBMetadata\Base::initOnce();
        parent::__construct($data);
    }

    /**
     * 请求ID
     *
     * Generated from protobuf field <code>string RequestId = 1;</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->RequestId;
    }

    /**
     * 请求ID
     *
     * Generated from protobuf field <code>string RequestId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->RequestId = $var;

        return $this;
    }

    /**
     * 请求接口
     *
     * Generated from protobuf field <code>string Action = 2;</code>
     * @return string
     */
    public function getAction()
    {
        return $this->Action;
    }

    /**
     * 请求接口
     *
     * Generated from protobuf field <code>string Action = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setAction($var)
    {
        GPBUtil::checkString($var, True);
        $this->Action = $var;

        return $this;
    }

    /**
     * 版本
     *
     * Generated from protobuf field <code>string Version = 3;</code>
     * @return string
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * 版本
     *
     * Generated from protobuf field <code>string Version = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->Version = $var;

        return $this;
    }

    /**
     * 服务
     *
     * Generated from protobuf field <code>string Service = 4;</code>
     * @return string
     */
    public function getService()
    {
        return $this->Service;
    }

    /**
     * 服务
     *
     * Generated from protobuf field <code>string Service = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setService($var)
    {
        GPBUtil::checkString($var, True);
        $this->Service = $var;

        return $this;
    }

    /**
     * 区域
     *
     * Generated from protobuf field <code>string Region = 5;</code>
     * @return string
     */
    public function getRegion()
    {
        return $this->Region;
    }

    /**
     * 区域
     *
     * Generated from protobuf field <code>string Region = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setRegion($var)
    {
        GPBUtil::checkString($var, True);
        $this->Region = $var;

        return $this;
    }

    /**
     * 异常信息
     *
     * Generated from protobuf field <code>.Volcengine.Base.Models.Base.ResponseError Error = 6;</code>
     * @return \Volc\Service\Base\Models\Base\ResponseError|null
     */
    public function getError()
    {
        return $this->Error;
    }

    public function hasError()
    {
        return isset($this->Error);
    }

    public function clearError()
    {
        unset($this->Error);
    }

    /**
     * 异常信息
     *
     * Generated from protobuf field <code>.Volcengine.Base.Models.Base.ResponseError Error = 6;</code>
     * @param \Volc\Service\Base\Models\Base\ResponseError $var
     * @return $this
     */
    public function setError($var)
    {
        GPBUtil::checkMessage($var, \Volc\Service\Base\Models\Base\ResponseError::class);
        $this->Error = $var;

        return $this;
    }

}

