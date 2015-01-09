<?php
/**
 * @copyright Copyright (c) 2014 X.commerce, Inc. (http://www.magentocommerce.com)
 */
namespace Magento\Framework\View\Asset;

class PropertyGroupTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Magento\Framework\View\Asset\PropertyGroup
     */
    protected $_object;

    protected function setUp()
    {
        $this->_object = new \Magento\Framework\View\Asset\PropertyGroup(['test_property' => 'test_value']);
    }

    public function testGetProperties()
    {
        $this->assertEquals(['test_property' => 'test_value'], $this->_object->getProperties());
    }

    public function testGetProperty()
    {
        $this->assertEquals('test_value', $this->_object->getProperty('test_property'));
        $this->assertNull($this->_object->getProperty('non_existing_property'));
    }
}