<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_measure.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * 点播编辑用量明细
 *
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.DescribeVodSpaceEditDetail</code>
 */
class DescribeVodSpaceEditDetail extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string Time = 1;</code>
     */
    protected $Time = '';
    /**
     * Generated from protobuf field <code>string OutputVid = 2;</code>
     */
    protected $OutputVid = '';
    /**
     * Generated from protobuf field <code>string Space = 3;</code>
     */
    protected $Space = '';
    /**
     * Generated from protobuf field <code>string Codec = 4;</code>
     */
    protected $Codec = '';
    /**
     * Generated from protobuf field <code>string Definition = 5;</code>
     */
    protected $Definition = '';
    /**
     * Generated from protobuf field <code>int64 Duration = 6;</code>
     */
    protected $Duration = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Time
     *     @type string $OutputVid
     *     @type string $Space
     *     @type string $Codec
     *     @type string $Definition
     *     @type int|string $Duration
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodMeasure::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string Time = 1;</code>
     * @return string
     */
    public function getTime()
    {
        return $this->Time;
    }

    /**
     * Generated from protobuf field <code>string Time = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTime($var)
    {
        GPBUtil::checkString($var, True);
        $this->Time = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string OutputVid = 2;</code>
     * @return string
     */
    public function getOutputVid()
    {
        return $this->OutputVid;
    }

    /**
     * Generated from protobuf field <code>string OutputVid = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setOutputVid($var)
    {
        GPBUtil::checkString($var, True);
        $this->OutputVid = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Space = 3;</code>
     * @return string
     */
    public function getSpace()
    {
        return $this->Space;
    }

    /**
     * Generated from protobuf field <code>string Space = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSpace($var)
    {
        GPBUtil::checkString($var, True);
        $this->Space = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Codec = 4;</code>
     * @return string
     */
    public function getCodec()
    {
        return $this->Codec;
    }

    /**
     * Generated from protobuf field <code>string Codec = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setCodec($var)
    {
        GPBUtil::checkString($var, True);
        $this->Codec = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string Definition = 5;</code>
     * @return string
     */
    public function getDefinition()
    {
        return $this->Definition;
    }

    /**
     * Generated from protobuf field <code>string Definition = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setDefinition($var)
    {
        GPBUtil::checkString($var, True);
        $this->Definition = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int64 Duration = 6;</code>
     * @return int|string
     */
    public function getDuration()
    {
        return $this->Duration;
    }

    /**
     * Generated from protobuf field <code>int64 Duration = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setDuration($var)
    {
        GPBUtil::checkInt64($var);
        $this->Duration = $var;

        return $this;
    }

}

