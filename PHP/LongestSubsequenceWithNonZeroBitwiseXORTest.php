<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit LongestSubsequenceWithNonZeroBitwiseXORTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("LongestSubsequenceWithNonZeroBitwiseXOR.php");

class LongestSubsequenceWithNonZeroBitwiseXORTest extends TestCase {

    public function testLongestSubsequenceWithNonZeroBitwiseXOR() {
        $obj = new LongestSubsequenceWithNonZeroBitwiseXOR();
        //Test 1
        $want = 2;
        $got = $obj->longestSubsequence( [1,2,3] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 3;
        $got = $obj->longestSubsequence( [2,3,4] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
