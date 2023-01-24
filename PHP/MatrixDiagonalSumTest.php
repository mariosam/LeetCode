<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MatrixDiagonalSumTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MatrixDiagonalSum.php");

class MatrixDiagonalSumTest extends TestCase {

    public function testMatrixDiagonalSum() {
        $obj = new MatrixDiagonalSum();
        //Test 1
        $want = 25;
        $got = $obj->diagonalSum( [[1,2,3],[4,5,6],[7,8,9]] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 8;
        $got = $obj->diagonalSum( [[1,1,1,1],[1,1,1,1],[1,1,1,1],[1,1,1,1]] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 5;
        $got = $obj->diagonalSum( [[5]] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
