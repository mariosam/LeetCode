<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MinimumLimitOfBallsInaBagTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MinimumLimitOfBallsInaBag.php");

class MinimumLimitOfBallsInaBagTest extends TestCase {

    public function testMinimumLimitOfBallsInaBag() {
        $obj = new MinimumLimitOfBallsInaBag();
        //Test 1
        $want = 3;
        $got = $obj->minimumSize( [9], 2 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 2;
        $got = $obj->minimumSize( [2,4,8,2], 4 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
