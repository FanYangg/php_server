<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_upload.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.QueryMoveObjectTaskInfoRespData</code>
 */
class QueryMoveObjectTaskInfoRespData extends \Google\Protobuf\Internal\Message
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
     * Generated from protobuf field <code>string State = 4;</code>
     */
    protected $State = '';
    /**
     * Generated from protobuf field <code>string TaskRunResult = 5;</code>
     */
    protected $TaskRunResult = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $TaskId
     *     @type string $SourceSpace
     *     @type string $TargetSpace
     *     @type string $State
     *     @type string $TaskRunResult
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

    /**
     * Generated from protobuf field <code>string State = 4;</code>
     * @return string
     */
    public function getState()
    {
        return $this->State;
    }

    /**
     * Generated from protobuf field <code>string State = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setState($var)
    {
        GPBUtil::checkString($var, True);
        $this->State = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string TaskRunResult = 5;</code>
     * @return string
     */
    public function getTaskRunResult()
    {
        return $this->TaskRunResult;
    }

    /**
     * Generated from protobuf field <code>string TaskRunResult = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setTaskRunResult($var)
    {
        GPBUtil::checkString($var, True);
        $this->TaskRunResult = $var;

        return $this;
    }

}

