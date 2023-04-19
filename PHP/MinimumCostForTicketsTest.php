<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MinimumCostForTicketsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MinimumCostForTickets.php");

class MinimumCostForTicketsTest extends TestCase {

    public function testMinimumCostForTickets() {
        $obj = new MinimumCostForTickets();
        //Test 1
        $want = 11;
        $got = $obj->mincostTickets( [1,4,6,7,8,20], [2,7,15] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 17;
        $got = $obj->mincostTickets( [1,2,3,4,5,6,7,8,9,10,30,31], [2,7,15] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
