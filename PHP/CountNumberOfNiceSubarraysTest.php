<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit CountNumberOfNiceSubarraysTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("CountNumberOfNiceSubarrays.php");

class CountNumberOfNiceSubarraysTest extends TestCase {

    public function testCountNumberOfNiceSubarrays() {
        $obj = new CountNumberOfNiceSubarrays();
        //Test 1
        $want = 2;
        $got = $obj->numberOfSubarrays( [1,1,2,1,1], 3 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 0;
        $got = $obj->numberOfSubarrays( [2,4,6], 1 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 16;
        $got = $obj->numberOfSubarrays( [2,2,2,1,2,2,1,2,2,2], 2 );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
