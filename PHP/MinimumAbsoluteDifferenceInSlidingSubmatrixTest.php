<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MinimumAbsoluteDifferenceInSlidingSubmatrixTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MinimumAbsoluteDifferenceInSlidingSubmatrix.php");

class MinimumAbsoluteDifferenceInSlidingSubmatrixTest extends TestCase {

    public function testMinimumAbsoluteDifferenceInSlidingSubmatrix() {
        $obj = new MinimumAbsoluteDifferenceInSlidingSubmatrix();
        //Test 1
        $want = [[2]];
        $got = $obj->minAbsDiff( [[1,8],[3,-2]], 2 );
        echo "\nTest 1: retornou " . var_export($got, true) . " == esperado: " . var_export($want, true);
        $this->assertEquals($want, $got);
        //Test 2
        $want = [[0,0]];
        $got = $obj->minAbsDiff( [[3,-1]], 1 );
        echo "\nTest 2: retornou " . var_export($got, true) . " == esperado: " . var_export($want, true);
        $this->assertEquals($want, $got);
        //Test 3
        $want = [[1,2]];
        $got = $obj->minAbsDiff( [[1,-2,3],[2,3,5]], 2 );
        echo "\nTest 3: retornou " . var_export($got, true) . " == esperado: " . var_export($want, true);
        $this->assertEquals($want, $got);
    }
}
