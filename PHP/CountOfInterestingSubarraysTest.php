<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit CountOfInterestingSubarraysTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("CountOfInterestingSubarrays.php");

class CountOfInterestingSubarraysTest extends TestCase {

    public function testCountOfInterestingSubarrays() {
        $obj = new CountOfInterestingSubarrays();
        //Test 1
        $want = 3;
        $got = $obj->countInterestingSubarrays( [3,2,4], 2, 1 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 2;
        $got = $obj->countInterestingSubarrays( [3,1,9,6], 3, 0 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
