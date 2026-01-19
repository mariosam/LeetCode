<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit SeparateSquaresITest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("SeparateSquaresI.php");

class SeparateSquaresITest extends TestCase {

    public function testSeparateSquaresI() {
        $obj = new SeparateSquaresI();
        //Test 1
        $want = 1.00000;
        $got = $obj->separateSquares( [[0,0,1],[2,2,1]] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got, '', 0.00001);
        //Test 2
        $want = 1.16667;
        $got = $obj->separateSquares( [[0,0,2],[1,1,1]] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, round($got, 5));
    }
}
