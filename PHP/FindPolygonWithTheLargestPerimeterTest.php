<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit FindPolygonWithTheLargestPerimeterTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("FindPolygonWithTheLargestPerimeter.php");

class FindPolygonWithTheLargestPerimeterTest extends TestCase {

    public function testFindPolygonWithTheLargestPerimeter() {
        $obj = new FindPolygonWithTheLargestPerimeter();
        //Test 1
        $want = 15;
        $got = $obj->largestPerimeter( [5,5,5] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 12;
        $got = $obj->largestPerimeter( [1,12,1,2,5,50,3] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = -1;
        $got = $obj->largestPerimeter( [5,5,50] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
