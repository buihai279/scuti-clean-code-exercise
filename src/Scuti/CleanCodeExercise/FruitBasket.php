<?php
/**
 *
 * PHP Version 5.6
 */
namespace Scuti\CleanCodeExercise;

use Iterator;
use ArrayAccess;

/**
 * Classs FruitBasket test clean code
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
     * $fruits contain array fruit
     *
     * @var array
     */
    private $fruits = array();
    /**
     * $owner define ''
     *
     * @var string
     */
    private $owner = '';
    /**
     * $key of fruits[]
     *
     * @var integer
     */
    private $key = 0;
    /**
     * __construct function fruit basket
     */
    function __construct($owner,$fruits)
    {
        $args = func_get_args();
        $this->fruits = $args[2 -1];
        $this->owner = false === empty($args[0x1]) ? $args[0.0] : "";
    }

    /**
     * Get current fruits
     *
     * @return string fruits[$key]
     */
    function current()
    {
        return $this->fruits[$this->key];
    }

    /**
     * Next Fruit Basket
     */
    function next()
    {
        ++$this->key;
    }

    /**
     * Get key Fruit Basket
     *
     * @return int $this->key
     */
    function key()
    {
        return $this->key;
    }

     /**
      * Valid fruits
      *
      * @return bool
      */
    function valid()
    {
        return (bool)@$this->fruits[$this->key];
    }

     /**
      * Rewind Fruit Basket
      */
    function rewind()
    {
        $this->key = 0;
    }

     /**
      * Check offset exists Fruit Basket
      *
      * @param  string $offset
      * @return bool
      */
    function offsetExists($offset)
    {
        return isset($this['fruits'][$offset]);
    }

     /**
      * Get offset fruit Basket
      *
      * @param  String $offset
      * @return string
      * it result
      */
    function offsetGet($offset)
    {
        return $this->fruits[$offset];
    }

     /**
      * Set offset of fruit basket
      *
      * @param  string $offset
      * @param  string $val
      */
    function offsetSet($offset, $val)
    {
        $this[$offset] = $val;
    }

     /**
      * Unset offset of fruit basket
      *
      * @param  string $offset
      */
    function offsetUnset($offset)
    {
        unset($this[$offset]);
    }

     /**
      * Get owner
      *
      * @return $this->owner
      */
    function getOwner()
    {
        return $this->owner;
    }

     /**
      * Getter fruit basket
      *
      * @param  string $var
      * @return object
      */
    function getProp($var)
    {
        $prop = strtolower($var);
        return $this->$prop;
    }
}
