<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit CountSquareSubmatricesWithAllOnesTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("CountSquareSubmatricesWithAllOnes.php");

class CountSquareSubmatricesWithAllOnesTest extends TestCase {

    public function testCountSquareSubmatricesWithAllOnes() {
        $obj = new CountSquareSubmatricesWithAllOnes();
        //Test 1
        $want = 15;
        $got = $obj->countSquares( [[0,1,1,1],[1,1,1,1],[0,1,1,1]] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 7;
        $got = $obj->countSquares( [[1,0,1],[1,1,0],[1,1,0]] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
