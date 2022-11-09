<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit LongestSubstringTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("LongestSubstring.php");

class LongestSubstringTest extends TestCase {

    public function testLongestSubstring() {
        $obj = new LongestSubstring();
        //Test 1
        $want = 3;
        $got = $obj->lengthOfLongestSubstring( "dvdf" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 1;
        $got = $obj->lengthOfLongestSubstring( "bbbbb" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 3;
        $got = $obj->lengthOfLongestSubstring( "pwwkew" );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 4
        $want = 3;
        $got = $obj->lengthOfLongestSubstring( "abcabcbb" );
        echo "\nTest 4: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 5
        $want = 2;
        $got = $obj->lengthOfLongestSubstring( "abba" );
        echo "\nTest 5: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 6
        $want = 3;
        $got = $obj->lengthOfLongestSubstring( "abccb" );
        echo "\nTest 6: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 7
        $want = 3;
        $got = $obj->lengthOfLongestSubstring( "abccba" );
        echo "\nTest 7: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 8
        $want = 6;
        $got = $obj->lengthOfLongestSubstring( "professor" );
        echo "\nTest 8: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 9
        $want = 11;
        $got = $obj->lengthOfLongestSubstring( "salmonserbic" );
        echo "\nTest 9: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 10
        $want = 7;
        $got = $obj->lengthOfLongestSubstring( "salmonsalmosalmonella" );
        echo "\nTest 10: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
