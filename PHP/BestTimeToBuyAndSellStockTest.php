<?php
/**
 * @version PHP 8.2.0
 * @author MARIO SAM <eu@mariosam.com.br>
 * @see I would love to work with you instead solving web code tests: hire me!
 * $ ./vendor/bin/phpunit BestTimeToBuyAndSellStockTest.php
 */
namespace PHP;

use PHPUnit\Framework\TestCase;
require ("BestTimeToBuyAndSellStock.php");

class BestTimeToBuyAndSellStockTest extends TestCase {

    public function testBestTimeToBuyAndSellStock() {
        $obj = new BestTimeToBuyAndSellStock();
        //Test 1
        $want = 8;
        $got = $obj->maxProfit( [1,3,2,8,4,9], 2 );
        echo "\nTest 1: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
        //Test 2
        $want = 6;
        $got = $obj->maxProfit( [1,3,7,5,10,3], 3 );
        echo "\nTest 2: retornou " . $got . " == esperado: " . $want;
        $this->assertEquals($want, $got);
    }
}
