<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit NumberOfZeroFilledSubarraysTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("NumberOfZeroFilledSubarrays.php");

class NumberOfZeroFilledSubarraysTest extends TestCase {

    public function testNumberOfZeroFilledSubarrays() {
        $obj = new NumberOfZeroFilledSubarrays();
        //Test 1
        $want = 6;
        $got = $obj->zeroFilledSubarray( [1,3,0,0,2,0,0,4] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 9;
        $got = $obj->zeroFilledSubarray( [0,0,0,2,0,0] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
