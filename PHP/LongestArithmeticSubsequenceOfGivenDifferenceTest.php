<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit LongestArithmeticSubsequenceOfGivenDifferenceTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("LongestArithmeticSubsequenceOfGivenDifference.php");

class LongestArithmeticSubsequenceOfGivenDifferenceTest extends TestCase {

    public function testLongestArithmeticSubsequenceOfGivenDifference() {
        $obj = new LongestArithmeticSubsequenceOfGivenDifference();
        //Test 1
        $want = 4;
        $got = $obj->longestSubsequence( [1,2,3,4], 1 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 1;
        $got = $obj->longestSubsequence( [1,3,5,7], 1 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 4;
        $got = $obj->longestSubsequence( [1,5,7,8,5,3,4,2,1], -2 );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
