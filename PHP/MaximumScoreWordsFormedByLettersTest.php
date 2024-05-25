<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MaximumScoreWordsFormedByLettersTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MaximumScoreWordsFormedByLetters.php");

class MaximumScoreWordsFormedByLettersTest extends TestCase {

    public function testMaximumScoreWordsFormedByLetters() {
        $obj = new MaximumScoreWordsFormedByLetters();
        //Test 1
        $want = 23;
        $got = $obj->maxScoreWords( ["dog","cat","dad","good"], ["a","a","c","d","d","d","g","o","o"], [1,0,9,5,0,0,3,0,0,0,0,0,0,0,2,0,0,0,0,0,0,0,0,0,0,0] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 27;
        $got = $obj->maxScoreWords( ["xxxz","ax","bx","cx"], ["z","a","b","c","x","x","x"], [4,4,4,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,5,0,10] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 0;
        $got = $obj->maxScoreWords( ["leetcode"], ["l","e","t","c","o","d"], [0,0,1,1,1,0,0,0,0,0,0,1,0,0,1,0,0,0,0,1,0,0,0,0,0,0] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
