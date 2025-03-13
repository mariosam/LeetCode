<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit ZeroArrayTransformationIITest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("ZeroArrayTransformationII.php");

class ZeroArrayTransformationIITest extends TestCase {

    public function testZeroArrayTransformationII() {
        $obj = new ZeroArrayTransformationII();
        //Test 1
        $want = 2;
        $got = $obj->minZeroArray([2,0,2], [[0,2,1],[0,2,1],[1,1,3]]);
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = -1;
        $got = $obj->minZeroArray( [4,3,2,1], [[1,3,2],[0,2,1]] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
