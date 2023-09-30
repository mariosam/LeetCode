<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit PeakIndexInMountainArrayTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("PeakIndexInMountainArray.php");

class PeakIndexInMountainArrayTest extends TestCase {

    public function testPeakIndexInMountainArray() {
        $obj = new PeakIndexInMountainArray();
        //Test 1
        $want = 1;
        $got = $obj->peakIndexInMountainArray( [0,1,0] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 1;
        $got = $obj->peakIndexInMountainArray( [0,2,1,0] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 1;
        $got = $obj->peakIndexInMountainArray( [0,10,5,2] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
