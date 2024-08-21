<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MaximumDistanceInArraysTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MaximumDistanceInArrays.php");

class MaximumDistanceInArraysTest extends TestCase {

    public function testMaximumDistanceInArrays() {
        $obj = new MaximumDistanceInArrays();
        //Test 1
        $want = 4;
        $got = $obj->maxDistance( [[1,2,3],[4,5],[1,2,3]] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 0;
        $got = $obj->maxDistance( [[1],[1]] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
