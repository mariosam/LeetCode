<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit BitwiseXORofAllPairingsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("BitwiseXORofAllPairings.php");

class BitwiseXORofAllPairingsTest extends TestCase {

    public function testBitwiseXORofAllPairings() {
        $obj = new BitwiseXORofAllPairings();
        //Test 1
        $want = 13;
        $got = $obj->xorAllNums( [2,1,3], [10,2,5,0] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 0;
        $got = $obj->xorAllNums( [1,2], [3,4] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
