<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MinimumNumberOfIncrementsOnSubarraysToFormTargetArrayTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MinimumNumberOfIncrementsOnSubarraysToFormTargetArray.php");

class MinimumNumberOfIncrementsOnSubarraysToFormTargetArrayTest extends TestCase {

    public function testMinimumNumberOfIncrementsOnSubarraysToFormTargetArray() {
        $obj = new MinimumNumberOfIncrementsOnSubarraysToFormTargetArray();
        //Test 1
        $want = 3;
        $got = $obj->minNumberOperations( [1,2,3,2,1] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 4;
        $got = $obj->minNumberOperations( [3,1,1,2] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 7;
        $got = $obj->minNumberOperations( [3,1,5,4,2] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
