<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit RomanToIntegerTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("RomanToInteger.php");

class RomanToIntegerTest extends TestCase {

    public function testRomanToInteger() {
        $obj = new RomanToInteger();
        //Test 1
        $want = 3;
        $got = $obj->romanToInt( "III" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 58;
        $got = $obj->romanToInt( "LVIII" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 1994;
        $got = $obj->romanToInt( "MCMXCIV" );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
