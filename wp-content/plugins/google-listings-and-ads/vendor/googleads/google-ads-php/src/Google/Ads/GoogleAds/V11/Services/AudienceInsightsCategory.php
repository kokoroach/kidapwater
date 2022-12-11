<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/services/audience_insights_service.proto

namespace Google\Ads\GoogleAds\V11\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A Product and Service category.
 *
 * Generated from protobuf message <code>google.ads.googleads.v11.services.AudienceInsightsCategory</code>
 */
class AudienceInsightsCategory extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The criterion id of the category.
     *
     * Generated from protobuf field <code>string category_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $category_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $category_id
     *           Required. The criterion id of the category.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V11\Services\AudienceInsightsService::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The criterion id of the category.
     *
     * Generated from protobuf field <code>string category_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * Required. The criterion id of the category.
     *
     * Generated from protobuf field <code>string category_id = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setCategoryId($var)
    {
        GPBUtil::checkString($var, True);
        $this->category_id = $var;

        return $this;
    }

}

