<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MinimumCostPathWithEdgeReversalsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MinimumCostPathWithEdgeReversals.php");

class MinimumCostPathWithEdgeReversalsTest extends TestCase {

    public function testMinimumCostPathWithEdgeReversals() {
        $obj = new MinimumCostPathWithEdgeReversals();
        //Test 1
        $want = 5;
        $got = $obj->minCost( 4, [[0,1,3],[3,1,1],[2,3,4],[0,2,2]] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 3;
        $got = $obj->minCost( 4, [[0,2,1],[2,1,1],[1,3,1],[2,3,3]]);
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
