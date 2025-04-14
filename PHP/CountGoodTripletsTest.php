<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit CountGoodTripletsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("CountGoodTriplets.php");

class CountGoodTripletsTest extends TestCase {

    public function testCountGoodTriplets() {
        $obj = new CountGoodTriplets();
        //Test 1
        $want = 4;
        $got = $obj->countGoodTriplets( [3,0,1,1,9,7], 7, 2, 3 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 0;
        $got = $obj->countGoodTriplets( [1,1,2,2,3], 0, 0, 1 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
