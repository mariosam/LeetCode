<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit CountNegativeNumbersInSortedMatrixTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("CountNegativeNumbersInSortedMatrix.php");

class CountNegativeNumbersInSortedMatrixTest extends TestCase {

    public function testCountNegativeNumbersInSortedMatrix() {
        $obj = new CountNegativeNumbersInSortedMatrix();
        //Test 1
        $want = 8;
        $got = $obj->countNegatives( [[4,3,2,-1],[3,2,1,-1],[1,1,-1,-2],[-1,-1,-2,-3]] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 0;
        $got = $obj->countNegatives( [[3,2],[1,0]] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
