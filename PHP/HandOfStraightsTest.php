<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit HandOfStraightsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("HandOfStraights.php");

class HandOfStraightsTest extends TestCase {

    public function testHandOfStraights() {
        $obj = new HandOfStraights();
        //Test 1
        $want = true;
        $got = $obj->isNStraightHand( [1,2,3,6,2,3,4,7,8], 3 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = false;
        $got = $obj->isNStraightHand( [1,2,3,4,5], 4 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
