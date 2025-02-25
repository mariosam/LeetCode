<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit NumberOfSubarraysWithOddSumTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("NumberOfSubarraysWithOddSum.php");

class NumberOfSubarraysWithOddSumTest extends TestCase {

    public function testNumberOfSubarraysWithOddSum() {
        $obj = new NumberOfSubarraysWithOddSum();
        //Test 1
        $want = 4;
        $got = $obj->numOfSubarrays( [1,3,5] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 0;
        $got = $obj->numOfSubarrays( [2,4,6] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 16;
        $got = $obj->numOfSubarrays( [1,2,3,4,5,6,7] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
