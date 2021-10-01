<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/logging/v2/logging_config.proto

namespace Google\Cloud\Logging\V2;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Describes the customer-managed encryption key (CMEK) settings associated with
 * a project, folder, organization, billing account, or flexible resource.
 * Note: CMEK for the Logs Router can currently only be configured for GCP
 * organizations. Once configured, it applies to all projects and folders in the
 * GCP organization.
 * See [Enabling CMEK for Logs Router](/logging/docs/routing/managed-encryption)
 * for more information.
 *
 * Generated from protobuf message <code>google.logging.v2.CmekSettings</code>
 */
class CmekSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Output Only. The resource name of the CMEK settings.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     */
    private $name = '';
    /**
     * The resource name for the configured Cloud KMS key.
     * KMS key name format:
     *     "projects/[PROJECT_ID]/locations/[LOCATION]/keyRings/[KEYRING]/cryptoKeys/[KEY]"
     * For example:
     *     `"projects/my-project-id/locations/my-region/keyRings/key-ring-name/cryptoKeys/key-name"`
     * To enable CMEK for the Logs Router, set this field to a valid
     * `kms_key_name` for which the associated service account has the required
     * `roles/cloudkms.cryptoKeyEncrypterDecrypter` role assigned for the key.
     * The Cloud KMS key used by the Log Router can be updated by changing the
     * `kms_key_name` to a new valid key name. Encryption operations that are in
     * progress will be completed with the key that was in use when they started.
     * Decryption operations will be completed using the key that was used at the
     * time of encryption unless access to that key has been revoked.
     * To disable CMEK for the Logs Router, set this field to an empty string.
     * See [Enabling CMEK for Logs
     * Router](/logging/docs/routing/managed-encryption) for more information.
     *
     * Generated from protobuf field <code>string kms_key_name = 2;</code>
     */
    private $kms_key_name = '';
    /**
     * Output Only. The service account that will be used by the Logs Router to
     * access your Cloud KMS key.
     * Before enabling CMEK for Logs Router, you must first assign the role
     * `roles/cloudkms.cryptoKeyEncrypterDecrypter` to the service account that
     * the Logs Router will use to access your Cloud KMS key. Use
     * [GetCmekSettings][google.logging.v2.ConfigServiceV2.GetCmekSettings] to
     * obtain the service account ID.
     * See [Enabling CMEK for Logs
     * Router](/logging/docs/routing/managed-encryption) for more information.
     *
     * Generated from protobuf field <code>string service_account_id = 3;</code>
     */
    private $service_account_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     * @type string $name
     *           Output Only. The resource name of the CMEK settings.
     * @type string $kms_key_name
     *           The resource name for the configured Cloud KMS key.
     *           KMS key name format:
     *               "projects/[PROJECT_ID]/locations/[LOCATION]/keyRings/[KEYRING]/cryptoKeys/[KEY]"
     *           For example:
     *               `"projects/my-project-id/locations/my-region/keyRings/key-ring-name/cryptoKeys/key-name"`
     *           To enable CMEK for the Logs Router, set this field to a valid
     *           `kms_key_name` for which the associated service account has the required
     *           `roles/cloudkms.cryptoKeyEncrypterDecrypter` role assigned for the key.
     *           The Cloud KMS key used by the Log Router can be updated by changing the
     *           `kms_key_name` to a new valid key name. Encryption operations that are in
     *           progress will be completed with the key that was in use when they started.
     *           Decryption operations will be completed using the key that was used at the
     *           time of encryption unless access to that key has been revoked.
     *           To disable CMEK for the Logs Router, set this field to an empty string.
     *           See [Enabling CMEK for Logs
     *           Router](/logging/docs/routing/managed-encryption) for more information.
     * @type string $service_account_id
     *           Output Only. The service account that will be used by the Logs Router to
     *           access your Cloud KMS key.
     *           Before enabling CMEK for Logs Router, you must first assign the role
     *           `roles/cloudkms.cryptoKeyEncrypterDecrypter` to the service account that
     *           the Logs Router will use to access your Cloud KMS key. Use
     *           [GetCmekSettings][google.logging.v2.ConfigServiceV2.GetCmekSettings] to
     *           obtain the service account ID.
     *           See [Enabling CMEK for Logs
     *           Router](/logging/docs/routing/managed-encryption) for more information.
     * }
     */
    public function __construct($data = NULL)
    {
        \GPBMetadata\Google\Logging\V2\LoggingConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Output Only. The resource name of the CMEK settings.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output Only. The resource name of the CMEK settings.
     *
     * Generated from protobuf field <code>string name = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * The resource name for the configured Cloud KMS key.
     * KMS key name format:
     *     "projects/[PROJECT_ID]/locations/[LOCATION]/keyRings/[KEYRING]/cryptoKeys/[KEY]"
     * For example:
     *     `"projects/my-project-id/locations/my-region/keyRings/key-ring-name/cryptoKeys/key-name"`
     * To enable CMEK for the Logs Router, set this field to a valid
     * `kms_key_name` for which the associated service account has the required
     * `roles/cloudkms.cryptoKeyEncrypterDecrypter` role assigned for the key.
     * The Cloud KMS key used by the Log Router can be updated by changing the
     * `kms_key_name` to a new valid key name. Encryption operations that are in
     * progress will be completed with the key that was in use when they started.
     * Decryption operations will be completed using the key that was used at the
     * time of encryption unless access to that key has been revoked.
     * To disable CMEK for the Logs Router, set this field to an empty string.
     * See [Enabling CMEK for Logs
     * Router](/logging/docs/routing/managed-encryption) for more information.
     *
     * Generated from protobuf field <code>string kms_key_name = 2;</code>
     * @return string
     */
    public function getKmsKeyName()
    {
        return $this->kms_key_name;
    }

    /**
     * The resource name for the configured Cloud KMS key.
     * KMS key name format:
     *     "projects/[PROJECT_ID]/locations/[LOCATION]/keyRings/[KEYRING]/cryptoKeys/[KEY]"
     * For example:
     *     `"projects/my-project-id/locations/my-region/keyRings/key-ring-name/cryptoKeys/key-name"`
     * To enable CMEK for the Logs Router, set this field to a valid
     * `kms_key_name` for which the associated service account has the required
     * `roles/cloudkms.cryptoKeyEncrypterDecrypter` role assigned for the key.
     * The Cloud KMS key used by the Log Router can be updated by changing the
     * `kms_key_name` to a new valid key name. Encryption operations that are in
     * progress will be completed with the key that was in use when they started.
     * Decryption operations will be completed using the key that was used at the
     * time of encryption unless access to that key has been revoked.
     * To disable CMEK for the Logs Router, set this field to an empty string.
     * See [Enabling CMEK for Logs
     * Router](/logging/docs/routing/managed-encryption) for more information.
     *
     * Generated from protobuf field <code>string kms_key_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setKmsKeyName($var)
    {
        GPBUtil::checkString($var, True);
        $this->kms_key_name = $var;

        return $this;
    }

    /**
     * Output Only. The service account that will be used by the Logs Router to
     * access your Cloud KMS key.
     * Before enabling CMEK for Logs Router, you must first assign the role
     * `roles/cloudkms.cryptoKeyEncrypterDecrypter` to the service account that
     * the Logs Router will use to access your Cloud KMS key. Use
     * [GetCmekSettings][google.logging.v2.ConfigServiceV2.GetCmekSettings] to
     * obtain the service account ID.
     * See [Enabling CMEK for Logs
     * Router](/logging/docs/routing/managed-encryption) for more information.
     *
     * Generated from protobuf field <code>string service_account_id = 3;</code>
     * @return string
     */
    public function getServiceAccountId()
    {
        return $this->service_account_id;
    }

    /**
     * Output Only. The service account that will be used by the Logs Router to
     * access your Cloud KMS key.
     * Before enabling CMEK for Logs Router, you must first assign the role
     * `roles/cloudkms.cryptoKeyEncrypterDecrypter` to the service account that
     * the Logs Router will use to access your Cloud KMS key. Use
     * [GetCmekSettings][google.logging.v2.ConfigServiceV2.GetCmekSettings] to
     * obtain the service account ID.
     * See [Enabling CMEK for Logs
     * Router](/logging/docs/routing/managed-encryption) for more information.
     *
     * Generated from protobuf field <code>string service_account_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setServiceAccountId($var)
    {
        GPBUtil::checkString($var, True);
        $this->service_account_id = $var;

        return $this;
    }

}

