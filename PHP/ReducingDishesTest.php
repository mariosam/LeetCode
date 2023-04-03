<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit ReducingDishesTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("ReducingDishes.php");

class ReducingDishesTest extends TestCase {

    public function testReducingDishes() {
        $obj = new ReducingDishes();
        //Test 1
        $want = 14;
        $got = $obj->maxSatisfaction( [-1,-8,0,5,-9] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 20;
        $got = $obj->maxSatisfaction( [4,3,2] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 0;
        $got = $obj->maxSatisfaction( [-1,-4,-5] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
