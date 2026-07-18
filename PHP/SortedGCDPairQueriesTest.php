<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit SortedGCDPairQueries.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("SortedGCDPairQueries.php");

class SortedGCDPairQueriesTest extends TestCase {

    public function testSortedGCDPairQueries() {
        $obj = new SortedGCDPairQueries();
        //Test 1
        $want = [1,2,2];
        $got = $obj->gcdValues( [2,3,4], [0,2,2] );
        echo "\nTest 1: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 2
        $want = [4,2,1,1];
        $got = $obj->gcdValues( [4,4,2,1], [5,3,1,0] );
        echo "\nTest 2: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 3
        $want = [2,2];
        $got = $obj->gcdValues( [2,2], [0,0] );
        echo "\nTest 3: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
    }
}
