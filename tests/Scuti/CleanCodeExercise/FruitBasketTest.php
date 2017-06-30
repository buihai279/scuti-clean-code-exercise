<?php
namespace Scuti\CleanCodeExercise;

// use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
require_once(__DIR__ . '/../../../src/Scuti/CleanCodeExercise/FruitBasket.php');
use PHPUnit\Framework\TestCase;
use Scuti\CleanCodeExercise\FruitBasket;

class FruitBasketTest extends TestCase
{
    const FRUITS = ['apple', 'banana', 'orange', 'durian'];

    public function testCanInstantiate()
    {
        $fruitBasket = new FruitBasket('me', self::FRUITS);
        $this->assertInstanceOf(FruitBasket::class, $fruitBasket);

        return $fruitBasket;
    }

    /**
     * @depends testCanInstantiate
     */
    public function testIsIterable(FruitBasket $fruitBasket)
    {
        $key = 0;
        foreach ($fruitBasket as $fruit) {
            $this->assertSame(self::FRUITS[$key], $fruit);
            $key++;
        }
    }

    /**
     * @depends testCanInstantiate
     */
    public function testIsArrayAccessable(FruitBasket $fruitBasket)
    {
        for ($key = 0; $key < count(self::FRUITS); $key++) {
            $this->assertSame(self::FRUITS[$key], $fruitBasket[$key]);
        }
    }
}
