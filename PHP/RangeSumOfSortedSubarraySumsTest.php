<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit RangeSumOfSortedSubarraySumsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("RangeSumOfSortedSubarraySums.php");

class RangeSumOfSortedSubarraySumsTest extends TestCase {

    public function testRangeSumOfSortedSubarraySums() {
        $obj = new RangeSumOfSortedSubarraySums();
        //Test 1
        $want = 13;
        $got = $obj->rangeSum( [1,2,3,4], 4, 1, 5 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 6;
        $got = $obj->rangeSum( [1,2,3,4], 4, 3, 4 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 50;
        $got = $obj->rangeSum( [1,2,3,4], 4, 1, 10 );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
