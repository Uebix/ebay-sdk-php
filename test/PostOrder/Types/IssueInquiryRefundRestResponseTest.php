<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Test\PostOrder\Types;

use DTS\eBaySDK\PostOrder\Types\IssueInquiryRefundRestResponse;

class IssueInquiryRefundRestResponseTest extends \PHPUnit_Framework_TestCase
{
    private $obj;

    protected function setUp()
    {
        $this->obj = new IssueInquiryRefundRestResponse();
    }

    public function testCanBeCreated()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\IssueInquiryRefundRestResponse', $this->obj);
    }

    public function testExtendsVoluntaryRefundResponse()
    {
        $this->assertInstanceOf('\DTS\eBaySDK\PostOrder\Types\VoluntaryRefundResponse', $this->obj);
    }
}