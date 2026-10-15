<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit ApplyOperationsOnArrayToMaximizeSumOfSquaresTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("ApplyOperationsOnArrayToMaximizeSumOfSquares.php");

class ApplyOperationsOnArrayToMaximizeSumOfSquaresTest extends TestCase {

    public function testApplyOperationsOnArrayToMaximizeSumOfSquares() {
        $obj = new ApplyOperationsOnArrayToMaximizeSumOfSquares();
        //Test 1
        $want = 261;
        $got = $obj->maxSum( [2,6,5,8], 2 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 90;
        $got = $obj->maxSum( [4,5,4,7], 3 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
