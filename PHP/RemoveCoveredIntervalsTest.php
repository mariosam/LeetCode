<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit RemoveCoveredIntervalsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("RemoveCoveredIntervals.php");

class RemoveCoveredIntervalsTest extends TestCase {

    public function testRemoveCoveredIntervals() {
        $obj = new RemoveCoveredIntervals();
        //Test 1
        $want = 2;
        $got = $obj->removeCoveredIntervals( [[1,4],[3,6],[2,8]] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 1;
        $got = $obj->removeCoveredIntervals( [[1,4],[2,3]] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
