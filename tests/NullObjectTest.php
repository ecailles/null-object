<?php
/**
 * NullObject Test
 *
 * @author Whizark <contact@whizark.com>
 * @see http://whizark.com
 * @copyright Copyright (C) 2015 Whizark.
 * @license MIT
 */

namespace Tests\Ecailles\NullObject;

use Ecailles\NullObject\NullObject;
use PHPUnit_Framework_TestCase;

/**
 * Class NullObjectTest
 *
 * @package Tests\Ecailles\NullObject
 */
class NullObjectTest extends PHPUnit_Framework_TestCase
{
    public function testStaticCallShouldReturnNullObject()
    {
        $this->assertInstanceOf('Ecailles\NullObject\NullObject', NullObject::staticMethod());
    }

    public function testFunctionCallShouldReturnNullOjbect()
    {
        $null = new NullObject();

        $this->assertInstanceOf('Ecailles\NullObject\NullObject', $null());
    }

    public function testMethodCallShouldReturnNullOjbect()
    {
        $null = new NullObject();

        $this->assertInstanceOf('Ecailles\NullObject\NullObject', $null->method());
    }

    public function testPropertyAccessShouldReturnNullObject()
    {
        $null = new NullObject();

        $this->assertInstanceOf('Ecailles\NullObject\NullObject', $null->property);
    }

    public function testPropertyMutationShouldDoNothing()
    {
        $null = new NullObject();

        $null->property = 'test';
        $null['key']    = 'test';

        $this->assertInstanceOf('Ecailles\NullObject\NullObject', $null->property);
        $this->assertInstanceOf('Ecailles\NullObject\NullObject', $null['key']);
    }

    public function testNullObjectShouldBeCastedToNullString()
    {
        $null = new NullObject();

        $this->assertSame((string) null, (string) $null);
    }

    public function testCloneShouldReturnNullObject()
    {
        $null = new NullObject();

        $this->assertInstanceOf('Ecailles\NullObject\NullObject', clone $null);
    }

    public function testNullObjectShouldBeSerializedAsAnEmptyObject()
    {
        $null = new NullObject();

        $this->assertSame('O:30:"Ecailles\NullObject\NullObject":0:{}', serialize($null));
    }

    public function testSerializedNullObjectShouldBeUnserializedAsANullObject()
    {
        $null = new NullObject();

        $this->assertInstanceOf('Ecailles\NullObject\NullObject', unserialize(serialize($null)));
    }

    public function testNullObjectShouldBeSerializedAsAnEmptyJsonObject()
    {
        $null = new NullObject();

        $this->assertSame('{}', json_encode($null));
    }

    public function testCurrentShouldReturnNullObject()
    {
        $null = new NullObject();

        $this->assertInstanceOf('Ecailles\NullObject\NullObject', $null->current());
    }

    public function testKeyShouldReturnNullObject()
    {
        $null = new NullObject();

        $this->assertInstanceOf('Ecailles\NullObject\NullObject', $null->key());
    }

    public function testValidShouldReturnFalse()
    {
        $null = new NullObject();

        $this->assertFalse($null->valid());
    }

    public function testNullObjectShouldNotBeIteratedOver()
    {
        $counter = 0;

        foreach (new NullObject() as $key => $value) {
            $counter ++;
        }

        $this->assertSame(0, $counter);
    }

    public function testAnyOffsetShouldNotExist()
    {
        $null = new NullObject();

        $this->assertFalse(isset($null['key']));
    }

    public function testArrayAccessShouldReturnNullObject()
    {
        $null = new NullObject();

        $this->assertInstanceOf('Ecailles\NullObject\NullObject', $null['key']);
    }

    public function testNullObjectCountShouldBeZero()
    {
        $null = new NullObject();

        $this->assertSame(0, count($null));
    }
}
