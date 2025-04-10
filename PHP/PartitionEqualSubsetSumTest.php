<?php
/**
 * @version PHP 8.2.20
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit PartitionEqualSubsetSumTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("PartitionEqualSubsetSum.php");

class PartitionEqualSubsetSumTest extends TestCase {

    public function testPartitionEqualSubsetSum() {
        $obj = new PartitionEqualSubsetSum();
        //Test 1
        $want = true;
        $got = $obj->canPartition( [1,5,11,5] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = false;
        $got = $obj->canPartition( [1,2,3,5] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
