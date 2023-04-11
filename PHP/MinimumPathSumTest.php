<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MinimumPathSumTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MinimumPathSum.php");

class MinimumPathSumTest extends TestCase {

    public function testMinimumPathSum() {
        $obj = new MinimumPathSum();
        //Test 1
        $want = 7;
        $got = $obj->minPathSum( [[1,3,1],[1,5,1],[4,2,1]] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 12;
        $got = $obj->minPathSum( [[1,2,3],[4,5,6]] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
