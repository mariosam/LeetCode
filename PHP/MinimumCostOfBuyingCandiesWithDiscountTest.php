<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit MinimumCostOfBuyingCandiesWithDiscountTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("MinimumCostOfBuyingCandiesWithDiscount.php");

class MinimumCostOfBuyingCandiesWithDiscountTest extends TestCase {

    public function testMinimumCostOfBuyingCandiesWithDiscount() {
        $obj = new MinimumCostOfBuyingCandiesWithDiscount();
        //Test 1
        $want = 5;
        $got = $obj->minimumCost([1,2,3]);
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 23;
        $got = $obj->minimumCost([6,5,7,9,2,2]);
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 3
        $want = 10;
        $got = $obj->minimumCost([5,5]);
        echo "\nTest 3: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
