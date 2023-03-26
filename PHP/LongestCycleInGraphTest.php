<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit LongestCycleInGraphTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("LongestCycleInGraph.php");

class LongestCycleInGraphTest extends TestCase {

    public function testLongestCycleInGraph() {
        $obj = new LongestCycleInGraph();
        //Test 1
        $want = 3;
        $got = $obj->longestCycle( [3,3,4,2,3] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = -1;
        $got = $obj->longestCycle( [2,-1,3,1] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
