<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit LongestCommonSubsequenceTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("LongestCommonSubsequence.php");

class LongestCommonSubsequenceTest extends TestCase {

    public function testLongestCommonSubsequence() {
        $obj = new LongestCommonSubsequence();
        //Test 1
        $want = 3;
        $got = $obj->longestCommonSubsequence( "abcde", "ace" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 3;
        $got = $obj->longestCommonSubsequence( "abc", "abc" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 0;
        $got = $obj->longestCommonSubsequence( "abc", "def" );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
