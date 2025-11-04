<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MinimumTimeToMakeRopeColorfulTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MinimumTimeToMakeRopeColorful.php");

class MinimumTimeToMakeRopeColorfulTest extends TestCase {

    public function testMinimumTimeToMakeRopeColorful() {
        $obj = new MinimumTimeToMakeRopeColorful();
        //Test 1
        $want = 3;
        $got = $obj->minCost( "abaac", [1,2,3,4,5] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 0;
        $got = $obj->minCost( "abc", [1,2,3] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 2;
        $got = $obj->minCost( "aabaa", [1,2,3,4,1] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
