<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit NumberOfZigZagArraysITest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("NumberOfZigZagArraysI.php");

class NumberOfZigZagArraysITest extends TestCase {

    public function testNumberOfZigZagArraysI() {
        $obj = new NumberOfZigZagArraysI();
        //Test 1
        $want = 2;
        $got = $obj->zigZagArrays(3, 4, 5);
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 10;
        $got = $obj->zigZagArrays(3, 1, 3);
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
