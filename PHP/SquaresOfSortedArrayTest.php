<?php
/**
 * @version PHP 8.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit SquaresOfSortedArrayTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("SquaresOfSortedArray.php");

class SquaresOfSortedArrayTest extends TestCase {

    public function testSquaresOfSortedArray() {
        $obj = new SquaresOfSortedArray();
        //Test 1
        $want = [0,1,9,16,100];
        $got = $obj->sortedSquares( [-4,-1,0,3,10] );
        echo "\nTest 1: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 2
        $want = [4,9,9,49,121];
        $got = $obj->sortedSquares( [-7,-3,2,3,11] );
        echo "\nTest 2: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
    }
}
