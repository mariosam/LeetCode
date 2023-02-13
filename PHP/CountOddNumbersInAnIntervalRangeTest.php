<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit CountOddNumbersInAnIntervalRangeTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("CountOddNumbersInAnIntervalRange.php");

class CountOddNumbersInAnIntervalRangeTest extends TestCase {

    public function testCountOddNumbersInAnIntervalRange() {
        $obj = new CountOddNumbersInAnIntervalRange();
        //Test 1
        $want = 3;
        $got = $obj->countOdds( 3, 7 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 1;
        $got = $obj->countOdds( 8, 10 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 86213013;
        $got = $obj->countOdds( 798273637, 970699661 );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
