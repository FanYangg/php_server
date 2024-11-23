<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: volcengine/vod/request/request_vod.proto

namespace Volc\Service\Vod\Models\Request;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>Volcengine.Vod.Models.Request.VodUrlUploadRequest</code>
 */
class VodUrlUploadRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * 上传的空间名 
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     */
    protected $SpaceName = '';
    /**
     * 上传URL设置参数集合，每个URL入参的设置均在此设置 
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodUrlUploadURLSet URLSets = 2;</code>
     */
    private $URLSets;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $SpaceName
     *           上传的空间名 
     *     @type \Volc\Service\Vod\Models\Business\VodUrlUploadURLSet[]|\Google\Protobuf\Internal\RepeatedField $URLSets
     *           上传URL设置参数集合，每个URL入参的设置均在此设置 
     * }
     */
    public function __construct($data = NULL) {
        \Volc\Service\Vod\Models\GPBMetadata\RequestVod::initOnce();
        parent::__construct($data);
    }

    /**
     * 上传的空间名 
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     * @return string
     */
    public function getSpaceName()
    {
        return $this->SpaceName;
    }

    /**
     * 上传的空间名 
     *
     * Generated from protobuf field <code>string SpaceName = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setSpaceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->SpaceName = $var;

        return $this;
    }

    /**
     * 上传URL设置参数集合，每个URL入参的设置均在此设置 
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodUrlUploadURLSet URLSets = 2;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getURLSets()
    {
        return $this->URLSets;
    }

    /**
     * 上传URL设置参数集合，每个URL入参的设置均在此设置 
     *
     * Generated from protobuf field <code>repeated .Volcengine.Vod.Models.Business.VodUrlUploadURLSet URLSets = 2;</code>
     * @param \Volc\Service\Vod\Models\Business\VodUrlUploadURLSet[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setURLSets($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Volc\Service\Vod\Models\Business\VodUrlUploadURLSet::class);
        $this->URLSets = $arr;

        return $this;
    }

}

