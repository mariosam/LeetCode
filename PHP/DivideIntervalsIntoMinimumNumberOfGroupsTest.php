<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit DivideIntervalsIntoMinimumNumberOfGroupsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("DivideIntervalsIntoMinimumNumberOfGroups.php");

class DivideIntervalsIntoMinimumNumberOfGroupsTest extends TestCase {

    public function testDivideIntervalsIntoMinimumNumberOfGroups() {
        $obj = new DivideIntervalsIntoMinimumNumberOfGroups();
        //Test 1
        $want = 3;
        $got = $obj->minGroups( [[5,10],[6,8],[1,5],[2,3],[1,10]] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 1;
        $got = $obj->minGroups( [[1,3],[5,6],[8,10],[11,13]] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
