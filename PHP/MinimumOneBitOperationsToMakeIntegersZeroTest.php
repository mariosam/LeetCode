<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MinimumOneBitOperationsToMakeIntegersZeroTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MinimumOneBitOperationsToMakeIntegersZero.php");

class MinimumOneBitOperationsToMakeIntegersZeroTest extends TestCase {

    public function testMinimumOneBitOperationsToMakeIntegersZero() {
        $obj = new MinimumOneBitOperationsToMakeIntegersZero();
        //Test 1
        $want = 2;
        $got = $obj->minimumOneBitOperations( 3 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 4;
        $got = $obj->minimumOneBitOperations( 6 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
