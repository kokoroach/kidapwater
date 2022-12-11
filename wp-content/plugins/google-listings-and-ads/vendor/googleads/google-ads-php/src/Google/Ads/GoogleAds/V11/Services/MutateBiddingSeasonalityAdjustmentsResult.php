<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v11/services/bidding_seasonality_adjustment_service.proto

namespace Google\Ads\GoogleAds\V11\Services;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The result for the seasonality adjustment mutate.
 *
 * Generated from protobuf message <code>google.ads.googleads.v11.services.MutateBiddingSeasonalityAdjustmentsResult</code>
 */
class MutateBiddingSeasonalityAdjustmentsResult extends \Google\Protobuf\Internal\Message
{
    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     */
    protected $resource_name = '';
    /**
     * The mutated bidding seasonality adjustment with only mutable fields after
     * mutate. The field will only be returned when response_content_type is set
     * to "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.resources.BiddingSeasonalityAdjustment bidding_seasonality_adjustment = 2;</code>
     */
    protected $bidding_seasonality_adjustment = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $resource_name
     *           Returned for successful operations.
     *     @type \Google\Ads\GoogleAds\V11\Resources\BiddingSeasonalityAdjustment $bidding_seasonality_adjustment
     *           The mutated bidding seasonality adjustment with only mutable fields after
     *           mutate. The field will only be returned when response_content_type is set
     *           to "MUTABLE_RESOURCE".
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V11\Services\BiddingSeasonalityAdjustmentService::initOnce();
        parent::__construct($data);
    }

    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getResourceName()
    {
        return $this->resource_name;
    }

    /**
     * Returned for successful operations.
     *
     * Generated from protobuf field <code>string resource_name = 1 [(.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setResourceName($var)
    {
        GPBUtil::checkString($var, True);
        $this->resource_name = $var;

        return $this;
    }

    /**
     * The mutated bidding seasonality adjustment with only mutable fields after
     * mutate. The field will only be returned when response_content_type is set
     * to "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.resources.BiddingSeasonalityAdjustment bidding_seasonality_adjustment = 2;</code>
     * @return \Google\Ads\GoogleAds\V11\Resources\BiddingSeasonalityAdjustment|null
     */
    public function getBiddingSeasonalityAdjustment()
    {
        return $this->bidding_seasonality_adjustment;
    }

    public function hasBiddingSeasonalityAdjustment()
    {
        return isset($this->bidding_seasonality_adjustment);
    }

    public function clearBiddingSeasonalityAdjustment()
    {
        unset($this->bidding_seasonality_adjustment);
    }

    /**
     * The mutated bidding seasonality adjustment with only mutable fields after
     * mutate. The field will only be returned when response_content_type is set
     * to "MUTABLE_RESOURCE".
     *
     * Generated from protobuf field <code>.google.ads.googleads.v11.resources.BiddingSeasonalityAdjustment bidding_seasonality_adjustment = 2;</code>
     * @param \Google\Ads\GoogleAds\V11\Resources\BiddingSeasonalityAdjustment $var
     * @return $this
     */
    public function setBiddingSeasonalityAdjustment($var)
    {
        GPBUtil::checkMessage($var, \Google\Ads\GoogleAds\V11\Resources\BiddingSeasonalityAdjustment::class);
        $this->bidding_seasonality_adjustment = $var;

        return $this;
    }

}

