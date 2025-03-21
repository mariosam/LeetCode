<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit LongestNiceSubarrayTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("LongestNiceSubarray.php");

class LongestNiceSubarrayTest extends TestCase {

    public function testLongestNiceSubarray() {
        $obj = new LongestNiceSubarray();
        //Test 1
        $want = 3;
        $got = $obj->longestNiceSubarray( [1,3,8,48,10] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 1;
        $got = $obj->longestNiceSubarray( [3,1,5,11,13] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
