<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit LongestArithmeticSubsequenceTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("LongestArithmeticSubsequence.php");

class LongestArithmeticSubsequenceTest extends TestCase {

    public function testLongestArithmeticSubsequence() {
        $obj = new LongestArithmeticSubsequence();
        //Test 1
        $want = 4;
        $got = $obj->longestArithSeqLength( [3,6,9,12] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 3;
        $got = $obj->longestArithSeqLength( [9,4,7,2,10] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 4;
        $got = $obj->longestArithSeqLength( [20,1,15,3,10,5,8] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
