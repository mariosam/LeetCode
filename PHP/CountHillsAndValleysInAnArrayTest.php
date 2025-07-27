<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit CountHillsAndValleysInAnArrayTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("CountHillsAndValleysInAnArray.php");

class CountHillsAndValleysInAnArrayTest extends TestCase {

    public function testCountHillsAndValleysInAnArray() {
        $obj = new CountHillsAndValleysInAnArray();
        //Test 1
        $want = 3;
        $got = $obj->countHillValley( [2,4,1,1,6,5] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 0;
        $got = $obj->countHillValley( [6,6,5,5,4,1] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
