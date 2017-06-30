<?php
/**
 * MyClass Class Doc Comment
 *
 * @category Class
 * @package  Cleancode
 * @author   Bui Van Hai <buihai2603@gmail.com>
 * @license  Ex. GNU General Public License
 * @link     http://www.hashbangcode.com/
 *
 *
 * PHP Version 5.6
 */
namespace Scuti\CleanCodeExercise;

use Iterator;
use ArrayAccess;

/**
 * MyClass Class Doc Comment
 *
 * @category Class
 * @package  Cleancode
 * @author   Bui Van Hai <buihai2603@gmail.com>
 * @license  Ex. GNU General Public License
 * @link     http://www.hashbangcode.com/
 */
class FruitBasket implements Iterator, ArrayAccess
{
    /**
     * Indicates if the user should be "remembered".
     *
     * @var array
     */
    public $fruits = array();
    /**
     * Indicates if the user should be "remembered".
     *
     * @var string
     */
    public $owner = '';
    /**
     * Indicates if the user should be "remembered".
     *
     * @var integer
     */
    public $key = 0;
    /**
     * __construct function
     */
    public function __construct()
    {
        $args = func_get_args();
        $this->fruits = $args[2 -1];
        $this->owner = false === empty($args[0x1]) ? $args[0.0] : "";

        // var_dump($this);
    }

    /**
     * Get current fruits
     *
     * @return fruits[$key]
     */
    public function current()
    {
        return $this->fruits[$this->key];
    }

    /**
     * Test
     *
     * @return no
     */
    public function next()
    {
        ++$this->key;
        return;
    }

    /**
     * Test
     *
     * @return $this->key
     */
    public function key()
    {
        // var_dump('KEY');
        return $this->key;
    }

     /**
      * Test
      *
      * @return bool
      */
    public function valid()
    {
        // var_dump('VALID', (bool)@$this->fruits[$this->key]);
        return (bool)@$this->fruits[$this->key];
    }

     /**
      * Test
      *
      * @return void
      */
    public function rewind()
    {
        $this->key = 0;
        return;
    }

     /**
      * Test
      *
      * @param  string $offset
      * @return bool
      */
    public function offsetExists($offset)
    {
        // var_dump('OFFSETEXISTS');
        return null === @$this['fruits'][$offset];
    }

     /**
      * Test
      *
      * @param  String $offset
      * @return string
      * it result
      */
    public function offsetGet($offset)
    {
        return $this->fruits[$offset];
    }

     /**
      * Test
      *
      * @param  string $offset
      * @param  string $val
      * @return string
      */
    public function offsetSet($offset, $val)
    {
        $this[$offset] = $val;
        return;
    }

     /**
      * Test
      *
      * @param  string $offset
      * @return void
      */
    public function offsetUnset($offset)
    {
        $self = $this;
        unset($self[$offset]);
        return;
    }

     /**
      * Test
      *
      * @return $this->owner
      */
    public function getowner()
    {
        return $this->owner;
    }

     /**
      * Test
      *
      * @param  string $var
      * @return object
      */
    public function __get($var)
    {
        $prop = strtolower($var);
        return $this->$prop;
    }
}
