<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit TrappingRainWaterTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("TrappingRainWater.php");

class TrappingRainWaterTest extends TestCase {

    public function testTrappingRainWater() {
        $obj = new TrappingRainWater();
        //Test 1
        $want = 6;
        $got = $obj->trap( [0,1,0,2,1,0,1,3,2,1,2,1] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 9;
        $got = $obj->trap( [4,2,0,3,2,5] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
