<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit FindTheNumberOfSubsequencesWithEqualGCDTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("FindTheNumberOfSubsequencesWithEqualGCD.php");

class FindTheNumberOfSubsequencesWithEqualGCDTest extends TestCase {

    public function testFindTheNumberOfSubsequencesWithEqualGCD() {
        $obj = new FindTheNumberOfSubsequencesWithEqualGCD();
        //Test 1
        $want = 10;
        $got = $obj->subsequencePairCount([1,2,3,4]);
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 2;
        $got = $obj->subsequencePairCount([10,20,30]);
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 50;
        $got = $obj->subsequencePairCount([1,1,1,1]);
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
