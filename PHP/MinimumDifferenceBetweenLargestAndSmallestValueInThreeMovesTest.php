<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MinimumDifferenceBetweenLargestAndSmallestValueInThreeMovesTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MinimumDifferenceBetweenLargestAndSmallestValueInThreeMoves.php");

class MinimumDifferenceBetweenLargestAndSmallestValueInThreeMovesTest extends TestCase {

    public function testMinimumDifferenceBetweenLargestAndSmallestValueInThreeMoves() {
        $obj = new MinimumDifferenceBetweenLargestAndSmallestValueInThreeMoves();
        //Test 1
        $want = 0;
        $got = $obj->minDifference( [5,3,2,4] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 1;
        $got = $obj->minDifference( [1,5,0,10,14] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 0;
        $got = $obj->minDifference( [3,100,20] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
