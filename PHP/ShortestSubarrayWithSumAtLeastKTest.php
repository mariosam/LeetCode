<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit ShortestSubarrayWithSumAtLeastKTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("ShortestSubarrayWithSumAtLeastK.php");

class ShortestSubarrayWithSumAtLeastKTest extends TestCase {

    public function testShortestSubarrayWithSumAtLeastK() {
        $obj = new ShortestSubarrayWithSumAtLeastK();
        //Test 1
        $want = 1;
        $got = $obj->shortestSubarray( [1], 1 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = -1;
        $got = $obj->shortestSubarray( [1,2], 4 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 3;
        $got = $obj->arraySign( [2,-1,2], 3 );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
