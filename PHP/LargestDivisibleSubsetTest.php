<?php
/**
 * @version PHP 8.2.22
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit LargestDivisibleSubsetTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("LargestDivisibleSubset.php");

class LargestDivisibleSubsetTest extends TestCase {

    public function testLargestDivisibleSubset() {
        $obj = new LargestDivisibleSubset();
        //Test 1
        $want = [2,1];
        $got = $obj->largestDivisibleSubset( [1,2,3] );
        echo "\nTest 1: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
        //Test 2
        $want = [8,4,2,1];
        $got = $obj->largestDivisibleSubset( [1,2,4,8] );
        echo "\nTest 2: retornou " . implode($got) . " == esperado: " . implode($want);
        $this->assertEquals($want, $got);
    }
}
