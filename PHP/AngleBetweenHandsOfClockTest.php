<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit AngleBetweenHandsOfClockTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("AngleBetweenHandsOfClock.php");

class AngleBetweenHandsOfClockTest extends TestCase {

    public function testAngleBetweenHandsOfClock() {
        $obj = new AngleBetweenHandsOfClock();
        //Test 1
        $want = 165;
        $got = $obj->angleClock(12, 30);
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 75;
        $got = $obj->angleClock(3, 30);
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 7.5;
        $got = $obj->angleClock(3, 15);
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
