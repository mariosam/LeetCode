<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit LeftAndRightSumDifferencesTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("LeftAndRightSumDifferences.php");

class LeftAndRightSumDifferencesTest extends TestCase {

    public function testLeftAndRightSumDifferences() {
        $obj = new LeftAndRightSumDifferences();
        //Test 1
        $want = [15,1,11,22];
        $got = $obj->leftRightDifference( [10,4,8,3] );
        echo "\nTest 1: retornou " . json_encode($got) . " == esperado: " . json_encode($want);
        $this->assertEquals($want, $got);
        //Test 2
        $want = [0];
        $got = $obj->leftRightDifference( [1] );
        echo "\nTest 2: retornou " . json_encode($got) . " == esperado: " . json_encode($want);
        $this->assertEquals($want, $got);
    }
}
