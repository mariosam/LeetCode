<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MaxDotProductOfTwoSubsequencesTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MaxDotProductOfTwoSubsequences.php");

class MaxDotProductOfTwoSubsequencesTest extends TestCase {

    public function testMaxDotProductOfTwoSubsequences() {
        $obj = new MaxDotProductOfTwoSubsequences();
        //Test 1
        $want = 18;
        $got = $obj->maxDotProduct( [2,1,-2,5], [3,0,-6] );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 21;
        $got = $obj->maxDotProduct( [3,-2], [2,-6,7] );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = -1;
        $got = $obj->maxDotProduct( [-1,-1], [1,1] );
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
