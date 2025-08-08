<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit FruitIntoBasketsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("FruitIntoBaskets.php");

class FruitIntoBasketsTest extends TestCase {

    public function testFruitIntoBaskets() {
        $obj = new FruitIntoBaskets();
        //Test 1
        $want = 3;
        $got = $obj->totalFruit( [1,2,1] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 3;
        $got = $obj->totalFruit( [0,1,2,2] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 4;
        $got = $obj->totalFruit( [1,2,3,2,2] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
