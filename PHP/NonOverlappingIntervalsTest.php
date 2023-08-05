<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit NonOverlappingIntervalsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("NonOverlappingIntervals.php");

class NonOverlappingIntervalsTest extends TestCase {

    public function testNonOverlappingIntervals() {
        $obj = new NonOverlappingIntervals();
        //Test 1
        $want = 1;
        $got = $obj->eraseOverlapIntervals( [[1,2],[2,3],[3,4],[1,3]] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 2;
        $got = $obj->eraseOverlapIntervals( [[1,2],[1,2],[1,2]] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 0;
        $got = $obj->eraseOverlapIntervals( [[1,2],[2,3]] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
