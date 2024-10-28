<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit LongestSquareStreakinAnArrayTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("LongestSquareStreakinAnArray.php");

class LongestSquareStreakinAnArrayTest extends TestCase {

    public function testLongestSquareStreakinAnArray() {
        $obj = new LongestSquareStreakinAnArray();
        //Test 1
        $want = 3;
        $got = $obj->longestSquareStreak( [4,3,6,16,8,2] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = -1;
        $got = $obj->longestSquareStreak( [2,3,5,6,7] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
