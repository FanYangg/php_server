<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_cdn.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.VodPCDNDomainInstanceInfos</code>
 */
class VodPCDNDomainInstanceInfos extends \Google\Protobuf\Internal\Message
{
    /**
     * PCDN实例
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodPCDNDomainInfo Domains = 1;</code>
     */
    private $Domains;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Volc\Service\Vod\Models\Business\VodPCDNDomainInfo[]|\Google\Protobuf\Internal\RepeatedField $Domains
     *           PCDN实例
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodCdn::initOnce();
        parent::__construct($data);
    }

    /**
     * PCDN实例
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodPCDNDomainInfo Domains = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getDomains()
    {
        return $this->Domains;
    }

    /**
     * PCDN实例
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodPCDNDomainInfo Domains = 1;</code>
     * @param \Volc\Service\Vod\Models\Business\VodPCDNDomainInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setDomains($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Volc\Service\Vod\Models\Business\VodPCDNDomainInfo::class);
        $this->Domains = $arr;

        return $this;
    }

}

