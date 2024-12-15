<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit ContinuousSubarraysTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("ContinuousSubarrays.php");

class ContinuousSubarraysTest extends TestCase {

    public function testContinuousSubarrays() {
        $obj = new ContinuousSubarrays();
        //Test 1
        $want = 8;
        $got = $obj->continuousSubarrays( [5,4,2,4] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 6;
        $got = $obj->continuousSubarrays( [1,2,3] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
