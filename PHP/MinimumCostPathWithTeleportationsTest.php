<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MinimumCostPathWithTeleportationsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MinimumCostPathWithTeleportations.php");

class MinimumCostPathWithTeleportationsTest extends TestCase {

    public function testMinimumCostPathWithTeleportations() {
        $obj = new MinimumCostPathWithTeleportations();
        //Test 1
        $want = 7;
        $got = $obj->minCost( [[1,3,3],[2,5,4],[4,3,5]], 2 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 9;
        $got = $obj->minCost( [[1,2],[2,3],[3,4]], 1 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
