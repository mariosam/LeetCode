<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MagicSquaresInGridTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MagicSquaresInGrid.php");

class MagicSquaresInGridTest extends TestCase {

    public function testMagicSquaresInGrid() {
        $obj = new MagicSquaresInGrid();
        //Test 1
        $want = 1;
        $got = $obj->numMagicSquaresInside([[4,3,8,4],[9,5,1,9],[2,7,6,2]]);
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 0;
        $got = $obj->numMagicSquaresInside([[8]]);
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
