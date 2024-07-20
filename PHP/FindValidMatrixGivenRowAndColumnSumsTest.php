<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit FindValidMatrixGivenRowAndColumnSumsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("FindValidMatrixGivenRowAndColumnSums.php");

class FindValidMatrixGivenRowAndColumnSumsTest extends TestCase {

    public function testFindValidMatrixGivenRowAndColumnSums() {
        $obj = new FindValidMatrixGivenRowAndColumnSums();
        //Test 1
        $want = [[3,0],[1,7]];
        $got = $obj->restoreMatrix( [3,8], [4,7] );
        echo "\nTest 1: retornou " . var_export($got, true) . " == esperado: " . var_export($want, true);
        $this->assertEquals($want, $got);
        //Test 2
        $want = [[0,5,0],[6,1,0],[2,0,8]];
        $got = $obj->restoreMatrix( [5,7,10], [8,6,8] );
        echo "\nTest 2: retornou " . var_export($got, true) . " == esperado: " . var_export($want, true);
        $this->assertEquals($want, $got);
    }
}
