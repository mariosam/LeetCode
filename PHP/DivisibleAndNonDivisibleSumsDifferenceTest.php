<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit DivisibleAndNonDivisibleSumsDifferenceTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("DivisibleAndNonDivisibleSumsDifference.php");

class DivisibleAndNonDivisibleSumsDifferenceTest extends TestCase {

    public function testDivisibleAndNonDivisibleSumsDifference() {
        $obj = new DivisibleAndNonDivisibleSumsDifference();
        //Test 1
        $want = 19;
        $got = $obj->differenceOfSums( 10, 3 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 15;
        $got = $obj->differenceOfSums( 5, 6 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = -15;
        $got = $obj->differenceOfSums( 5, 1 );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
