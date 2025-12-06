<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit CountPartitionsWithEvenSumDifferenceTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("CountPartitionsWithEvenSumDifference.php");

class CountPartitionsWithEvenSumDifferenceTest extends TestCase {

    public function testCountPartitionsWithEvenSumDifference() {
        $obj = new CountPartitionsWithEvenSumDifference();
        //Test 1
        $want = 4;
        $got = $obj->countPartitions( [10,10,3,7,6] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 0;
        $got = $obj->countPartitions( [1,2,2] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 3;
        $got = $obj->countPartitions( [2,4,6,8] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
