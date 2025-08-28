<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit SortMatrixByDiagonalsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("SortMatrixByDiagonals.php");

class SortMatrixByDiagonalsTest extends TestCase {

    public function testSortMatrixByDiagonals() {
        $obj = new SortMatrixByDiagonals();
        //Test 1
        $want = [[8,2,3],[9,6,7],[4,5,1]];
        $got = $obj->sortMatrix( [[1,7,3],[9,8,2],[4,5,6]] );
        echo "\nTest 1: retornou " . json_encode($got) . " == esperado: " . json_encode($want);
        $this->assertEquals($want, $got);
        //Test 2
        $want = [[2,1],[1,0]];
        $got = $obj->sortMatrix( [[0,1],[1,2]] );
        echo "\nTest 2: retornou " . json_encode($got) . " == esperado: " . json_encode($want);
        $this->assertEquals($want, $got);
        //Test 3
        $want = [[1]];
        $got = $obj->sortMatrix( [[1]] );
        echo "\nTest 3: retornou " . json_encode($got) . " == esperado: " . json_encode($want);
        $this->assertEquals($want, $got);
    }
}
