<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Product\Types;

/**
 *
 * @property \DTS\eBaySDK\Product\Types\ProductSubmissionFilter[] $productSubmissionFilter
 * @property \DTS\eBaySDK\Product\Enums\OutputSelector $outputSelector
 * @property \DTS\eBaySDK\Product\Types\PaginationInput $paginationInput
 * @property \DTS\eBaySDK\Product\Types\SortOption[] $sortOption
 */
class GetProductSubmissionsRequest extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = [
        'productSubmissionFilter' => [
            'type' => 'DTS\eBaySDK\Product\Types\ProductSubmissionFilter',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'productSubmissionFilter'
        ],
        'outputSelector' => [
            'type' => 'string',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'outputSelector'
        ],
        'paginationInput' => [
            'type' => 'DTS\eBaySDK\Product\Types\PaginationInput',
            'repeatable' => false,
            'attribute' => false,
            'elementName' => 'paginationInput'
        ],
        'sortOption' => [
            'type' => 'DTS\eBaySDK\Product\Types\SortOption',
            'repeatable' => true,
            'attribute' => false,
            'elementName' => 'sortOption'
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

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/marketplacecatalog/v1/services"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'getProductSubmissionsRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}