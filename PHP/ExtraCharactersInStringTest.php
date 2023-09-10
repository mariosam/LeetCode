<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit ExtraCharactersInStringTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("ExtraCharactersInString.php");

class ExtraCharactersInStringTest extends TestCase {

    public function testExtraCharactersInString() {
        $obj = new ExtraCharactersInString();
        //Test 1
        $want = 1;
        $got = $obj->minExtraChar( "leetscode", ["leet","code","leetcode"] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 3;
        $got = $obj->minExtraChar( "sayhelloworld", ["hello","world"] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
