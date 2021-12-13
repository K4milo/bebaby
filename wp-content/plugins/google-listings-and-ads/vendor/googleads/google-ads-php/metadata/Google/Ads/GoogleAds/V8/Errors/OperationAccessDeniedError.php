<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v8/errors/operation_access_denied_error.proto

namespace GPBMetadata\Google\Ads\GoogleAds\V8\Errors;

class OperationAccessDeniedError
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();
        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\Http::initOnce();
        \GPBMetadata\Google\Api\Annotations::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
Bgoogle/ads/googleads/v8/errors/operation_access_denied_error.protogoogle.ads.googleads.v8.errors"�
OperationAccessDeniedErrorEnum"�
OperationAccessDeniedError
UNSPECIFIED 
UNKNOWN
ACTION_NOT_PERMITTED"
CREATE_OPERATION_NOT_PERMITTED"
REMOVE_OPERATION_NOT_PERMITTED"
UPDATE_OPERATION_NOT_PERMITTED*
&MUTATE_ACTION_NOT_PERMITTED_FOR_CLIENT-
)OPERATION_NOT_PERMITTED_FOR_CAMPAIGN_TYPE#
CREATE_AS_REMOVED_NOT_PERMITTED0
,OPERATION_NOT_PERMITTED_FOR_REMOVED_RESOURCE	-
)OPERATION_NOT_PERMITTED_FOR_AD_GROUP_TYPE
%
!MUTATE_NOT_PERMITTED_FOR_CUSTOMERB�
"com.google.ads.googleads.v8.errorsBOperationAccessDeniedErrorProtoPZDgoogle.golang.org/genproto/googleapis/ads/googleads/v8/errors;errors�GAA�Google.Ads.GoogleAds.V8.Errors�Google\\Ads\\GoogleAds\\V8\\Errors�"Google::Ads::GoogleAds::V8::Errorsbproto3'
        , true);
        static::$is_initialized = true;
    }
}

