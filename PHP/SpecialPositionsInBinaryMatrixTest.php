<?php
/**
 * @version PHP 8.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit SpecialPositionsInBinaryMatrixTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("SpecialPositionsInBinaryMatrix.php");

class SpecialPositionsInBinaryMatrixTest extends TestCase {

    public function testSpecialPositionsInBinaryMatrix() {
        $obj = new SpecialPositionsInBinaryMatrix();
        //Test 1
        $want = 1;
        $got = $obj->numSpecial( [[1,0,0],[0,0,1],[1,0,0]] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 3;
        $got = $obj->numSpecial( [[1,0,0],[0,1,0],[0,0,1]] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
