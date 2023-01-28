<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MaximumIceCreamBarsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MaximumIceCreamBars.php");

class MaximumIceCreamBarsTest extends TestCase {

    public function testMaximumIceCreamBars() {
        $obj = new MaximumIceCreamBars();
        //Test 1
        $want = 4;
        $got = $obj->maxIceCream( [1,6,3,1,2,5], 7 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 0;
        $got = $obj->maxIceCream( [10,6,8,7,7,8], 5 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 6;
        $got = $obj->maxIceCream( [1,6,3,1,2,5], 20 );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 4
        $want = 9;
        $got = $obj->maxIceCream( [7,3,3,6,6,6,10,5,9,2], 56 );
        echo "\nTest 4: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
