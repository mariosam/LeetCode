<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MinimizeMaximumOfArrayTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MinimizeMaximumOfArray.php");

class MinimizeMaximumOfArrayTest extends TestCase {

    public function testMinimizeMaximumOfArray() {
        $obj = new MinimizeMaximumOfArray();
        //Test 1
        $want = 5;
        $got = $obj->minimizeArrayValue( [3,7,1,6] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 10;
        $got = $obj->minimizeArrayValue( [10,1] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
