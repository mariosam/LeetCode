<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit LengthOfLastWordTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("LengthOfLastWord.php");

class LengthOfLastWordTest extends TestCase {

    public function testLengthOfLastWord() {
        $obj = new LengthOfLastWord();
        //Test 1
        $want = 5;
        $got = $obj->lengthOfLastWord( "Hello World" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 4;
        $got = $obj->lengthOfLastWord( "   fly me   to   the moon  " );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 6;
        $got = $obj->lengthOfLastWord( "luffy is still joyboy" );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 4
        $want = 1;
        $got = $obj->lengthOfLastWord( "a" );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
