<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\PostOrder\Types;

/**
 *
 * @property \DTS\eBaySDK\PostOrder\Types\AvailableOptionType[] $buyerAvailableOptions
 * @property string $buyerLoginName
 * @property \DTS\eBaySDK\PostOrder\Types\ReturnResponseDueType $buyerResponseDue
 * @property \DTS\eBaySDK\PostOrder\Types\TotalRefundAmountType $buyerTotalRefund
 * @property \DTS\eBaySDK\PostOrder\Types\ReturnCreationInfoType $creationInfo
 * @property \DTS\eBaySDK\PostOrder\Enums\ReturnTypeEnum $currentType
 * @property \DTS\eBaySDK\PostOrder\Enums\DispositionRuleTemplateTypeEnum[] $dispositionRuleTriggered
 * @property \DTS\eBaySDK\PostOrder\Types\EscalationInfoType $escalationInfo
 * @property string $returnId
 * @property \DTS\eBaySDK\PostOrder\Types\ReturnPolicyType $returnPolicy
 * @property \DTS\eBaySDK\PostOrder\Types\AvailableOptionType[] $sellerAvailableOptions
 * @property string $sellerLoginName
 * @property \DTS\eBaySDK\PostOrder\Types\ReturnResponseDueType $sellerResponseDue
 * @property \DTS\eBaySDK\PostOrder\Types\TotalRefundAmountType $sellerTotalRefund
 * @property string $state
 * @property string $status
 */
class ReturnSummaryType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'buyerAvailableOptions' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\AvailableOptionType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'buyerAvailableOptions'
        ],
        'buyerLoginName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerLoginName'
        ],
        'buyerResponseDue' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\ReturnResponseDueType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerResponseDue'
        ],
        'buyerTotalRefund' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\TotalRefundAmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'buyerTotalRefund'
        ],
        'creationInfo' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\ReturnCreationInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'creationInfo'
        ],
        'currentType' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'currentType'
        ],
        'dispositionRuleTriggered' => [
            'type' => 'string',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'dispositionRuleTriggered'
        ],
        'escalationInfo' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\EscalationInfoType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'escalationInfo'
        ],
        'returnId' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnId'
        ],
        'returnPolicy' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\ReturnPolicyType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'returnPolicy'
        ],
        'sellerAvailableOptions' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\AvailableOptionType',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'sellerAvailableOptions'
        ],
        'sellerLoginName' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sellerLoginName'
        ],
        'sellerResponseDue' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\ReturnResponseDueType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sellerResponseDue'
        ],
        'sellerTotalRefund' => [
            'type' => 'DTS\eBaySDK\PostOrder\Types\TotalRefundAmountType',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'sellerTotalRefund'
        ],
        'state' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'state'
        ],
        'status' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'status'
        ]
    ];

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = [])
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        $this->setValues(__CLASS__, $childValues);
    }
}