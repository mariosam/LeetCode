<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit ZeroArrayTransformationITest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("ZeroArrayTransformationI.php");

class ZeroArrayTransformationITest extends TestCase {

    public function testZeroArrayTransformationI() {
        $obj = new ZeroArrayTransformationI();
        //Test 1
        $want = true;
        $got = $obj->isZeroArray([1,0,1], [[0,2]]);
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = false;
        $got = $obj->isZeroArray([4,3,2,1], [[1,3],[0,2]]);
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
