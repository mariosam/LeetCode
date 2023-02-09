<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MedianOfTwoSortedArraysTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MedianOfTwoSortedArrays.php");

class MedianOfTwoSortedArraysTest extends TestCase {

    public function testMedianOfTwoSortedArrays() {
        $obj = new MedianOfTwoSortedArrays();
        //Test 1
        $want = 2.00000;
        $got = $obj->findMedianSortedArrays( [1,3], [2] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 2.50000;
        $got = $obj->findMedianSortedArrays( [1,2], [3,4] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
