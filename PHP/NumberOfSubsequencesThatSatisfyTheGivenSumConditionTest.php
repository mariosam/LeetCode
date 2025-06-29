<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit NumberOfSubsequencesThatSatisfyTheGivenSumConditionTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("NumberOfSubsequencesThatSatisfyTheGivenSumCondition.php");

class NumberOfSubsequencesThatSatisfyTheGivenSumConditionTest extends TestCase {

    public function testNumberOfSubsequencesThatSatisfyTheGivenSumCondition() {
        $obj = new NumberOfSubsequencesThatSatisfyTheGivenSumCondition();
        //Test 1
        $want = 4;
        $got = $obj->numSubseq( [3,5,6,7], 9 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 6;
        $got = $obj->numSubseq( [3,3,6,8], 10 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 61;
        $got = $obj->numSubseq( [2,3,3,4,6,7], 12 );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
