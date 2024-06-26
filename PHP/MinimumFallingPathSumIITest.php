<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MinimumFallingPathSumIITest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MinimumFallingPathSumII.php");

class MinimumFallingPathSumIITest extends TestCase {

    public function testMinimumFallingPathSumII() {
        $obj = new MinimumFallingPathSumII();
        //Test 1
        $want = 13;
        $got = $obj->minFallingPathSum( [[1,2,3],[4,5,6],[7,8,9]] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 7;
        $got = $obj->minFallingPathSum( [[7]] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
