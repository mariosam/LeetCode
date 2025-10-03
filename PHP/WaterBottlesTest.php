<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit WaterBottlesTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("WaterBottles.php");

class WaterBottlesTest extends TestCase {

    public function testWaterBottles() {
        $obj = new WaterBottles();
        //Test 1
        $want = 13;
        $got = $obj->numWaterBottles(9, 3);
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 19;
        $got = $obj->numWaterBottles(15, 4);
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
