<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_upload.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.SubmitMoveObjectTaskRespData</code>
 */
class SubmitMoveObjectTaskRespData extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string TaskId = 1;</code>
     */
    protected $TaskId = '';
    /**
     * Generated from protobuf field <code>string SourceSpace = 2;</code>
     */
    protected $SourceSpace = '';
    /**
     * Generated from protobuf field <code>string TargetSpace = 3;</code>
     */
    protected $TargetSpace = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $TaskId
     *     @type string $SourceSpace
     *     @type string $TargetSpace
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodUpload::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string TaskId = 1;</code>
     * @return string
     */
    public function getTaskId()
    {
        return $this->TaskId;
    }

    /**
     * Generated from protobuf field <code>string TaskId = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTaskId($var)
    {
        GPBUtil::checkString($var, True);
        $this->TaskId = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string SourceSpace = 2;</code>
     * @return string
     */
    public function getSourceSpace()
    {
        return $this->SourceSpace;
    }

    /**
     * Generated from protobuf field <code>string SourceSpace = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setSourceSpace($var)
    {
        GPBUtil::checkString($var, True);
        $this->SourceSpace = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string TargetSpace = 3;</code>
     * @return string
     */
    public function getTargetSpace()
    {
        return $this->TargetSpace;
    }

    /**
     * Generated from protobuf field <code>string TargetSpace = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setTargetSpace($var)
    {
        GPBUtil::checkString($var, True);
        $this->TargetSpace = $var;

        return $this;
    }

}

