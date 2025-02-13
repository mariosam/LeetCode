<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MinimumOperationsToExceedThresholdValueIITest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MinimumOperationsToExceedThresholdValueII.php");

class MinimumOperationsToExceedThresholdValueIITest extends TestCase {

    public function testMinimumOperationsToExceedThresholdValueII() {
        $obj = new MinimumOperationsToExceedThresholdValueII();
        //Test 1
        $want = 2;
        $got = $obj->minOperations( [2,11,10,1,3], 10 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 4;
        $got = $obj->minOperations( [1,1,2,4,9], 20 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
