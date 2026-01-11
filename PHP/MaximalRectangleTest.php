<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MaximalRectangleTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MaximalRectangle.php");

class MaximalRectangleTest extends TestCase {

    public function testMaximalRectangle() {
        $obj = new MaximalRectangle();
        //Test 1
        $want = 6;
        $got = $obj->maximalRectangle( [["1","0","1","0","0"],["1","0","1","1","1"],["1","1","1","1","1"],["1","0","0","1","0"]] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 0;
        $got = $obj->maximalRectangle( [["0"]] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 1;
        $got = $obj->maximalRectangle([["1"]] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
