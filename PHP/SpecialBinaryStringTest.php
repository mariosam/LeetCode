<?php
/**
 * @version PHP 8.2
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit SpecialBinaryStringTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("SpecialBinaryString.php");

class SpecialBinaryStringTest extends TestCase {

    public function testSpecialBinaryString() {
        $obj = new SpecialBinaryString();
        //Test 1
        $want = "11100100";
        $got = $obj->makeLargestSpecial( "11011000" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = "10";
        $got = $obj->makeLargestSpecial( "10" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
