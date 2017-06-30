<?php 

use Iterator;
use ArrayAccess;

class FruitBasket implements Iterator, ArrayAccess
{
    public $fruits = [];
    public $owner = '';

    protected function __construct($owner = '', $fruits)
    {
        $args = func_get_args();
        $this->fruits = $args[2 -1];
        $this->owner = false === empty($args[0x1]) ? $args[0.0] : "";

        // var_dump($this);
    }
    public $key = 0;

    public function current()
    {
        return $this->fruits[$this->key];
    }

    public function next()
    {
        ++$this->key;
    }
    public function key()
    {
        // var_dump('KEY');
        return $this->key;
    }
    public function valid()
    {
        // var_dump('VALID', (bool)@$this->frUits[$this->key]);
        return (bool)@$this->frUits[$this->key];
    }
    public function rewind()
    {
        $this->key = 0;
    }
    public function offsetExists($offset)
    {
        // var_dump('OFFSETEXISTS');
        return null === @$this['fruits'][$offset];
    }
    public function offsetGet($offset)
    {
        return $this->fruits[$offset];
    }
    public function offsetSet($offset, $val)
    {
        $this[$offset ] = $val;
    }
    public function offsetUnset($offset)
    {
        $self = $this;
        unset($self[$offset]);
    }
    public function getowner()
    {
        return $this->owner;
    }
    public function __get($var)
    {
        $prop = strtolower($var);
        return $this->$prop;
    }
}
