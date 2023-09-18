<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MinimumFlipsToMakeAorBequalCTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MinimumFlipsToMakeAorBequalC.php");

class MinimumFlipsToMakeAorBequalCTest extends TestCase {

    public function testMinimumFlipsToMakeAorBequalC() {
        $obj = new MinimumFlipsToMakeAorBequalC();
        //Test 1
        $want = 3;
        $got = $obj->minFlips( 2, 6, 5 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 1;
        $got = $obj->minFlips( 4, 2, 7 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 0;
        $got = $obj->minFlips( 1, 2, 3 );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
