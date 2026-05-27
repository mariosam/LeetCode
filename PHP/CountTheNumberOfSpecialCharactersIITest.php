<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit CountTheNumberOfSpecialCharactersIITest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("CountTheNumberOfSpecialCharactersII.php");

class CountTheNumberOfSpecialCharactersIITest extends TestCase {

    public function testCountTheNumberOfSpecialCharactersII() {
        $obj = new CountTheNumberOfSpecialCharactersII();
        //Test 1
        $want = 3;
        $got = $obj->numberOfSpecialChars( "aaAbcBC" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 0;
        $got = $obj->numberOfSpecialChars( "abc" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 0;
        $got = $obj->numberOfSpecialChars( "AbBCab" );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
