<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MinimumCostToConvertStringITest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MinimumCostToConvertStringI.php");

class MinimumCostToConvertStringITest extends TestCase {

    public function testMinimumCostToConvertStringI() {
        $obj = new MinimumCostToConvertStringI();
        //Test 1
        $want = 28;
        $got = $obj->minimumCost( "abcd", "acbe", ["a","b","c","c","e","d"], ["b","c","b","e","b","e"], [2,5,5,1,2,20] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 12;
        $got = $obj->minimumCost( "aaaa", "bbbb", ["a","c"], ["c","b"], [1,2] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = -1;
        $got = $obj->minimumCost( "abcd", "abce", ["a"], ["e"], [10000] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
