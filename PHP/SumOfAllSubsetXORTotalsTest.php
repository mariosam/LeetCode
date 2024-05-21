<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit SumOfAllSubsetXORTotalsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("SumOfAllSubsetXORTotals.php");

class SumOfAllSubsetXORTotalsTest extends TestCase {

    public function testSumOfAllSubsetXORTotals() {
        $obj = new SumOfAllSubsetXORTotals();
        //Test 1
        $want = 6;
        $got = $obj->subsetXORSum( [1,3] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 28;
        $got = $obj->subsetXORSum( [5,1,6] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 480;
        $got = $obj->subsetXORSum( [3,4,5,6,7,8] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
