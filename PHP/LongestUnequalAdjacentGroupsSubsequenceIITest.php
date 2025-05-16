<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit LongestUnequalAdjacentGroupsSubsequenceIITest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("LongestUnequalAdjacentGroupsSubsequenceII.php");

class LongestUnequalAdjacentGroupsSubsequenceIITest extends TestCase {

    public function testLongestUnequalAdjacentGroupsSubsequenceII() {
        $obj = new LongestUnequalAdjacentGroupsSubsequenceII();
        //Test 1
        $want = ["a","b","c","d"];
        $got = $obj->getWordsInLongestSubsequence( ["a","b","c","d"], [1,2,3,4] );
        echo "\nTest 1: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 2
        $want = ["bab","cab"];
        $got = $obj->getWordsInLongestSubsequence( ["bab","dab","cab"], [1,2,2] );
        echo "\nTest 2: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
    }
}
