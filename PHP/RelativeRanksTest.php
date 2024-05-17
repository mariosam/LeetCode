<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit RelativeRanksTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("RelativeRanks.php");

class RelativeRanksTest extends TestCase {

    public function testRelativeRanks() {
        $obj = new RelativeRanks();
        //Test 1
        $want = ["Gold Medal","Silver Medal","Bronze Medal","4","5"];
        $got = $obj->findRelativeRanks( [5,4,3,2,1] );
        echo "\nTest 1: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 2
        $want = ["Gold Medal","5","Bronze Medal","Silver Medal","4"];
        $got = $obj->findRelativeRanks( [10,3,8,9,4] );
        echo "\nTest 2: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
    }
}
