<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_media.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.VodAEDEventItemForAudit</code>
 */
class VodAEDEventItemForAudit extends \Google\Protobuf\Internal\Message
{
    /**
     *事件名，仅当识别成功时填写
     *
     * Generated from protobuf field <code>string Event = 1;</code>
     */
    protected $Event = '';
    /**
     *整条音频对应的事件概率，仅当识别成功时填写
     *
     * Generated from protobuf field <code>double UttProb = 2;</code>
     */
    protected $UttProb = 0.0;
    /**
     *事件识别区间，仅当识别成功时填写
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodAEDTimeRangeForAudit TimeRanges = 3;</code>
     */
    private $TimeRanges;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Event
     *          事件名，仅当识别成功时填写
     *     @type float $UttProb
     *          整条音频对应的事件概率，仅当识别成功时填写
     *     @type \Volc\Service\Vod\Models\Business\VodAEDTimeRangeForAudit[]|\Google\Protobuf\Internal\RepeatedField $TimeRanges
     *          事件识别区间，仅当识别成功时填写
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodMedia::initOnce();
        parent::__construct($data);
    }

    /**
     *事件名，仅当识别成功时填写
     *
     * Generated from protobuf field <code>string Event = 1;</code>
     * @return string
     */
    public function getEvent()
    {
        return $this->Event;
    }

    /**
     *事件名，仅当识别成功时填写
     *
     * Generated from protobuf field <code>string Event = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setEvent($var)
    {
        GPBUtil::checkString($var, True);
        $this->Event = $var;

        return $this;
    }

    /**
     *整条音频对应的事件概率，仅当识别成功时填写
     *
     * Generated from protobuf field <code>double UttProb = 2;</code>
     * @return float
     */
    public function getUttProb()
    {
        return $this->UttProb;
    }

    /**
     *整条音频对应的事件概率，仅当识别成功时填写
     *
     * Generated from protobuf field <code>double UttProb = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setUttProb($var)
    {
        GPBUtil::checkDouble($var);
        $this->UttProb = $var;

        return $this;
    }

    /**
     *事件识别区间，仅当识别成功时填写
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodAEDTimeRangeForAudit TimeRanges = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getTimeRanges()
    {
        return $this->TimeRanges;
    }

    /**
     *事件识别区间，仅当识别成功时填写
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodAEDTimeRangeForAudit TimeRanges = 3;</code>
     * @param \Volc\Service\Vod\Models\Business\VodAEDTimeRangeForAudit[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setTimeRanges($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Volc\Service\Vod\Models\Business\VodAEDTimeRangeForAudit::class);
        $this->TimeRanges = $arr;

        return $this;
    }

}

