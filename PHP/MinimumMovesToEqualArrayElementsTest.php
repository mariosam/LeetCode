<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MinimumMovesToEqualArrayElementsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MinimumMovesToEqualArrayElements.php");

class MinimumMovesToEqualArrayElementsTest extends TestCase {

    public function testMinimumMovesToEqualArrayElements() {
        $obj = new MinimumMovesToEqualArrayElements();
        //Test 1
        $want = 3;
        $got = $obj->minMoves( [1,2,3] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 0;
        $got = $obj->minMoves( [1,1,1] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
