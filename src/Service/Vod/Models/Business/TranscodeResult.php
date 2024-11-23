<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/business/vod_workflow.proto

namespace Volc\Service\Vod\Models\Business;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Business.TranscodeResult</code>
 */
class TranscodeResult extends \Google\Protobuf\Internal\Message
{
    /**
     *视频id，为请求值
     *
     * Generated from protobuf field <code>string Vid = 1;</code>
     */
    protected $Vid = '';
    /**
     * 片源检测结果
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.Inspection Inspection = 2;</code>
     */
    protected $Inspection = null;
    /**
     * 视频分类结果
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.CategoryTagInfo CategoryTags = 3;</code>
     */
    private $CategoryTags;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $Vid
     *          视频id，为请求值
     *     @type \Volc\Service\Vod\Models\Business\Inspection $Inspection
     *           片源检测结果
     *     @type \Volc\Service\Vod\Models\Business\CategoryTagInfo[]|\Google\Protobuf\Internal\RepeatedField $CategoryTags
     *           视频分类结果
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\VodWorkflow::initOnce();
        parent::__construct($data);
    }

    /**
     *视频id，为请求值
     *
     * Generated from protobuf field <code>string Vid = 1;</code>
     * @return string
     */
    public function getVid()
    {
        return $this->Vid;
    }

    /**
     *视频id，为请求值
     *
     * Generated from protobuf field <code>string Vid = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setVid($var)
    {
        GPBUtil::checkString($var, True);
        $this->Vid = $var;

        return $this;
    }

    /**
     * 片源检测结果
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.Inspection Inspection = 2;</code>
     * @return \Volc\Service\Vod\Models\Business\Inspection|null
     */
    public function getInspection()
    {
        return $this->Inspection;
    }

    public function hasInspection()
    {
        return isset($this->Inspection);
    }

    public function clearInspection()
    {
        unset($this->Inspection);
    }

    /**
     * 片源检测结果
     *
     * Generated from protobuf field <code>.Volcengine.Vod.Models.Business.Inspection Inspection = 2;</code>
     * @param \Volc\Service\Vod\Models\Business\Inspection $var
     * @return $this
     */
    public function setInspection($var)
    {
        GPBUtil::checkMessage($var, \Volc\Service\Vod\Models\Business\Inspection::class);
        $this->Inspection = $var;

        return $this;
    }

    /**
     * 视频分类结果
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.CategoryTagInfo CategoryTags = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getCategoryTags()
    {
        return $this->CategoryTags;
    }

    /**
     * 视频分类结果
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.CategoryTagInfo CategoryTags = 3;</code>
     * @param \Volc\Service\Vod\Models\Business\CategoryTagInfo[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setCategoryTags($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Volc\Service\Vod\Models\Business\CategoryTagInfo::class);
        $this->CategoryTags = $arr;

        return $this;
    }

}

