<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MaximumDifferenceBetweenAdjacentElementsInACircularArrayTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MaximumDifferenceBetweenAdjacentElementsInACircularArray.php");

class MaximumDifferenceBetweenAdjacentElementsInACircularArrayTest extends TestCase {

    public function testMaximumDifferenceBetweenAdjacentElementsInACircularArray() {
        $obj = new MaximumDifferenceBetweenAdjacentElementsInACircularArray();
        //Test 1
        $want = 3;
        $got = $obj->maxAdjacentDistance( [1,2,4] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 5;
        $got = $obj->maxAdjacentDistance( [-5,-10,-5] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
