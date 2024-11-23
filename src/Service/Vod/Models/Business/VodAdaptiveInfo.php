<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_common.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.VodAdaptiveInfo</code>
 */
class VodAdaptiveInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * mpd主链接
     *
     * Generated from protobuf field <code>string MainPlayUrl = 1;</code>
     */
    protected $MainPlayUrl = '';
    /**
     * mpd备用链接
     *
     * Generated from protobuf field <code>string BackupPlayUrl = 2;</code>
     */
    protected $BackupPlayUrl = '';
    /**
     * 动态类型segment_base-mpd,segment_template-dash
     *
     * Generated from protobuf field <code>string AdaptiveType = 3;</code>
     */
    protected $AdaptiveType = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $MainPlayUrl
     *           mpd主链接
     *     @type string $BackupPlayUrl
     *           mpd备用链接
     *     @type string $AdaptiveType
     *           动态类型segment_base-mpd,segment_template-dash
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodCommon::initOnce();
        parent::__construct($data);
    }

    /**
     * mpd主链接
     *
     * Generated from protobuf field <code>string MainPlayUrl = 1;</code>
     * @return string
     */
    public function getMainPlayUrl()
    {
        return $this->MainPlayUrl;
    }

    /**
     * mpd主链接
     *
     * Generated from protobuf field <code>string MainPlayUrl = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMainPlayUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->MainPlayUrl = $var;

        return $this;
    }

    /**
     * mpd备用链接
     *
     * Generated from protobuf field <code>string BackupPlayUrl = 2;</code>
     * @return string
     */
    public function getBackupPlayUrl()
    {
        return $this->BackupPlayUrl;
    }

    /**
     * mpd备用链接
     *
     * Generated from protobuf field <code>string BackupPlayUrl = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setBackupPlayUrl($var)
    {
        GPBUtil::checkString($var, True);
        $this->BackupPlayUrl = $var;

        return $this;
    }

    /**
     * 动态类型segment_base-mpd,segment_template-dash
     *
     * Generated from protobuf field <code>string AdaptiveType = 3;</code>
     * @return string
     */
    public function getAdaptiveType()
    {
        return $this->AdaptiveType;
    }

    /**
     * 动态类型segment_base-mpd,segment_template-dash
     *
     * Generated from protobuf field <code>string AdaptiveType = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setAdaptiveType($var)
    {
        GPBUtil::checkString($var, True);
        $this->AdaptiveType = $var;

        return $this;
    }

}

