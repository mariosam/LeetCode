<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit ClosestEqualElementQueriesTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("ClosestEqualElementQueries.php");

class ClosestEqualElementQueriesTest extends TestCase {

    public function testClosestEqualElementQueries() {
        $obj = new ClosestEqualElementQueries();
        //Test 1
        $want = [2,-1,3];
        $got = $obj->solveQueries([1,3,1,4,1,3,2], [0,3,5]);
        echo "\nTest 1: retornou " . var_export($got, true) . " == esperado: " . var_export($want, true);
        $this->assertEquals($want, $got);
        //Test 2
        $want = [-1,-1,-1,-1];
        $got = $obj->solveQueries([1,2,3,4], [0,1,2,3]);
        echo "\nTest 2: retornou " . var_export($got, true) . " == esperado: " . var_export($want, true);
        $this->assertEquals($want, $got);
    }
}
