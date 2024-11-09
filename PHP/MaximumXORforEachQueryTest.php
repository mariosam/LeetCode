<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MaximumXORforEachQueryTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MaximumXORforEachQuery.php");

class MaximumXORforEachQueryTest extends TestCase {

    public function testMaximumXORforEachQuery() {
        $obj = new MaximumXORforEachQuery();
        //Test 1
        $want = [0,3,2,3];
        $got = $obj->getMaximumXor( [0,1,1,3], 2 );
        echo "\nTest 1: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 2
        $want = [5,2,6,5];
        $got = $obj->getMaximumXor( [2,3,4,7], 3 );
        echo "\nTest 2: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 3
        $want = [4,3,6,4,6,7];
        $got = $obj->getMaximumXor( [0,1,2,2,5,7], 3 );
        echo "\nTest 3: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
    }
}
