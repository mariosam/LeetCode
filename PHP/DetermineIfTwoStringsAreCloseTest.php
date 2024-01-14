<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit DetermineIfTwoStringsAreCloseTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("DetermineIfTwoStringsAreClose.php");

class DetermineIfTwoStringsAreCloseTest extends TestCase {

    public function testDetermineIfTwoStringsAreClose() {
        $obj = new DetermineIfTwoStringsAreClose();
        //Test 1
        $want = true;
        $got = $obj->closeStrings( "abc", "bca" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = false;
        $got = $obj->closeStrings( "a", "aa" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = true;
        $got = $obj->closeStrings( "cabbba", "abbccc" );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
