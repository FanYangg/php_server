<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_workflow.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.DeLogoInfo</code>
 */
class DeLogoInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * Anchor基准宽度
     *
     * Generated from protobuf field <code>int64 AnchorWidth = 1;</code>
     */
    protected $AnchorWidth = 0;
    /**
     * Anchor基准宽度
     *
     * Generated from protobuf field <code>int64 AnchorHeight = 2;</code>
     */
    protected $AnchorHeight = 0;
    /**
     * 水印左上角X坐标
     *
     * Generated from protobuf field <code>int64 PosX = 3;</code>
     */
    protected $PosX = 0;
    /**
     * 水印左上角Y坐标
     *
     * Generated from protobuf field <code>int64 PosY = 4;</code>
     */
    protected $PosY = 0;
    /**
     * 水印宽度
     *
     * Generated from protobuf field <code>int64 SizeX = 5;</code>
     */
    protected $SizeX = 0;
    /**
     * 水印高度
     *
     * Generated from protobuf field <code>int64 SizeY = 6;</code>
     */
    protected $SizeY = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $AnchorWidth
     *           Anchor基准宽度
     *     @type int|string $AnchorHeight
     *           Anchor基准宽度
     *     @type int|string $PosX
     *           水印左上角X坐标
     *     @type int|string $PosY
     *           水印左上角Y坐标
     *     @type int|string $SizeX
     *           水印宽度
     *     @type int|string $SizeY
     *           水印高度
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodWorkflow::initOnce();
        parent::__construct($data);
    }

    /**
     * Anchor基准宽度
     *
     * Generated from protobuf field <code>int64 AnchorWidth = 1;</code>
     * @return int|string
     */
    public function getAnchorWidth()
    {
        return $this->AnchorWidth;
    }

    /**
     * Anchor基准宽度
     *
     * Generated from protobuf field <code>int64 AnchorWidth = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAnchorWidth($var)
    {
        GPBUtil::checkInt64($var);
        $this->AnchorWidth = $var;

        return $this;
    }

    /**
     * Anchor基准宽度
     *
     * Generated from protobuf field <code>int64 AnchorHeight = 2;</code>
     * @return int|string
     */
    public function getAnchorHeight()
    {
        return $this->AnchorHeight;
    }

    /**
     * Anchor基准宽度
     *
     * Generated from protobuf field <code>int64 AnchorHeight = 2;</code>
     * @param int|string $var
     * @return $this
     */
    public function setAnchorHeight($var)
    {
        GPBUtil::checkInt64($var);
        $this->AnchorHeight = $var;

        return $this;
    }

    /**
     * 水印左上角X坐标
     *
     * Generated from protobuf field <code>int64 PosX = 3;</code>
     * @return int|string
     */
    public function getPosX()
    {
        return $this->PosX;
    }

    /**
     * 水印左上角X坐标
     *
     * Generated from protobuf field <code>int64 PosX = 3;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPosX($var)
    {
        GPBUtil::checkInt64($var);
        $this->PosX = $var;

        return $this;
    }

    /**
     * 水印左上角Y坐标
     *
     * Generated from protobuf field <code>int64 PosY = 4;</code>
     * @return int|string
     */
    public function getPosY()
    {
        return $this->PosY;
    }

    /**
     * 水印左上角Y坐标
     *
     * Generated from protobuf field <code>int64 PosY = 4;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPosY($var)
    {
        GPBUtil::checkInt64($var);
        $this->PosY = $var;

        return $this;
    }

    /**
     * 水印宽度
     *
     * Generated from protobuf field <code>int64 SizeX = 5;</code>
     * @return int|string
     */
    public function getSizeX()
    {
        return $this->SizeX;
    }

    /**
     * 水印宽度
     *
     * Generated from protobuf field <code>int64 SizeX = 5;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSizeX($var)
    {
        GPBUtil::checkInt64($var);
        $this->SizeX = $var;

        return $this;
    }

    /**
     * 水印高度
     *
     * Generated from protobuf field <code>int64 SizeY = 6;</code>
     * @return int|string
     */
    public function getSizeY()
    {
        return $this->SizeY;
    }

    /**
     * 水印高度
     *
     * Generated from protobuf field <code>int64 SizeY = 6;</code>
     * @param int|string $var
     * @return $this
     */
    public function setSizeY($var)
    {
        GPBUtil::checkInt64($var);
        $this->SizeY = $var;

        return $this;
    }

}

