<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit LongestSubarrayOf1sAfterDeletingOneElementTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("LongestSubarrayOf1sAfterDeletingOneElement.php");

class LongestSubarrayOf1sAfterDeletingOneElementTest extends TestCase {

    public function testLongestSubarrayOf1sAfterDeletingOneElement() {
        $obj = new LongestSubarrayOf1sAfterDeletingOneElement();
        //Test 1
        $want = 3;
        $got = $obj->longestSubarray( [1,1,0,1] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 5;
        $got = $obj->longestSubarray( [0,1,1,1,0,1,1,0,1] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 2;
        $got = $obj->longestSubarray( [1,1,1] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
