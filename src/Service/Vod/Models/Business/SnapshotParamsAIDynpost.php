<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_workflow.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.SnapshotParamsAIDynpost</code>
 */
class SnapshotParamsAIDynpost extends \Google\Protobuf\Internal\Message
{
    /**
     * Generated from protobuf field <code>string Format = 1;</code>
     */
    protected $Format = '';
    /**
     * Generated from protobuf field <code>string StoreUri = 2;</code>
     */
    protected $StoreUri = '';
    /**
     * Generated from protobuf field <code>int32 Width = 3;</code>
     */
    protected $Width = 0;
    /**
     * Generated from protobuf field <code>int32 Height = 4;</code>
     */
    protected $Height = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Format
     *     @type string $StoreUri
     *     @type int $Width
     *     @type int $Height
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodWorkflow::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>string Format = 1;</code>
     * @return string
     */
    public function getFormat()
    {
        return $this->Format;
    }

    /**
     * Generated from protobuf field <code>string Format = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFormat($var)
    {
        GPBUtil::checkString($var, True);
        $this->Format = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>string StoreUri = 2;</code>
     * @return string
     */
    public function getStoreUri()
    {
        return $this->StoreUri;
    }

    /**
     * Generated from protobuf field <code>string StoreUri = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setStoreUri($var)
    {
        GPBUtil::checkString($var, True);
        $this->StoreUri = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Width = 3;</code>
     * @return int
     */
    public function getWidth()
    {
        return $this->Width;
    }

    /**
     * Generated from protobuf field <code>int32 Width = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setWidth($var)
    {
        GPBUtil::checkInt32($var);
        $this->Width = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>int32 Height = 4;</code>
     * @return int
     */
    public function getHeight()
    {
        return $this->Height;
    }

    /**
     * Generated from protobuf field <code>int32 Height = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setHeight($var)
    {
        GPBUtil::checkInt32($var);
        $this->Height = $var;

        return $this;
    }

}

