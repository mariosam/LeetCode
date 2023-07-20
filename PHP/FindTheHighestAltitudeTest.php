<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit LengthOfLastWordTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("FindTheHighestAltitude.php");

class FindTheHighestAltitudeTest extends TestCase {

    public function testFindTheHighestAltitude() {
        $obj = new FindTheHighestAltitude();
        //Test 1
        $want = 1;
        $got = $obj->largestAltitude( [-5,1,5,0,-7] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 0;
        $got = $obj->largestAltitude( [-4,-3,-2,-1,4,3,2] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
