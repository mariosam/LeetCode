<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit LetterTilePossibilitiesTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("LetterTilePossibilities.php");

class LetterTilePossibilitiesTest extends TestCase {

    public function testLetterTilePossibilities() {
        $obj = new LetterTilePossibilities();
        //Test 1
        $want = 8;
        $got = $obj->numTilePossibilities( "AAB" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 188;
        $got = $obj->numTilePossibilities( "AAABBC" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 1;
        $got = $obj->numTilePossibilities( "V" );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
