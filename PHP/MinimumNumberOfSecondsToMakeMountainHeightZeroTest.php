<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MinimumNumberOfSecondsToMakeMountainHeightZeroTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MinimumNumberOfSecondsToMakeMountainHeightZero.php");

class MinimumNumberOfSecondsToMakeMountainHeightZeroTest extends TestCase {

    public function testMinimumNumberOfSwapsToMakeTheStringBalanced() {
        $obj = new MinimumNumberOfSecondsToMakeMountainHeightZero();
        //Test 1
        $want = 3;
        $got = $obj->minNumberOfSeconds(4, [2, 1, 1]);
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 12;
        $got = $obj->minNumberOfSeconds(10, [3, 2, 2, 4]);
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 15;
        $got = $obj->minNumberOfSeconds(5, [1]);
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
