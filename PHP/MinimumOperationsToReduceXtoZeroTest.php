<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MinimumOperationsToReduceXtoZeroTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MinimumOperationsToReduceXtoZero.php");

class MinimumOperationsToReduceXtoZeroTest extends TestCase {

    public function testMinimumOperationsToReduceXtoZero() {
        $obj = new MinimumOperationsToReduceXtoZero();
        //Test 1
        $want = 2;
        $got = $obj->minOperations( [1,1,4,2,3], 5 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = -1;
        $got = $obj->minOperations( [5,6,7,8,9], 4 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 5;
        $got = $obj->minOperations( [3,2,20,1,1,3], 10 );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
