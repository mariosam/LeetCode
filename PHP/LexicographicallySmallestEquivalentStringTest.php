<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit LexicographicallySmallestEquivalentStringTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("LexicographicallySmallestEquivalentString.php");

class LexicographicallySmallestEquivalentStringTest extends TestCase {

    public function testLexicographicallySmallestEquivalentString() {
        $obj = new LexicographicallySmallestEquivalentString();
        //Test 1
        $want = "makkek";
        $got = $obj->smallestEquivalentString( "parker", "morris", "parser" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = "hdld";
        $got = $obj->smallestEquivalentString( "hello", "world", "hold" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = "aauaaaaada";
        $got = $obj->smallestEquivalentString( "leetcode", "programs", "sourcecode" );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
