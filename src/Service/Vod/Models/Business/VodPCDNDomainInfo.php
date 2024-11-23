<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_cdn.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.VodPCDNDomainInfo</code>
 */
class VodPCDNDomainInfo extends \Google\Protobuf\Internal\Message
{
    /**
     *域名
     *
     * Generated from protobuf field <code>string Domain = 1;</code>
     */
    protected $Domain = '';
    /**
     *运行状态，enable：运行中，disable：停用。
     *
     * Generated from protobuf field <code>string Status = 2;</code>
     */
    protected $Status = '';
    /**
     *创建时间
     *
     * Generated from protobuf field <code>string CreateTime = 3;</code>
     */
    protected $CreateTime = '';
    /**
     *更新时间
     *
     * Generated from protobuf field <code>string UpdateTime = 4;</code>
     */
    protected $UpdateTime = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Domain
     *          域名
     *     @type string $Status
     *          运行状态，enable：运行中，disable：停用。
     *     @type string $CreateTime
     *          创建时间
     *     @type string $UpdateTime
     *          更新时间
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodCdn::initOnce();
        parent::__construct($data);
    }

    /**
     *域名
     *
     * Generated from protobuf field <code>string Domain = 1;</code>
     * @return string
     */
    public function getDomain()
    {
        return $this->Domain;
    }

    /**
     *域名
     *
     * Generated from protobuf field <code>string Domain = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setDomain($var)
    {
        GPBUtil::checkString($var, True);
        $this->Domain = $var;

        return $this;
    }

    /**
     *运行状态，enable：运行中，disable：停用。
     *
     * Generated from protobuf field <code>string Status = 2;</code>
     * @return string
     */
    public function getStatus()
    {
        return $this->Status;
    }

    /**
     *运行状态，enable：运行中，disable：停用。
     *
     * Generated from protobuf field <code>string Status = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setStatus($var)
    {
        GPBUtil::checkString($var, True);
        $this->Status = $var;

        return $this;
    }

    /**
     *创建时间
     *
     * Generated from protobuf field <code>string CreateTime = 3;</code>
     * @return string
     */
    public function getCreateTime()
    {
        return $this->CreateTime;
    }

    /**
     *创建时间
     *
     * Generated from protobuf field <code>string CreateTime = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->CreateTime = $var;

        return $this;
    }

    /**
     *更新时间
     *
     * Generated from protobuf field <code>string UpdateTime = 4;</code>
     * @return string
     */
    public function getUpdateTime()
    {
        return $this->UpdateTime;
    }

    /**
     *更新时间
     *
     * Generated from protobuf field <code>string UpdateTime = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->UpdateTime = $var;

        return $this;
    }

}

