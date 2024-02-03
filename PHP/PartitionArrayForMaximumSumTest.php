<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit PartitionArrayForMaximumSumTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("PartitionArrayForMaximumSum.php");

class PartitionArrayForMaximumSumTest extends TestCase {

    public function testPartitionArrayForMaximumSum() {
        $obj = new PartitionArrayForMaximumSum();
        //Test 1
        $want = 84;
        $got = $obj->maxSumAfterPartitioning( [1,15,7,9,2,5,10], 3 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 83;
        $got = $obj->maxSumAfterPartitioning( [1,4,1,5,7,3,6,1,9,9,3], 4 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 1;
        $got = $obj->maxSumAfterPartitioning( [1], 1 );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
