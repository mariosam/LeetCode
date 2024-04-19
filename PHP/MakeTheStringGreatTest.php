<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MakeTheStringGreatTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MakeTheStringGreat.php");

class MakeTheStringGreatTest extends TestCase {

    public function testMakeTheStringGreat() {
        $obj = new MakeTheStringGreat();
        //Test 1
        $want = "leetcode";
        $got = $obj->makeGood( "leEeetcode" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = "";
        $got = $obj->makeGood( "abBAcC" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = "s";
        $got = $obj->makeGood( "s" );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
