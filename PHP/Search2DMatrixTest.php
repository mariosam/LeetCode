<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit Search2DMatrixTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("Search2DMatrix.php");

class Search2DMatrixTest extends TestCase {

    public function testSearch2DMatrix() {
        $obj = new Search2DMatrix();
        //Test 1
        $want = true;
        $got = $obj->searchMatrix( [[1,3,5,7],[10,11,16,20],[23,30,34,60]], 3 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = false;
        $got = $obj->searchMatrix( [[1,3,5,7],[10,11,16,20],[23,30,34,60]], 13 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
