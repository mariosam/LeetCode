<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit ContainerWithMostWaterTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("ContainerWithMostWater.php");

class ContainerWithMostWaterTest extends TestCase {

    public function testCompareVersionNumbers() {
        $obj = new ContainerWithMostWater();
        //Test 1
        $want = 49;
        $got = $obj->maxArea( [1,8,6,2,5,4,8,3,7] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 1;
        $got = $obj->maxArea( [1,1] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
