<?php
/**
 * @version PHP 7.3.29
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit LongestCommonPrefixTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("LongestCommonPrefix.php");

class LongestCommonPrefixTest extends TestCase {

    public function testLongestCommonPrefix() {
        $obj = new LongestCommonPrefix();
        //Test 1
        $want = "fl";
        $got = $obj->longestCommonPrefix( ["flower","flow","flight"] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = "";
        $got = $obj->longestCommonPrefix( ["dog","racecar","car"] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = "a";
        $got = $obj->longestCommonPrefix( ["a"] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
