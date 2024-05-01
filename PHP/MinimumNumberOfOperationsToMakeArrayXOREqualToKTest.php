<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MinimumNumberOfOperationsToMakeArrayXOREqualToKTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MinimumNumberOfOperationsToMakeArrayXOREqualToK.php");

class MinimumNumberOfOperationsToMakeArrayXOREqualToKTest extends TestCase {

    public function testMinimumNumberOfOperationsToMakeArrayXOREqualToK() {
        $obj = new MinimumNumberOfOperationsToMakeArrayXOREqualToK();
        //Test 1
        $want = 2;
        $got = $obj->minOperations( [2,1,3,4], 1 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 0;
        $got = $obj->minOperations( [2,0,2,0], 0 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
