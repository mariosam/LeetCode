<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit CircleAndRectangleOverlappingTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("CircleAndRectangleOverlapping.php");

class CircleAndRectangleOverlappingTest extends TestCase {

    public function testCircleAndRectangleOverlapping() {
        $obj = new CircleAndRectangleOverlapping();
        //Test 1
        $want = true;
        $got = $obj->checkOverlap( 1, 0, 0, 1, -1, 3, 1 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = false;
        $got = $obj->checkOverlap( 1, 1, 1, 1, -3, 2, -1 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = true;
        $got = $obj->checkOverlap( 1, 0, 0, -1, 0, 0, 1 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
