<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit CountEqualAndDivisiblePairsInAnArrayTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("CountEqualAndDivisiblePairsInAnArray.php");

class CountEqualAndDivisiblePairsInAnArrayTest extends TestCase {

    public function testCountEqualAndDivisiblePairsInAnArray() {
        $obj = new CountEqualAndDivisiblePairsInAnArray();
        //Test 1
        $want = 4;
        $got = $obj->countPairs( [3,1,2,2,2,1,3], 2 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 0;
        $got = $obj->countPairs( [1,2,3,4], 1 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
