<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit KthSmallestAmountWithSingleDenominationCombinationTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("KthSmallestAmountWithSingleDenominationCombination.php");

class KthSmallestAmountWithSingleDenominationCombinationTest extends TestCase {

    public function testKthSmallestAmountWithSingleDenominationCombination() {
        $obj = new KthSmallestAmountWithSingleDenominationCombination();
        //Test 1
        $want = 9;
        $got = $obj->findKthSmallest( [3,6,9], 3 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 12;
        $got = $obj->findKthSmallest( [5,2], 7 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
