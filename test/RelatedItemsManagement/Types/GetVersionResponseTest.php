<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Test\RelatedItemsManagement\Types;

use DTS\eBaySDK\RelatedItemsManagement\Types\GetVersionResponse;

class GetVersionResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new GetVersionResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\RelatedItemsManagement\Types\GetVersionResponse', $this->obj);
    }

    public function testExtendsBaseResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\RelatedItemsManagement\Types\BaseResponse', $this->obj);
    }
}