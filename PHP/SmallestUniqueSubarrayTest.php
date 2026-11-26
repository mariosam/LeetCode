<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit SmallestUniqueSubarrayTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("SmallestUniqueSubarray.php");

class SmallestUniqueSubarrayTest extends TestCase {

    public function testSmallestUniqueSubarray() {
        $obj = new SmallestUniqueSubarray();
        //Test 1
        $want = 3;
        $got = $obj->smallestUniqueSubarray( [3,3,3] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 1;
        $got = $obj->smallestUniqueSubarray( [2,1,2,3,3] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 2;
        $got = $obj->smallestUniqueSubarray( [1,1,2,2,1] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
