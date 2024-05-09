<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit ReversePrefixOfWordTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("ReversePrefixOfWord.php");

class ReversePrefixOfWordTest extends TestCase {

    public function testReversePrefixOfWord() {
        $obj = new ReversePrefixOfWord();
        //Test 1
        $want = "dcbaefd";
        $got = $obj->reversePrefix( "abcdefd", "d" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = "zxyxxe";
        $got = $obj->reversePrefix( "xyxzxe", "z" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = "abcd";
        $got = $obj->reversePrefix( "abcd", "z" );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
