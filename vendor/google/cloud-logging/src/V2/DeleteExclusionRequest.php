<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging_config.proto

namespace Google\Cloud\Logging\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The parameters to `DeleteExclusion`.
 *
 * Generated from protobuf message <code>google.logging.v2.DeleteExclusionRequest</code>
 */
class DeleteExclusionRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The resource name of an existing exclusion to delete:
     *     "projects/[PROJECT_ID]/exclusions/[EXCLUSION_ID]"
     *     "organizations/[ORGANIZATION_ID]/exclusions/[EXCLUSION_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]/exclusions/[EXCLUSION_ID]"
     *     "folders/[FOLDER_ID]/exclusions/[EXCLUSION_ID]"
     * Example: `"projects/my-project-id/exclusions/my-exclusion-id"`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED,
     * (.google.api.resource_reference) = {</code>
     */
    private $name = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type string $name
     *           Required. The resource name of an existing exclusion to delete:
     *               "projects/[PROJECT_ID]/exclusions/[EXCLUSION_ID]"
     *               "organizations/[ORGANIZATION_ID]/exclusions/[EXCLUSION_ID]"
     *               "billingAccounts/[BILLING_ACCOUNT_ID]/exclusions/[EXCLUSION_ID]"
     *               "folders/[FOLDER_ID]/exclusions/[EXCLUSION_ID]"
     *           Example: `"projects/my-project-id/exclusions/my-exclusion-id"`.
     * }
     */
    public function __construct($data = NULL)
    {
        \GPBMetadata\Google\Logging\V2\LoggingConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The resource name of an existing exclusion to delete:
     *     "projects/[PROJECT_ID]/exclusions/[EXCLUSION_ID]"
     *     "organizations/[ORGANIZATION_ID]/exclusions/[EXCLUSION_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]/exclusions/[EXCLUSION_ID]"
     *     "folders/[FOLDER_ID]/exclusions/[EXCLUSION_ID]"
     * Example: `"projects/my-project-id/exclusions/my-exclusion-id"`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED,
     * (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The resource name of an existing exclusion to delete:
     *     "projects/[PROJECT_ID]/exclusions/[EXCLUSION_ID]"
     *     "organizations/[ORGANIZATION_ID]/exclusions/[EXCLUSION_ID]"
     *     "billingAccounts/[BILLING_ACCOUNT_ID]/exclusions/[EXCLUSION_ID]"
     *     "folders/[FOLDER_ID]/exclusions/[EXCLUSION_ID]"
     * Example: `"projects/my-project-id/exclusions/my-exclusion-id"`.
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED,
     * (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}

