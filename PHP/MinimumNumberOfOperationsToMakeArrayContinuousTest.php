<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MinimumNumberOfOperationsToMakeArrayContinuousTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MinimumNumberOfOperationsToMakeArrayContinuous.php");

class MinimumNumberOfOperationsToMakeArrayContinuousTest extends TestCase {

    public function testMinimumNumberOfOperationsToMakeArrayContinuous() {
        $obj = new MinimumNumberOfOperationsToMakeArrayContinuous();
        //Test 1
        $want = 0;
        $got = $obj->minOperations( [4,2,5,3] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 1;
        $got = $obj->minOperations( [1,2,3,5,6] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 3;
        $got = $obj->minOperations( [1,10,100,1000] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
