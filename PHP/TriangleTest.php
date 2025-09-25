<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit TriangleTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("Triangle.php");

class TriangleTest extends TestCase {

    public function testTriangle() {
        $obj = new Triangle();
        //Test 1
        $want = 11;
        $got = $obj->minimumTotal([[2],[3,4],[6,5,7],[4,1,8,3]]);
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = -10;
        $got = $obj->minimumTotal( [[-10]] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
