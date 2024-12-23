<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit ConstructStringWithRepeatLimitTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("ConstructStringWithRepeatLimit.php");

class ConstructStringWithRepeatLimitTest extends TestCase {

    public function testConstructStringWithRepeatLimit() {
        $obj = new ConstructStringWithRepeatLimit();
        //Test 1
        $want = "zzcccac";
        $got = $obj->repeatLimitedString( "cczazcc", 3 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = "bbabaa";
        $got = $obj->repeatLimitedString( "aababab", 2 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
