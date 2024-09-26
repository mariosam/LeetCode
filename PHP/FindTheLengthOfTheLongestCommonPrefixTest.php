<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit FindTheLengthOfTheLongestCommonPrefixTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("FindTheLengthOfTheLongestCommonPrefix.php");

class FindTheLengthOfTheLongestCommonPrefixTest extends TestCase {

    public function testFindTheLengthOfTheLongestCommonPrefix() {
        $obj = new FindTheLengthOfTheLongestCommonPrefix();
        //Test 1
        $want = 3;
        $got = $obj->longestCommonPrefix( [1,10,100], [1000] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 0;
        $got = $obj->longestCommonPrefix( [1,2,3], [4,4,4] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
