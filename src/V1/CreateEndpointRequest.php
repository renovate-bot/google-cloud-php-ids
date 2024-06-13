<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/cloud/ids/v1/ids.proto

namespace Google\Cloud\Ids\V1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>google.cloud.ids.v1.CreateEndpointRequest</code>
 */
class CreateEndpointRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The endpoint's parent.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The endpoint identifier. This will be part of the endpoint's
     * resource name.
     * This value must start with a lowercase letter followed by up to 62
     * lowercase letters, numbers, or hyphens, and cannot end with a hyphen.
     * Values that do not match this pattern will trigger an INVALID_ARGUMENT
     * error.
     *
     * Generated from protobuf field <code>string endpoint_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $endpoint_id = '';
    /**
     * Required. The endpoint to create.
     *
     * Generated from protobuf field <code>.google.cloud.ids.v1.Endpoint endpoint = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $endpoint = null;
    /**
     * An optional request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server will guarantee
     * that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and t
     * he request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4;</code>
     */
    protected $request_id = '';

    /**
     * @param string                        $parent     Required. The endpoint's parent. Please see
     *                                                  {@see IDSClient::locationName()} for help formatting this field.
     * @param \Google\Cloud\Ids\V1\Endpoint $endpoint   Required. The endpoint to create.
     * @param string                        $endpointId Required. The endpoint identifier. This will be part of the endpoint's
     *                                                  resource name.
     *                                                  This value must start with a lowercase letter followed by up to 62
     *                                                  lowercase letters, numbers, or hyphens, and cannot end with a hyphen.
     *                                                  Values that do not match this pattern will trigger an INVALID_ARGUMENT
     *                                                  error.
     *
     * @return \Google\Cloud\Ids\V1\CreateEndpointRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Cloud\Ids\V1\Endpoint $endpoint, string $endpointId): self
    {
        return (new self())
            ->setParent($parent)
            ->setEndpoint($endpoint)
            ->setEndpointId($endpointId);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The endpoint's parent.
     *     @type string $endpoint_id
     *           Required. The endpoint identifier. This will be part of the endpoint's
     *           resource name.
     *           This value must start with a lowercase letter followed by up to 62
     *           lowercase letters, numbers, or hyphens, and cannot end with a hyphen.
     *           Values that do not match this pattern will trigger an INVALID_ARGUMENT
     *           error.
     *     @type \Google\Cloud\Ids\V1\Endpoint $endpoint
     *           Required. The endpoint to create.
     *     @type string $request_id
     *           An optional request ID to identify requests. Specify a unique request ID
     *           so that if you must retry your request, the server will know to ignore
     *           the request if it has already been completed. The server will guarantee
     *           that for at least 60 minutes since the first request.
     *           For example, consider a situation where you make an initial request and t
     *           he request times out. If you make the request again with the same request
     *           ID, the server can check if original operation with the same request ID
     *           was received, and if so, will ignore the second request. This prevents
     *           clients from accidentally creating duplicate commitments.
     *           The request ID must be a valid UUID with the exception that zero UUID is
     *           not supported (00000000-0000-0000-0000-000000000000).
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Cloud\Ids\V1\Ids::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The endpoint's parent.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The endpoint's parent.
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. The endpoint identifier. This will be part of the endpoint's
     * resource name.
     * This value must start with a lowercase letter followed by up to 62
     * lowercase letters, numbers, or hyphens, and cannot end with a hyphen.
     * Values that do not match this pattern will trigger an INVALID_ARGUMENT
     * error.
     *
     * Generated from protobuf field <code>string endpoint_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getEndpointId()
    {
        return $this->endpoint_id;
    }

    /**
     * Required. The endpoint identifier. This will be part of the endpoint's
     * resource name.
     * This value must start with a lowercase letter followed by up to 62
     * lowercase letters, numbers, or hyphens, and cannot end with a hyphen.
     * Values that do not match this pattern will trigger an INVALID_ARGUMENT
     * error.
     *
     * Generated from protobuf field <code>string endpoint_id = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setEndpointId($var)
    {
        GPBUtil::checkString($var, True);
        $this->endpoint_id = $var;

        return $this;
    }

    /**
     * Required. The endpoint to create.
     *
     * Generated from protobuf field <code>.google.cloud.ids.v1.Endpoint endpoint = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Cloud\Ids\V1\Endpoint|null
     */
    public function getEndpoint()
    {
        return $this->endpoint;
    }

    public function hasEndpoint()
    {
        return isset($this->endpoint);
    }

    public function clearEndpoint()
    {
        unset($this->endpoint);
    }

    /**
     * Required. The endpoint to create.
     *
     * Generated from protobuf field <code>.google.cloud.ids.v1.Endpoint endpoint = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Cloud\Ids\V1\Endpoint $var
     * @return $this
     */
    public function setEndpoint($var)
    {
        GPBUtil::checkMessage($var, \Google\Cloud\Ids\V1\Endpoint::class);
        $this->endpoint = $var;

        return $this;
    }

    /**
     * An optional request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server will guarantee
     * that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and t
     * he request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4;</code>
     * @return string
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * An optional request ID to identify requests. Specify a unique request ID
     * so that if you must retry your request, the server will know to ignore
     * the request if it has already been completed. The server will guarantee
     * that for at least 60 minutes since the first request.
     * For example, consider a situation where you make an initial request and t
     * he request times out. If you make the request again with the same request
     * ID, the server can check if original operation with the same request ID
     * was received, and if so, will ignore the second request. This prevents
     * clients from accidentally creating duplicate commitments.
     * The request ID must be a valid UUID with the exception that zero UUID is
     * not supported (00000000-0000-0000-0000-000000000000).
     *
     * Generated from protobuf field <code>string request_id = 4;</code>
     * @param string $var
     * @return $this
     */
    public function setRequestId($var)
    {
        GPBUtil::checkString($var, True);
        $this->request_id = $var;

        return $this;
    }

}

