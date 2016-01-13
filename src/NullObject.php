<?php
/**
 * Null Object
 *
 * @author Whizark <contact@whizark.com>
 * @see http://whizark.com
 * @copyright Copyright (C) 2015 Whizark.
 * @license MIT
 */

namespace Ecailles\NullObject;

/**
 * Class NullObject
 *
 * @package Ecailles\NullObject
 */
class NullObject implements \ArrayAccess, \Countable, \Iterator, \JsonSerializable
{
    public function __construct()
    {
        // do nothing.
    }

    public static function __callStatic($name, $arguments)
    {
        return new static();
    }

    public function __invoke()
    {
        return $this;
    }

    public function __call($name, $arguments)
    {
        return $this;
    }

    public function __get($name)
    {
        return $this;
    }

    public function __set($name, $value)
    {
        // do nothing.
    }

    public function __toString()
    {
        return (string) null;
    }

    public function __clone()
    {
        // do nothing.
    }

    public function __sleep()
    {
        return [];
    }

    public function __wakeup()
    {
        return $this;
    }

    public function jsonSerialize()
    {
        return new \stdClass();
    }

    public function current()
    {
        return $this;
    }

    public function next()
    {
        // do nothing.
    }

    public function key()
    {
        return $this;
    }

    public function valid()
    {
        return false;
    }

    public function rewind()
    {
        // do nothing.
    }

    public function offsetExists($offset)
    {
        return false;
    }

    public function offsetGet($offset)
    {
        return $this;
    }

    public function offsetSet($offset, $value)
    {
        // do nothing.
    }

    public function offsetUnset($offset)
    {
        // do nothing.
    }

    public function count()
    {
        return 0;
    }
}
