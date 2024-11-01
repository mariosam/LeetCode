<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit DeleteCharactersToMakeFancyStringTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("DeleteCharactersToMakeFancyString.php");

class DeleteCharactersToMakeFancyStringTest extends TestCase {

    public function testDeleteCharactersToMakeFancyString() {
        $obj = new DeleteCharactersToMakeFancyString();
        //Test 1
        $want = "leetcode";
        $got = $obj->makeFancyString( "leeetcode" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = "aabaa";
        $got = $obj->makeFancyString( "aaabaaaa" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = "aab";
        $got = $obj->makeFancyString( "aab" );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
