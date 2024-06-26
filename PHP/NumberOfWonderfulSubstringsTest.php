<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit NumberOfWonderfulSubstringsTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("NumberOfWonderfulSubstrings.php");

class NumberOfWonderfulSubstringsTest extends TestCase {

    public function testNumberOfWonderfulSubstrings() {
        $obj = new NumberOfWonderfulSubstrings();
        //Test 1
        $want = 4;
        $got = $obj->wonderfulSubstrings( "aba" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 9;
        $got = $obj->wonderfulSubstrings( "aabb" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 2;
        $got = $obj->wonderfulSubstrings( "he" );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
