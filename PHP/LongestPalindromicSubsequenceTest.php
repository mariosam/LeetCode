<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit LongestPalindromicSubsequenceTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("LongestPalindromicSubsequence.php");

class LongestPalindromicSubsequenceTest extends TestCase {

    public function testLongestPalindromicSubsequence() {
        $obj = new LongestPalindromicSubsequence();
        //Test 1
        $want = 4;
        $got = $obj->longestPalindromeSubseq( "bbbab" );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 2;
        $got = $obj->longestPalindromeSubseq( "cbbd" );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
