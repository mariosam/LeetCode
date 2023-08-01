<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MinimumCostToMakeArrayEqualTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MinimumCostToMakeArrayEqual.php");

class MinimumCostToMakeArrayEqualTest extends TestCase {

    public function testMinimumCostToMakeArrayEqual() {
        $obj = new MinimumCostToMakeArrayEqual();
        //Test 1
        $want = 8;
        $got = $obj->minCost( [1,3,5,2], [2,3,1,14] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 0;
        $got = $obj->minCost( [2,2,2,2,2], [4,2,8,1,3] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
