<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MinimumScoreTriangulationOfPolygonTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MinimumScoreTriangulationOfPolygon.php");

class MinimumScoreTriangulationOfPolygonTest extends TestCase {

    public function testMinimumScoreTriangulationOfPolygon() {
        $obj = new MinimumScoreTriangulationOfPolygon();
        //Test 1
        $want = 6;
        $got = $obj->minScoreTriangulation( [1,2,3] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 144;
        $got = $obj->minScoreTriangulation( [3,7,4,5] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 13;
        $got = $obj->minScoreTriangulation( [1,3,1,4,1,5] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
